<?php
/**
 * Description of ExtFormDateField
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.form.field.Date
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 27.06.2013
 */

namespace dionici\extjs4\form\field;

class ExtFormDateField extends ExtFormPickerField
{
	/**
	 * @var string
	 */
	public $altFormats;

	/**
	 * @var array
	 */
	public $disabledDates;

	/**
	 * @var string
	 */
	public $disabledDatesText;

	/**
	 * @var array
	 */
	public $disabledDays;

	/**
	 * @var string
	 */
	public $disabledDaysText;

	/**
	 * @var string
	 */
	public $format;

	/**
	 * @var string
	 */
	public $invalidText;

	/**
	 * @var boolean
	 */
	public $matchFieldWidth;

	/**
	 * @var string
	 */
	public $maxText;

	/**
	 * @var string
	 */
	public $maxValue;

	/**
	 * @var string
	 */
	public $minText;

	/**
	 * @var string
	 */
	public $minValue;

	/**
	 * @var boolean
	 */
	public $showToday;

	/**
	 * @var integer
	 */
	public $startDay;

	/**
	 * @var string
	 */
	public $submitFormat;

	/**
	 * @var string
	 */
	public $useStrict;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.form.field.Date';
		$this->xtype    = 'datefield';
	}
}
