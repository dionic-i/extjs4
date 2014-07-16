<?php
/**
 * Description of ExtCheckItem
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.menu.CheckItem
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\menu;

class ExtCheckItem extends ExtMenuItem
{
	/**
	 * @var boolean
	 */
	public $checkChangeDisabled;

	/**
	 * @var string
	 */
	public $checkHandler;

	/**
	 * @var boolean
	 */
	public $checked;

	/**
	 * @var string
	 */
	public $checkedCls;

	/**
	 * @var string
	 */
	public $group;

	/**
	 * @var string
	 */
	public $groupCls;

	/**
	 * @var string
	 */
	public $scope;

	/**
	 * @var string
	 */
	public $uncheckedCls;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.menu.CheckItem';
		$this->xtype    = 'menucheckitem';
	}

}
