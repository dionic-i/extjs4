<?php
/**
 * Description of ExtMenu
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.menu.Menu
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\menu;

use dionici\extjs4\panel\ExtPanel;

class ExtMenu extends ExtPanel
{
	/**
	 * @var boolean
	 */
	public $allowOtherMenus;

	/**
	 * @var boolean
	 */
	public $enableKeyNav = TRUE;

	/**
	 * @var boolean
	 */
	public $ignoreParentClicks;

	/**
	 * @var boolean
	 */
	public $plain;

	/**
	 * @var boolean
	 */
	public $showSeparator;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.menu.Menu';
		$this->xtype    = 'menu';
	}

}
