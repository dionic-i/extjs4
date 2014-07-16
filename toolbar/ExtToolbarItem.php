<?php
/**
 * Description of ExtToolbarItem
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.toolbar.Item
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\toolbar;

use dionici\extjs4\ExtComponent;

class ExtToolbarItem extends ExtComponent
{
	/**
	 * @var string
	 */
	public $overflowText;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.toolbar.Item';
		$this->xtype    = 'tbitem';
	}

}
