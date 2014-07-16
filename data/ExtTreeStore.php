<?php
/**
 * Description of ExtTreeStore.
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.TreeStore
 *
 * @author: Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since: 12.07.13 13:29
 */

namespace dionici\extjs4\data;

class ExtTreeStore extends ExtAbstractStore
{
	/**
	 * @var boolean
	 */
	public $clearOnLoad;

	/**
	 * @var boolean
	 */
	public $clearRemovedOnLoad;

	/**
	 * @var string
	 */
	public $defaultRootId;

	/**
	 * @var string
	 */
	public $defaultRootProperty;

	/**
	 * @var boolean
	 */
	public $folderSort;

	/**
	 * @var string
	 */
	public $nodeParam;

	/**
	 * @var array
	 */
	public $root;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.data.TreeStore';
	}

}
