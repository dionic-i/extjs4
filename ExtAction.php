<?php
/**
 * Description of ExtAction
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.Action
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 19.06.2013
 */

namespace dionici\extjs4;

class ExtAction extends ExtBase
{
	/**
	 * @var boolean
	 */
	public $disabled;

	/**
	 * @var string
	 */
	protected $handler;

	/**
	 * @var boolean
	 */
	public $hidden;

	/**
	 * @var boolean
	 */
	public $iconCls;

	/**
	 * @var string
	 */
	public $itemId;

	/**
	 * @var string
	 */
	public $scope;

	/**
	 * @var string
	 */
	public $text;

	/**
	 * @var string
	 */
	public $xtype;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.Action';
		$this->xtype    = 'action';
	}

	public function setHandler($value)
	{
		$this->handler = $value;
	}

	public function getHandler()
	{
		return $this->handler;
	}

}
