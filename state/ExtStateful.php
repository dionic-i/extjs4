<?php
/**
 * Description of ExtStateful
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.state.Stateful
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 28.06.2013
 */

namespace dionici\extjs4\state;

use dionici\extjs4\ExtMixin;

class ExtStateful extends ExtMixin
{
	/**
	 * @var integer
	 */
	public $saveDelay;

	/**
	 * @var array
	 */
	public $stateEvents;

	/**
	 * @var string
	 */
	public $stateId;

	/**
	 * @var boolean
	 */
	public $stateful;

	public function init()
	{
		parent::init();
		$this->cmpClass = 'Ext.state.Stateful';
	}
}

