<?php
/**
 * Description of ExtFunction
 * Класс для создания функций в ExtJs.
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 20.06.2013
 */

namespace dionici\extjs4;

class ExtFunction extends ExtBase
{
	/**
	 * @var string
	 */
	public $name;

	/**
	 * @var string
	 */
	public $scope;

	/**
	 * @var string
	 */
	public $script;

	/**
	 * @var array
	 */
	public $arguments;

	public function __construct($config = [])
	{
		parent::__construct($config);
		if (is_null($this->arguments))
			$this->arguments = [];
	}

	public function getJavascript()
	{
		$args = (count($this->arguments) > 0) ? join(',', $this->arguments) : '';
		return sprintf("function(%s){%s}", $args, $this->script);
	}

	public function getExtJs()
	{
		return '';
	}

}
