<?php
/**
 * Description of ExtCycle
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.button.Cycle
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 15.06.2013
 */

namespace dionici\extjs4\button;

class ExtCycle extends ExtButton
{
	/**
	 * @var string
	 */
	protected $changeHandler;

	/**
	 * @var string
	 */
	public $prependText;

	/**
	 * @var string/array
	 */
	public $renderTpl;

	/**
	 * @var boolean
	 */
	public $showText;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.button.Cycle';
		$this->xtype    = 'cycle';
	}

	public function setChangeHandler($value)
	{
		$this->changeHandler = $value;
	}

	public function getChangeHandler()
	{
		return $this->changeHandler;
	}

}
