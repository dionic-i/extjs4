<?php
/**
 * Description of ExtFormSpinnerField
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.form.field.Spinner
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 27.06.2013
 */

namespace dionici\extjs4\form\field;

class ExtFormSpinnerField extends ExtFormTriggerField
{
	/**
	 * @var boolean
	 */
	public $keyNavEnabled;

	/**
	 * @var boolean
	 */
	public $mouseWheelEnabled;

	/**
	 * @var boolean
	 */
	public $repeatTriggerClick;

	/**
	 * @var boolean
	 */
	public $spinDownEnabled;

	/**
	 * @var boolean
	 */
	public $spinUpEnabled;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.form.field.Spinner';
		$this->xtype    = 'spinnerfield';
	}
}
