<?php
/**
 * Description of ExtFormTextField
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.form.field.Text
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 27.06.2013
 */

namespace dionici\extjs4\form\field;

class ExtFormTextField extends ExtFormBaseField
{
	/**
	 * @var boolean
	 */
	public $allowBlank;

	/**
	 * @var boolean
	 */
	public $allowOnlyWhitespace;

	/**
	 * @var boolean
	 */
	public $blankText;

	/**
	 * @var boolean
	 */
	public $disableKeyFilter;

	/**
	 * @var string
	 */
	public $emptyCls;

	/**
	 * @var string
	 */
	public $emptyText;

	/**
	 * @var boolean
	 */
	public $enableKeyEvents;

	/**
	 * @var boolean
	 */
	public $enforceMaxLength;

	/**
	 * @var boolean
	 */
	public $grow;

	/**
	 * @var string
	 */
	public $growAppend;

	/**
	 * @var integer
	 */
	public $growMax;

	/**
	 * @var integer
	 */
	public $growMin;

	/**
	 * @var integer
	 */
	public $maxLength;

	/**
	 * @var integer
	 */
	public $maxLengthText;

	/**
	 * @var integer
	 */
	public $minLength;

	/**
	 * @var integer
	 */
	public $minLengthText;

	/**
	 * @var string
	 */
	public $requiredCls;

	/**
	 * @var integer
	 */
	public $size;

	/**
	 * @var boolean
	 */
	public $validateBlank;

	/**
	 * @var string
	 */
	public $vtype;

	/**
	 * @var string
	 */
	public $vtypeText;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.form.field.Text';
		$this->xtype    = 'textfield';
	}
}
