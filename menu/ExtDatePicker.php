<?php
/**
 * Description of ExtDatePicker
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.menu.DatePicker
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\menu;

class ExtDatePicker extends ExtMenu
{
	/**
	 * @var string
	 */
	public $pickerId;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.menu.DatePicker';
		$this->xtype    = 'datemenu';
	}

}
