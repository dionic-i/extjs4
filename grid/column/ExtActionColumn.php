<?php
/**
 * Description of ExtActionColumn
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.grid.column.Action
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 19.06.2013
 */

namespace dionici\extjs4\grid\column;

class ExtActionColumn extends ExtColumn
{
	/**
	 * @var string
	 */
	public $altText;

	/**
	 * @var string
	 */
	protected $getClass;

	/**
	 * @var string
	 */
	protected $getTip;

	/**
	 * @var string
	 */
	protected $handler;

	/**
	 * @var string
	 */
	public $icon;

	/**
	 * @var string
	 */
	public $iconCls;

	/**
	 * @var string
	 */
	protected $isDisabled;

	/**
	 * @var string
	 */
	public $stopSelection;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.grid.columns.Action';
		$this->xtype    = 'actioncolumn';
	}

	public function setGetClass($value)
	{
		$this->getClass = $value;
	}

	public function getGetClass()
	{
		return $this->getClass;
	}

	public function setGetTip($value)
	{
		$this->getTip = $value;
	}

	public function getGetTip()
	{
		return $this->getTip;
	}

	public function setHandler($value)
	{
		$this->handler = $value;
	}

	public function getHandler()
	{
		return $this->handler;
	}

	public function setIsDisabled($value)
	{
		$this->isDisabled = $value;
	}

	public function getIsDisabled()
	{
		return $this->isDisabled;
	}

}
