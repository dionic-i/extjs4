<?php
/**
 * Description of ExtFormBaseField
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.form.field.Base
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 27.06.2013
 */

namespace dionici\extjs4\form\field;

use dionici\extjs4\ExtComponent;
use dionici\extjs4\form\ExtLabelable;

class ExtFormBaseField extends ExtComponent
{
	/**
	 * @var integer
	 */
	public $checkChangeBuffer;

	/**
	 * @var array
	 */
	public $checkChangeEvents;

	/**
	 * @var string
	 */
	public $dirtyCls;

	/**
	 * @var string
	 */
	public $fieldCls;

	/**
	 * @var string
	 */
	public $focusCls;

	/**
	 * @var string/array
	 */
	public $inputAttrTpl;

	/**
	 * @var string
	 */
	public $inputId;

	/**
	 * @var string
	 */
	public $inputType;

	/**
	 * @var string
	 */
	public $invalidText;

	/**
	 * @var boolean
	 */
	public $readOnly;

	/**
	 * @var boolean
	 */
	public $readOnlyCls;

	/**
	 * @var integer
	 */
	public $tabIndex;

	/**
	 * @var boolean
	 */
	public $validateOnBlur;

	public function __construct($config = array())
	{
		$this->addMixin('field-mixin', new ExtFormField());
		$this->addMixin('labelable-mixin', new ExtLabelable());
		parent::__construct($config);
	}

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.form.field.Base';
		$this->xtype    = 'field';
	}
}
