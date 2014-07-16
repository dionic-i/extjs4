<?php
/**
 * Description of ExtSplit
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.button.Split
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 17.06.2013
 */

namespace dionici\extjs4\button;

class ExtSplit extends ExtButton
{
	/**
	 * @var string
	 */
	public $arrowHandler;

	/**
	 * @var string
	 */
	public $arrowTooltip;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.button.Split';
		$this->xtype    = 'splitbutton';
	}

	public function setArrowHandler($value)
	{
		$this->arrowHandler = $value;
	}

	public function getArrowHandler()
	{
		return $this->arrowHandler;
	}

}
