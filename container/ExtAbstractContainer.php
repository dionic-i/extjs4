<?php
/**
 * Description of ExtAbstractContainer
 * Абстрактный класс контайнер компонентов ExtJs.
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.container.AbstractContainer-cfg-defaultType
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 16.06.2013
 */

namespace dionici\extjs4\container;

use dionici\extjs4\Ext;
use dionici\extjs4\ExtBase;
use dionici\extjs4\ExtComponent;
use dionici\extjs4\helpers\ExtListHelper;

class ExtAbstractContainer extends ExtComponent
{
	/**
	 * @var string/integer
	 */
	public $activeItem;

	/**
	 * @var boolean
	 */
	public $autoDestroy;

	/**
	 * @var array
	 */
	public $bubbleEvents;

	/**
	 * @var string
	 */
	public $defaultType;

	/**
	 * @var array
	 */
	public $defaults;

	/**
	 * @var array
	 */
	protected $items;

	/**
	 * @var string/array
	 */
	public $layout;

	/**
	 * @var boolean
	 */
	public $suspendLayout;

	/**
	 * Применять default значения свойств дочерних компонентов при их добавлении.
	 * @var boolean
	 */
	public $useDefaults;

	public function initComponent()
	{
		parent::initComponent();
		$this->_notExt[] = 'useDefaults';
		if (is_null($this->items))
			$this->items = [];
	}

	private function applyDefaults(&$item)
	{
		if ($this->useDefaults)
		{
			if (!is_null($this->defaults))
			{
				foreach ($this->defaults as $name => $value)
				{
					if ($item instanceof ExtBase)
					{
						if (is_null($item->$name))
							$item->$name = $value;
					}
					else
					{
						if (array_key_exists($name, $item) === FALSE)
							$item[$name] = $value;
					}
				}
			}
		}

		if ($this->defaultType && !array_key_exists('xtype', $item))
			$item['xtype'] = $this->defaultType;
	}

	/**
	 * Метод вставки компонента ExtJs в контейнер на позицию $index.
	 * @param mixed $item Вставляемый компонент или его конфигурация.
	 * @param  $index Позиция вставки
	 */
	public function insertAt($item, $index = 0)
	{
		if ($item instanceof ExtComponent)
		{
			$this->applyDefaults($item);
			ExtListHelper::insertAt($this->items, $item, $index);
			return $item;
		}
		else if (is_array($item))
		{
			$this->applyDefaults($item);

			if (!array_key_exists('xtype', $item))
				trigger_error("Error to insert new Component to container: $index unknown xtype.", E_USER_ERROR);

			$_item = Ext::createCmp($item['xtype'], $item);
			ExtListHelper::insertAt($this->items, $_item, $index);
			return $_item;
		}
		else
			trigger_error("Error to insert new Component to container: $index unknown item.", E_USER_ERROR);
	}

	/**
	 * Метод добавления компонента
	 * @param mixed $config
	 * @param integer $index
	 * @return mixed
	 */
	public function add($item)
	{
		$index = count($this->items);
		return $this->insertAt($item, $index);
	}

	/**
	 * Метод получения компонента по идентификатору itemId.
	 * @param mixed $index
	 * @return ExtComponent
	 */
	public function getAt($itemId)
	{
		$_idx = $this->indexOf($itemId);
		if ($_idx >= count($this->items) || $_idx < 0)
			trigger_error('Error index in ExtAbstractContainer.getAt()', E_USER_ERROR);
		return $this->items[$_idx];
	}

	/**
	 * Метод получения компонента по идентификатору индексу
	 * @param mixed $index
	 * @return ExtComponent
	 */
	public function getByIndex($index)
	{
		if ($index >= count($this->items) || $index < 0)
			trigger_error('Error index in ExtAbstractContainer.getByIndex()', E_USER_ERROR);
		return $this->items[$index];
	}

	/**
	 * Метод получения компонента по идентификатору itemId среди всех дочерних компонентов.
	 * @param string $itemId Внутренний идентификатор компонента
	 * @return ExtComponent
	 */
	public function getAtAll($itemId)
	{
		$result = FALSE;
		foreach ($this->items as $cmp)
		{
			if ($cmp instanceof ExtAbstractContainer)
			{
				$result = $cmp->getAtAll($itemId);
				if ($result)
					break;
			};
		};
		return $result;
	}

	/**
	 * Метод полученя индекса дочернего компонента по свойству itemId
	 * @param string $itemId
	 * @return integer Индекс дочернего компонента
	 */
	public function indexOf($itemId)
	{
		foreach ($this->items as $item)
		{
			if (property_exists($item, 'itemId') && $itemId === $item->itemId)
				return ExtListHelper::indexOf($this->items, $item);
		}
		return -1;
	}

	public function removeAt($index)
	{
		ExtListHelper::removeAt($this->items, $index);
	}

	public function removeByItemId($itemId)
	{
		$index = $this->indexOf($itemId);
		if ($index !== -1)
			ExtListHelper::removeAt($this->items, $index);
	}

	public function clear()
	{
		$this->items = [];
	}

	public function getItems()
	{
		return $this->items;
	}

	public function setItems($value)
	{
		$this->items = [];

		if (is_array($value))
		{
			foreach ($value as $item)
				$this->add($item);
		}
	}

	public function setDefaults($value)
	{
		$this->defaults    = $value;
		$this->useDefaults = TRUE;
	}

	public function getDefaults()
	{
		return $this->defaults;
	}
}
