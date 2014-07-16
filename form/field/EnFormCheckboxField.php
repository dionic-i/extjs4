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

class EnFormCheckboxField extends ExtFormCheckboxField
{
	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Common.form.fields.TenCheckboxField';
		$this->xtype    = 'encheckboxfield';
	}
}
