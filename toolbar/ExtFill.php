<?php
/**
 * Description of ExtFill
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.toolbar.Fill
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 19.06.2013
 */

namespace dionici\extjs4\toolbar;

class ExtFill extends ExtToolbarItem
{
	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.toolbar.Fill';
		$this->xtype    = 'tbfill';
	}
}
