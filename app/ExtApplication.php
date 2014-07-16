<?php
/**
 * Description of ExtApplication
 * Базовый класс приложения, определеяет основные настройки и рендерится скриптом на главной странице приложения.
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.app.Application
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 15.06.2013
 */

namespace dionici\extjs4\app;

class ExtApplication extends \dionici\extjs4\ExtBase
{
	/**
	 * @var string
	 */
	public $appFolder;

	/**
	 * @var string
	 */
	public $appProperty;

	/**
	 * @var boolean
	 */
	public $autoCreateViewport;

	/**
	 * @var boolean
	 */
	public $enableQuickTips;

	/**
	 * @var string
	 */
	public $name;

	/**
	 * @var array
	 */
	public $namespaces;

	/**
	 * @var array
	 */
	public $paths;

	/**
	 * @var string
	 */
	protected $launch;

	public function getJavascript()
	{
		return parent::getJavascript();
	}

	public function getLaunch()
	{
		return $this->launch;
	}

	public function setLaunch(\dionici\extjs4\ExtFunction $value)
	{
		$this->launch = $value;
	}
}

