<?php
/**
 * Description of ExtFormTextArea
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 27.06.2013
 */

namespace dionici\extjs4\form\field;

class ExtFormTextArea extends ExtFormTextField
{
	/**
	 * @var integer
	 */
	public $cols;

	/**
	 * @var boolean
	 */
	public $enterIsSpecial;

	/**
	 * @var boolean
	 */
	public $preventScrollbars;

	/**
	 * @var integer
	 */
	public $rows;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.form.field.TextArea';
		$this->xtype    = 'textarea';
	}
}
