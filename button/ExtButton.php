<?php
/**
 * Description of ExtButton
 * Класс стандартной кнопки ExtJs.
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.button.Button
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 15.06.2013
 */

namespace dionici\extjs4\button;

use dionici\extjs4\ExtComponent;
use dionici\extjs4\menu\ExtMenu;

class ExtButton extends ExtComponent
{
	/**
	 * @var boolean
	 */
	public $allowDepress;

	/**
	 * @var string
	 */
	public $arrowAlign;

	/**
	 * @var string
	 */
	public $arrowCls;

	/**
	 * @var array
	 */
	public $baseParams;

	/**
	 * @var boolean
	 */
	public $enableToggle;

	/**
	 * @var string
	 */
	public $focusCls;

	/**
	 * @var string
	 */
	public $glyph;

	/**
	 * @todo Продумать методы добавления функций в javascript без eval
	 * @var string/object
	 */
	protected $handler;

	/**
	 * @var string
	 */
	public $href;

	/**
	 * @var string
	 */
	public $hrefTarget;

	/**
	 * @var string
	 */
	public $icon;

	/**
	 * @var string
	 */
	public $iconAlign;

	/**
	 * @var string
	 */
	public $iconCls;

	/**
	 * @var ExtMenu
	 */
	protected $menu;

	/**
	 * @var string
	 */
	public $menuActiveCls;

	/**
	 * @var string
	 */
	public $overflowText;

	/**
	 * @var array
	 */
	public $params;

	/**
	 * @var boolean
	 */
	public $pressed;

	/**
	 * @var string
	 */
	public $pressedCls;

	/**
	 * @var string
	 */
	public $scale;

	/**
	 * @var string
	 */
	public $scope;

	/**
	 * @var boolean
	 */
	public $showEmptyMenu;

	/**
	 * @var string
	 */
	public $text;

	/**
	 * @var string
	 */
	public $textAlign;

	/**
	 * @var string
	 */
	protected $toggleHandler;

	/**
	 * @var string
	 */
	public $toggleGroup;

	/**
	 * @var string
	 */
	public $tooltip;

	/**
	 * @var string
	 */
	public $tooltipTip;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.button.Button';
		$this->xtype    = 'button';
	}

	public function getMenu()
	{
		return $this->menu;
	}

	public function setMenu($menu)
	{
		if ($menu instanceof ExtMenu)
			$this->menu = $menu;
		else if (is_array($menu))
			$this->menu = new ExtMenu($menu);
		else
			trigger_error('Error to set menu property of ExtButton', E_USER_ERROR);
	}

	public function setHandler($value)
	{
		$this->handler = $value;
	}

	public function getHandler()
	{
		return $this->handler;
	}

	public function setToggleHandler($value)
	{
		$this->toggleHandler = $value;
	}

	public function getToggleHandler()
	{
		return $this->toggleHandler;
	}

}
