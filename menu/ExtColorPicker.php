<?php
/**
 * Description of ExtColorPicker
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.menu.ColorPicker
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\menu;

class ExtColorPicker extends ExtMenu
{
	/**
	 * @var string
	 */
	public $pickerId = 'id';

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.menu.ColorPicker';
		$this->xtype    = 'colormenu';
	}

}
