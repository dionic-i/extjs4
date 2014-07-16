<?php
/**
 * Description of ExtWindow
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.window.Window
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 20.06.2013
 */

namespace dionici\extjs4\window;

use dionici\extjs4\panel\ExtPanel;

class ExtWindow extends ExtPanel
{
	/**
	 * @var string
	 */
	public $animateTarget;

	/**
	 * @var boolean
	 */
	public $autoRender;

	/**
	 * @var boolean
	 */
	public $expandOnShow;

	/**
	 * @var boolean
	 */
	public $ghost;

	/**
	 * @var boolean
	 */
	public $hideShadowOnDeactivate;

	/**
	 * @var boolean
	 */
	public $maximizable;

	/**
	 * @var boolean
	 */
	public $maximized;

	/**
	 * @var boolean
	 */
	public $minimizable;

	/**
	 * @var boolean
	 */
	public $modal;

	/**
	 * @var boolean
	 */
	public $plain;

	/**
	 * @var integer
	 */
	public $x;

	/**
	 * @var integer
	 */
	public $y;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.window.Window';
		$this->xtype    = 'window';
	}

}
