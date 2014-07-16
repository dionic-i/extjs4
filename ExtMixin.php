<?php
/**
 * Description of ExtMixin
 * Базовый класс расширений компонентов ExtJs.
 * Все расширения должны создаваться в конструкторе компонентов до вызова конструктра родителя.
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 28.06.2013
 */

namespace dionici\extjs4;

use yii\base\Behavior;

class ExtMixin extends Behavior
{
	/**
	 * @var array
	 */
	private $notExt;

	/**
	 * @var boolean
	 */
	protected $isMixin;

	public function init()
	{
		parent::init();
		$this->notExt  = ['isMixin'];
		$this->isMixin = TRUE;
	}

	/**
	 * Метод получения списка ExtJs свойств класса для формирования конфигурационного объекта.
	 * @return array
	 */
	public function getExtProperties()
	{
		$properties = [];
		foreach ($this as $property => $value)
			if ($this->hasProperty($property) && !in_array($property, $this->notExt))
				$properties[] = $property;

		return $properties;
	}

}
