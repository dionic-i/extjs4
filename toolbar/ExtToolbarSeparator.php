<?php
/**
 * Description of ExtToolbarSeparator
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.toolbar.Separator
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\toolbar;

class ExtToolbarSeparator extends ExtToolbarItem
{
	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.toolbar.Separator';
		$this->xtype    = 'tbseparator';
	}
}
