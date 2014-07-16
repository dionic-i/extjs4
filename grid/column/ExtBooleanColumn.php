<?php
/**
 * Description of ExtBooleanText
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.grid.column.Boolean
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 19.06.213
 */

namespace dionici\extjs4\grid\column;

class ExtBooleanColumn extends ExtColumn
{
	/**
	 * @var string
	 */
	public $trueText;

	/**
	 * @var string
	 */
	public $falseText;

	/**
	 * @var string
	 */
	public $undefinedText;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.grid.columns.Boolean';
		$this->xtype    = 'booleancolumn';
	}

}
