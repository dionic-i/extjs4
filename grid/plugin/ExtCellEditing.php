<?php
/**
 * Description of ExtCellEditing
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.grid.plugin.CellEditing
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\grid\plugin;

class ExtCellEditing extends ExtEditing
{
	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.grid.plugin.CellEditing';
		$this->ptype    = 'cellediting';
	}
}

