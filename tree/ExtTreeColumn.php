<?php
/**
 * Description of ExtTreeColumn.
 *
 * @author: Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since: 16.07.13
 */

namespace dionici\extjs4\tree;

use dionici\extjs4\grid\column\ExtColumn;

class ExtTreeColumn extends ExtColumn
{
	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.tree.Columns';
		$this->xtype    = 'treecolumn';
	}
}
