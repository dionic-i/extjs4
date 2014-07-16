<?php
/**
 * Description of ExtEditing
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.grid.plugin.Editing
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\grid\plugin;

use dionici\extjs4\ExtAbstractPlugin;

class ExtEditing extends ExtAbstractPlugin
{
	/**
	 * @var integer
	 */
	public $clicksToEdit;

	/**
	 * @var string
	 */
	public $triggerEvent;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.grid.plugin.Editing';
		$this->ptype    = 'editing';
	}

}
