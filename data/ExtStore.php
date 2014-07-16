<?php
/**
 * Description of ExtStore
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.Store
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 18.06.2013
 */

namespace dionici\extjs4\data;

class ExtStore extends ExtAbstractStore
{
	/**
	 * @var boolean
	 */
	public $autoDestroy;

	/**
	 * @var boolean
	 */
	public $buffered;

	/**
	 * @var boolean
	 */
	public $clearOnPageLoad;

	/**
	 * @var boolean
	 */
	public $clearRemovedOnLoad;

	/**
	 * @var array
	 */
	public $data;

	/**
	 * @var string
	 */
	public $groupDir;

	/**
	 * @var string
	 */
	public $groupField;

	/**
	 * @var integer
	 */
	public $leadingBufferZone;

	/**
	 * @var integer
	 */
	public $pageSize;

	/**
	 * @var integer
	 */
	public $purgePageCount;

	/**
	 * @var boolean
	 */
	public $remoteGroup;

	/**
	 * @var boolean
	 */
	public $sortOnFilter;

	/**
	 * @var integer
	 */
	public $trailingBufferZone;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.data.Store';
	}

}
