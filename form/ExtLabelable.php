<?php
/**
 * Description of ExtLabelable
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.form.Labelable
 *
 * Класс расширение для меток меток полей.
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 28.06.2013
 */

namespace dionici\extjs4\form;

use dionici\extjs4\ExtMixin;

class ExtLabelable extends ExtMixin
{
	/**
	 * @var boolean
	 */
	public $activeError;

	/**
	 * @var string/array
	 */
	public $activeErrorTpl;

	/**
	 * @var string/array
	 */
	public $afterBodyEl;

	/**
	 * @var string/array
	 */
	public $afterLabelTextTpl;

	/**
	 * @var string/array
	 */
	public $afterLabelTpl;

	/**
	 * @var string/array
	 */
	public $afterSubTpl;

	/**
	 * @var boolean
	 */
	public $autoFitErrors;

	/**
	 * @var string
	 */
	public $baseBodyCls;

	/**
	 * @var string/array
	 */
	public $beforeBodyEl;

	/**
	 * @var string/array
	 */
	public $beforeLabelTextTpl;

	/**
	 * @var string/array
	 */
	public $beforeLabelTpl;

	/**
	 * @var string/array
	 */
	public $beforeSubTpl;

	/**
	 * @var string
	 */
	public $clearCls;

	/**
	 * @var string
	 */
	public $errorMsgCls;

	/**
	 * @var string
	 */
	public $fieldBodyCls;

	/**
	 * @var string
	 */
	public $fieldLabel;

	/**
	 * @var string
	 */
	public $formItemCls;

	/**
	 * @var boolean
	 */
	public $hideEmptyLabel;

	/**
	 * @var boolean
	 */
	public $hideLabel;

	/**
	 * @var string
	 */
	public $invalidCls;

	/**
	 * @var string
	 */
	public $labelAlign;

	/**
	 * @var string/array
	 */
	public $labelAttrTpl;

	/**
	 * @var string
	 */
	public $labelCls;

	/**
	 * @var string
	 */
	public $labelClsExtra;

	/**
	 * @var integer
	 */
	public $labelPad;

	/**
	 * @var string
	 */
	public $labelSeparator;

	/**
	 * @var string
	 */
	public $labelStyle;

	/**
	 * @var string
	 */
	public $labelWidth;

	/**
	 * @var string
	 */
	public $msgTarget;

	/**
	 * @var boolean
	 */
	public $preventMask;

	public function init()
	{
		parent::init();
		$this->cmpClass = 'Ext.form.Labelable';
	}
}
