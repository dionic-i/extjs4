<?php
/**
 * Description of ExtPropertyStore
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.grid.property.Store
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\property;

use dionici\extjs4\data\ExtStore;

class ExtPropertyStore extends ExtStore
{
	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.grid.property.Store';
	}
}
