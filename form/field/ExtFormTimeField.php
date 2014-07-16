<?php
/**
 * Description of ExtFormTimeField
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.form.field.Time
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 27.06.2013
 */

namespace dionici\extjs4\form\field;

class ExtFormTimeField extends ExtFormComboBoxField
{
	/**
	 * @var string
	 */
	public $altFormats;

	/**
	 * @var string
	 */
	public $displayField;

	/**
	 * @var string
	 */
	public $format;

	/**
	 * @var integer
	 */
	public $increment;

	/**
	 * @var string
	 */
	public $invalidText;

	/**
	 * @var string
	 */
	public $maxText;

	/**
	 * @var string
	 */
	public $maxValue;

	/**
	 * @var boolean
	 */
	public $minText;

	/**
	 * @var string
	 */
	public $minValue;

	/**
	 * @var integer
	 */
	public $pickerMaxHeight;

	/**
	 * @var boolean
	 */
	public $snapToIncrement;

	/**
	 * @var string
	 */
	public $submitFormat;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.form.field.Time';
		$this->xtype    = 'timefield';
	}
}
