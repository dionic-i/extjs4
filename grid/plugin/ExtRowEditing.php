<?php
/**
 * Description of ExtRowEditing
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.grid.plugin.RowEditing
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\grid\plugin;

class ExtRowEditing extends ExtEditing
{
	/**
	 * @var boolean
	 */
	public $autoCancel;

	/**
	 * @var integer
	 */
	public $clicksToMoveEditor;

	/**
	 * @var boolean
	 */
	public $errorSummary;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.grid.plugin.RowEditing';
		$this->ptype    = 'rowediting';
	}

}

