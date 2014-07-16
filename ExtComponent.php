<?php
/**
 * Description of ExtComponent
 * Класс компонентов ExtJs.
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.Component
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 15.06.2013
 */

namespace dionici\extjs4;

use dionici\extjs4\util\ExtFloating;

class ExtComponent extends ExtAbstractComponent
{
	/**
	 * @var boolean
	 */
	public $autoScroll;

	/**
	 * @var string/integer
	 */
	public $columnWidth;

	/**
	 * @var boolean
	 */
	public $resizable;

	/**
	 * @var string
	 */
	public $region;

	/**
	 * @var string
	 */
	public $toFrontOnShow;

	public function __construct($config = array())
	{
		$this->addMixin('floating-mixin', new ExtFloating());
		parent::__construct($config);
	}

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.component';
		$this->xtype    = 'component';
	}
}
