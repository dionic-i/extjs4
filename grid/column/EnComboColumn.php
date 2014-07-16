<?php
/**
 * Description of ExtCheckColumn
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.grid.column.CheckColumn
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 19.06.2013
 */

namespace dionici\extjs4\grid\column;

class EnComboColumn extends ExtColumn
{
	/**
	 * Настройки поля ля редактирования и отображения.
	 * @var array
	 */
	public $field;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Common.grid.columns.TenComboboxColumn';
		$this->xtype    = 'encombocolumn';
	}
}
