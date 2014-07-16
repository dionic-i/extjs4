<?php
/**
 * Description of ExtBase
 * Базовый родительский класс компонентов ExtJs.
 *
 * Алгоритм создания компонента по переданному конфигурационному объекту:
 * Если у классов потомков есть свойства, которые не используются в ExtJS компонентах,
 * то их надо добавлять в методе getNotExtProperties, чтобы они не добавлялись при формировании
 * выходного конфигурационного объета.
 * Если необходимо какое-то свойство сделать с отличной от обычной логикой определения необходимо
 * сделать его @protected и добавить set и get методы.
 * Для стандартной логики необходимо просто сделать его public.
 *
 * 1. Свойство класса экземпляр CList, то в javascript ExtJs классе свойство объекта array
 * 2. Свойство класса экземпляр ExtBase, CMap или assocarray, то в javascript ExtJs классе свойство объекта object
 * 3. Если свойство компонента не выставлено, то в ExtJs классе оно будет установлено по умолчанию
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 15.06.2013
 */

namespace dionici\extjs4;

use yii\base\Component;
use yii\helpers\ArrayHelper;
use dionici\extjs4\app\ExtApplication;

class ExtBase extends Component
{
	/**
	 * Шаблон скрипта ExtApplication
	 * @var string
	 */
	private $appTpl;

	/**
	 * Шаблон скрипта классов
	 * @var string
	 */
	private $classTpl;

	/**
	 * Список невидимых свойств класса. Т.е. которых нет в компоненте, но они должны быть выведены в ExtJs.
	 * @var array
	 */
	protected $_invisibleProperties;

	/**
	 * Список свойств компонента, которые не выводтся в ExtJs
	 * @var array
	 */
	protected $_notExt;

	/**
	 * Список свойств расширений компонента
	 * @var array
	 */
	protected $_mixins;

	/**
	 * Список свойств расширений компонента
	 * @var string
	 */
	protected $altCmpClass;

	/**
	 * Название класса ExtJs компонента
	 * @var string
	 */
	public $cmpClass;

	/**
	 * Дополнительные данные, которые необходимо вывести в конфигурационный объект
	 * @var array
	 */
	public $endata;

	/**
	 * Список свойств компонента, отложенного создания.Устанавливается в каждом компоненте свой,
	 * необходим для осуществления создания toolbar, и других компонентов с js функциями, установки им контекста выполнения.
	 * @var array
	 */
	public $suspendProps;

	/**
	 * Название класса родителя
	 * @var string
	 */
	public $extend;

	public function __construct(array $config = [])
	{
		$this->_notExt              = [
			'_notExt',
			'_invisibleProperties',
			'appTpl',
			'classTpl',
			'_mixins',
			'altCmpClass'
		];
		$this->_invisibleProperties = [];
		$this->suspendProps         = [];
		$this->createTemplates();
		if (is_null($this->_mixins))
			$this->_mixins = [];

		// Установка свойств компонента
		foreach ($config as $property => $value)
		{
			if ($this->isPropertyExist($property))
				$this->setWithSetter($property, $value);
			else
			{
				// Если свойства нет у класса, но оно устанавливается через конфиг, то мы сохраняем его
				// массиве не существующих свойств чтобы потом вывести в ExtJs. Требуется при создании dockedItems.
				// Установка таких свойств объектов через методы неизвестных свойств ExtBase.
				$this->_invisibleProperties[$property] = $value;
			}
		}

		$this->initComponent();

		// Установка xtype и cmpClass после применения настроек в initComponent.
		// Требуется, если необходимо взять php класс Ext, но поменять ему xtype или cmpClass
		if (!is_null($this->altCmpClass))
			$this->cmpClass = $this->altCmpClass;
	}

	/**
	 * Виртуальный метод инициализации компонентов. Для того чтоб не определять настройки подклассов в конструкторе.
	 */
	protected function initComponent()
	{
	}

	/**
	 * Метод поиска свойства класса в его свойствах и расширениях
	 * @var $name string
	 * @return boolean
	 */
	private function isPropertyExist($name)
	{
		$result = FALSE;
		if (property_exists($this, $name))
			$result = TRUE;
		else
		{
			foreach ($this->_mixins as $name)
			{
				$props  = $this->$name->getExtProperties();
				$result = in_array($name, $props);
			}
		}

		return $result;
	}

	private function createTemplates()
	{
		$this->appTpl   = 'Ext.application({%s})';
		$this->classTpl = 'Ext.define(%s, {%s})';
	}

	private function isAssocProperty($value)
	{
		$keys = array_keys($value);
		if (count($keys) > 0)
			return !is_integer($keys[0]);
		else
			return FALSE;
	}

	private function simpleToStr($value)
	{
		$result = '';

		if (is_string($value))
			$result = "'$value'";
		else if (is_numeric($value) || is_integer($value))
			$result = $value;
		else if (is_bool($value))
			$result = ($value) ? 'true' : 'false';

		return $result;
	}

	public function setAltCmpClass($value)
	{
		$this->altCmpClass = $value;
	}

	protected function getSimpleValue($name, $value)
	{
		if (is_array($value))
		{
			if ($this->isAssocProperty($value))
			{
				$cfg = [];
				foreach ($value as $k => $v)
					$cfg[] = $this->getSimpleValue($k, $v);
				$result = sprintf('%s:{%s}', $name, join(',', $cfg));
			}
			else
			{
				$_vals = [];
				foreach ($value as $v)
					$_vals[] = $this->simpleToStr($v);
				$result = sprintf('%s:[%s]', $name, join(',', $_vals));
			}
		}
		else
			$result = "$name:{$this->simpleToStr($value)}";

		return $result;
	}

	protected function getObjectValue($name, $value)
	{
		return "$name:$value";
	}

	/**
	 * Метод добавления расширения компоненту
	 * @param string $name
	 * @param ExtMixin $mixin
	 */
	protected function addMixin($name, ExtMixin $mixin)
	{
		if (!is_array($this->_mixins))
			$this->_mixins = [];
		$this->attachBehavior($name, $mixin);
		$this->_mixins[] = $name;
	}

	/**
	 * Виртуальный метод для определения действий до формирования объекта для ExtJS
	 */
	protected function beforeGetExtJs()
	{
	}

	/**
	 * Виртуальный метод для определения действий после формирования объекта для ExtJS
	 */
	protected function afterGetExtJs(&$config)
	{
	}

	/**
	 * Метод получения значения свойства класса. Если свойство protected, то получаем с помощью get-функции.
	 * @param string $name
	 * @return mixed
	 */
	public function getWithGetter($name)
	{
		if ($this->canGetProperty($name))
		{
			$geter = 'get' . ucfirst($name);

			return $this->$geter();
		}
		else
			return $this->$name;
	}

	/**
	 * Метод установки значения свойства класса. Если свойство protected, то получаем с помощью set-функции.
	 * @param string $name
	 * @param mixed $value
	 */
	public function setWithSetter($name, $value)
	{
		if ($this->canSetProperty($name))
		{
			$seter = 'set' . ucfirst($name);
			$this->$seter($value);
		}
		else
			$this->$name = $value;
	}

	/**
	 * Метод получения списка ExtJs свойств класса для формирования конфигурационного объекта.
	 * @return array
	 */
	public function getExtProperties()
	{
		$properties = [];
		foreach ($this as $property => $value)
		{
			if ((property_exists($this, $property) || $this->hasProperty($property))
				&& !in_array($property, $this->_notExt)
			)
			{
				$properties[] = $property;
			}
		}

		// Добавление свойств расширений
		foreach ($this->_mixins as $name)
		{
			$mixinProps = array_diff($this->$name->getExtProperties(), [
				'cmpClass',
				'endata',
				'suspendProps',
				'extend'
			]);
			$properties = array_merge($properties, $mixinProps);
		}

		return $properties;
	}

	/**
	 * Метод установки значение свойству если оно NULL
	 * @var string $value
	 * @var mixed $value
	 */
	public function setNullProperty($prop, $value)
	{
		if (is_null($this->$prop))
			$this->$prop = $value;
	}

	/**
	 * Метод формирования конфигурационного объекта ExtJS компонента.
	 * @return array
	 */
	public function getExtJs()
	{
		$this->beforeGetExtJs();

		$cfg        = [];
		$properties = $this->getExtProperties();

		foreach ($properties as $property)
		{
			$value = $this->getWithGetter($property);
			if (!is_null($value))
			{
				if ($value instanceof ExtBase)
				{
					$cfg[$property] = $value->getExtJs();
				}
				else if (is_array($value) && ArrayHelper::isIndexed($value))
				{
					/* @var $item ExtBase */
					foreach ($value as $item)
						$cfg[$property][] = $item->getExtJs();
				}
				else
					$cfg[$property] = $value;
			}
		}

		// Добавление невидимых свойств объекта
		$result = array_merge($cfg, $this->_invisibleProperties);

		$this->afterGetExtJs($result);

		return $result;
	}

	/**
	 * Метод получения javascript скрипта
	 * @var $withTpl boolean
	 * @return string
	 */
	public function getJavascript($withTpl = TRUE)
	{
		$config     = [];
		$properties = $this->getExtProperties();

		$tpl = ($this instanceof ExtApplication)
			? $this->appTpl
			: $this->classTpl;

		foreach ($properties as $property)
		{
			$value = $this->getWithGetter($property);
			if (!is_null($value))
			{
				if ($value instanceof ExtBase)
				{
					$config[] = $this->getObjectValue($property, $value->getJavascript(FALSE));
				}
				else if (is_array($value) && ArrayHelper::isIndexed($value))
				{
					$_itemstr = [];
					/* @var $item ExtBase  */
					foreach ($value as $item)
						$_itemstr[] = $item->getJavascript(FALSE);
					$config[] = $this->getSimpleValue($property, $_itemstr);
				}
				else
					$config[] = $this->getSimpleValue($property, $value);
			}
		}

		// Установка невидимых свойств объекта
		foreach ($this->_invisibleProperties as $name => $value)
			$config[] = $this->getSimpleValue($name, $value);

		$result = ($withTpl)
			? sprintf($tpl, join(',', $config))
			: sprintf('{%s}', join(',', $config));

		return $result;
	}

	public function getProperty($name)
	{
		return (array_key_exists($name, $this->_invisibleProperties))
			? $this->_invisibleProperties[$name]
			: NULL;
	}

	public function setProperty($name, $value)
	{
		$this->_invisibleProperties[$name] = $value;
	}

}
