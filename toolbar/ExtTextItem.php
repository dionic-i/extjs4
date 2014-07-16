<?php
/**
 * Description of ExtTextItem
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.toolbar.TextItem
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\toolbar;

class ExtTextItem extends ExtToolbarItem
{
	/**
	 * @var string
	 */
	public $text;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.toolbar.TextItem';
		$this->xtype    = 'tbtext';
	}
}
