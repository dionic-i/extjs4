<?php
/**
 * Description of ExtPropertyGrid
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.grid.property.Grid
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\grid\property;

use dionici\extjs4\grid\ExtGrid;

class ExtPropertyGrid extends ExtGrid
{
	/**
	 * @var boolean
	 */
	public $inferTypes;

	/**
	 * @var integer
	 */
	public $nameColumnWidth;

	/**
	 * @var string
	 */
	public $nameField;

	/**
	 * @var array
	 */
	public $source;

	/**
	 * @var array
	 */
	public $sourceConfig;

	/**
	 * @var string
	 */
	public $valueField;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.grid.property.Grid';
		$this->xtype    = 'propertygrid';
	}

}
