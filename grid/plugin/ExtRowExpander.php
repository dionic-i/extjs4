<?php
/**
 * Description of ExtRowExpander
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.grid.plugin.ExtRowExpander
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\grid\plugin;

use dionici\extjs4\ExtAbstractPlugin;

class ExtRowExpander extends ExtAbstractPlugin
{
	/**
	 * @var boolean
	 */
	public $expandOnDblClick;

	/**
	 * @var boolean
	 */
	public $expandOnEnter;

	/**
	 * @var boolean
	 */
	public $selectRowOnExpand;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.grid.plugin.RowExpander';
		$this->ptype    = 'rowexpander';
	}

}
