<?php
/**
 * Description of ExtMenuItem
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.menu.Item
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 14.07.2014
 */

namespace dionici\extjs4\menu;

use dionici\extjs4\Ext;
use dionici\extjs4\ExtComponent;

class ExtMenuItem extends ExtComponent
{
	/**
	 * @var string
	 */
	public $activeCls;

	/**
	 * @var boolean
	 */
	public $canActivate;

	/**
	 * @var integer
	 */
	public $clickHideDelay;

	/**
	 * @var boolean
	 */
	public $destroyMenu;

	/**
	 * @var string
	 */
	public $disabledCls;

	/**
	 * @var string
	 */
	public $handler;

	/**
	 * @var boolean
	 */
	public $hideOnClick;

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
	public $iconCls;

	/**
	 * @var ExtMenu
	 */
	protected $menu;

	/**
	 * @var string
	 */
	public $menuAlign;

	/**
	 * @var integer
	 */
	public $menuExpandDelay;

	/**
	 * @var integer
	 */
	public $menuHideDelay;

	/**
	 * @var boolean
	 */
	public $plain;

	/**
	 * @var string
	 */
	public $text;

	/**
	 * @var string
	 */
	public $tooltip;

	/**
	 * @var string
	 */
	public $tooltipType;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.menu.Item';
		$this->xtype    = 'menuitem';
	}

	public function setMenu($value)
	{
		if ($value instanceof ExtMenu)
			$this->menu = $value;
		else
			$this->menu = Ext::createCmp('menu', $value);
		return $this->menu;
	}

	public function getMenu()
	{
		return $this->menu;
	}

}
