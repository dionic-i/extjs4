<?php
/**
 * Description of ExtFloating
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.util.Floating
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 28.06.2013
 */

namespace dionici\extjs4\util;

use dionici\extjs4\ExtMixin;

class ExtFloating extends ExtMixin
{
	/**
	 * @var boolean
	 */
	public $constrain;

	/**
	 * @var boolean
	 */
	public $fixed;

	/**
	 * @var boolean
	 */
	public $focusOnToFront;

	/**
	 * @var boolean/string
	 */
	public $shadow;

	/**
	 * @var integer
	 */
	public $shadowOffset;

	public function init()
	{
		parent::init();
		$this->cmpClass = 'Ext.util.Floating';
	}
}
