<?php
/**
 * Description of ExtFormTriggerField
 *
 * @see
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 27.06.2013
 */

namespace dionici\extjs4\form\field;

class ExtFormTriggerField extends ExtFormTextField
{
	/**
	 * @var boolean
	 */
	public $editable;

	/**
	 * @var boolean
	 */
	public $hideTrigger;

	/**
	 * @var boolean
	 */
	public $repeatTriggerClick;

	/**
	 * @var string
	 */
	public $triggerBaseCls;

	/**
	 * @var string
	 */
	public $triggerNoEditCls;

	/**
	 * @var string
	 */
	public $triggerWrapCls;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.form.field.Trigger';
		$this->xtype    = 'triggerfield';
	}
}
