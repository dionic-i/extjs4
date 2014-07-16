<?php
/**
 * Description of ExtFormField
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.form.field.Field
 *
 * Расширение для компонентов полей ExtJs.
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 28.06.2013
 */

namespace dionici\extjs4\form\field;

use dionici\extjs4\ExtMixin;

class ExtFormField extends ExtMixin
{
	/**
	 * @var boolean
	 */
	public $disabled;

	/**
	 * @var string
	 */
	public $name;

	/**
	 * @var boolean
	 */
	public $submitValue;

	/**
	 * @var boolean
	 */
	public $validateOnChange;

	/**
	 * @var mixed
	 */
	public $value;

	public function init()
	{
		parent::init();
		$this->cmpClass = 'Ext.form.field.Field';
	}
}
