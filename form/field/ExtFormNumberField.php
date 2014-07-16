<?php
/**
 * Description of ExtFromNumberField
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.form.field.Number
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 27.06.2013
 */

namespace dionici\extjs4\form\field;

class ExtFormNumberField extends ExtFormSpinnerField
{
	/**
	 * @var boolean
	 */
	public $allowDecimals;

	/**
	 * @var boolean
	 */
	public $allowExponential;

	/**
	 * @var boolean
	 */
	public $autoStripChars;

	/**
	 * @var string
	 */
	public $baseChars;

	/**
	 * @var integer
	 */
	public $decimalPrecision;

	/**
	 * @var string
	 */
	public $decimalSeparator;

	/**
	 * @var string
	 */
	public $maxText;

	/**
	 * @var integer
	 */
	public $maxValue;

	/**
	 * @var string
	 */
	public $minText;

	/**
	 * @var integer
	 */
	public $minValue;

	/**
	 * @var string
	 */
	public $nanText;

	/**
	 * @var string
	 */
	public $negativeText;

	/**
	 * @var integer
	 */
	public $step;

	/**
	 * @var boolean
	 */
	public $submitLocaleSeparator;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.form.field.Number';
		$this->xtype    = 'numberfield';
	}
}
