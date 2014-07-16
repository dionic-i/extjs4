<?php
/**
 * Description of ExtFormPickerField
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.form.field.Picker
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 27.06.2013
 */

namespace dionici\extjs4\form\field;

class ExtFormPickerField extends ExtFormTriggerField
{
	/**
	 * @var boolean
	 */
	public $matchFieldWidth;

	/**
	 * @var boolean
	 */
	public $openCls;

	/**
	 * @var string
	 */
	public $pickerAlign;

	/**
	 * @var string
	 */
	public $pickerOffset;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.form.field.Picker';
		$this->xtype    = 'pickerfield';
	}
}
