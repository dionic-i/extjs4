<?php
/**
 * Description of ExtSeparator
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.menu.Separator
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\menu;

class ExtSeparator extends ExtMenuItem
{
	/**
	 * @var string
	 */
	public $separatorCls;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.menu.Separator';
		$this->xtype    = 'menuseparator';
	}

}
