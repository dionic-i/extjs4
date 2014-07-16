<?php
/**
 * Description of ExtNumberColumn
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.grid.column.Number
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 19.06.2013
 */

namespace dionici\extjs4\grid\column;

class ExtNumberColumn extends ExtColumn
{
	/**
	 * @var string
	 */
	public $format;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.grid.columns.Number';
		$this->xtype    = 'numbercolumn';
	}
}
