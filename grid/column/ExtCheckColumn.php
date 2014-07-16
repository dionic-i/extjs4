<?php
/**
 * Description of ExtCheckColumn
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.grid.column.CheckColumn
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\grid\column;

class ExtCheckColumn extends ExtColumn
{
	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.grid.columns.CheckColumn';
		$this->xtype    = 'checkcolumn';
	}
}
