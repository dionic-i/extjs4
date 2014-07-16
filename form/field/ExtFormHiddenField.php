<?php
/**
 * Description of ExtFormHiddenField
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.form.field.Hidden
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 27.06.2013
 */

namespace dionici\extjs4\form\field;

class ExtFormHiddenField extends ExtFormBaseField
{
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
		$this->cmpClass = 'Ext.form.field.Hidden';
		$this->xtype    = 'hiddenfield';
	}
}
