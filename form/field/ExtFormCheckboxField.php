<?php
/**
 * Description of ExtFormBaseField
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.form.field.Checkbox
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 27.06.2013
 */

namespace dionici\extjs4\form\field;

class ExtFormCheckboxField extends ExtFormBaseField
{
	/**
	 * @var string/array
	 */
	public $afterBoxLabelTextTpl;

	/**
	 * @var string/array
	 */
	public $afterBoxLabelTpl;

	/**
	 * @var string
	 */
	public $beforeBoxLabelTextTpl;

	/**
	 * @var string
	 */
	public $beforeBoxLabelTpl;

	/**
	 * @var string
	 */
	public $boxLabel;

	/**
	 * @var string
	 */
	public $boxLabelAlign;

	/**
	 * @var string/array
	 */
	public $boxLabelAttrTpl;

	/**
	 * @var string
	 */
	public $boxLabelCls;

	/**
	 * @var string
	 */
	public $checked;

	/**
	 * @var string
	 */
	public $checkedCls;

	/**
	 * @var string
	 */
	public $inputValue;

	/**
	 * @var string
	 */
	public $uncheckedValue;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.form.field.Checkbox';
		$this->xtype    = 'checkboxfield';
	}
}
