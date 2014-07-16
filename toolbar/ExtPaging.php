<?php
/**
 * Description of ExtPaging
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.toolbar.Paging
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 19.06.2013
 */

namespace dionici\extjs4\toolbar;

class ExtPaging extends ExtToolbar
{
	/**
	 * @var string
	 */
	public $afterPageText;

	/**
	 * @var string
	 */
	public $beforePageText;

	/**
	 * @var string
	 */
	public $displayInfo;

	/**
	 * @var string
	 */
	public $displayMsg;

	/**
	 * @var string
	 */
	public $emptyMsg;

	/**
	 * @var string
	 */
	public $firstText;

	/**
	 * @var integer
	 */
	public $inputItemWidth;

	/**
	 * @var string
	 */
	public $lastText;

	/**
	 * @var string
	 */
	public $nextText;

	/**
	 * @var boolean
	 */
	public $prependButtons;

	/**
	 * @var string
	 */
	public $prevText;

	/**
	 * @var string
	 */
	public $refreshText;

	/**
	 * @var string
	 */
	public $storeId;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.toolbar.Paging';
		$this->xtype    = 'pagingtoolbar';
	}

}
