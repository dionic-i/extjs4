<?php
/**
 * Created by JetBrains PhpStorm.
 * Description of TreePanel.
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.tree.Panel
 *
 * User: Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * Date: 12.07.13
 * Time: 13:09
 */

namespace dionici\extjs4\tree;

use dionici\extjs4\panel\ExtTable;

class ExtTreePanel extends ExtTable
{
	/**
	 * @var boolean
	 */
	public $animate;

	/**
	 * @var string
	 */
	public $displayField;

	/**
	 * @var boolean
	 */
	public $folderSort;

	/**
	 * @var boolean
	 */
	public $lines;

	/**
	 * @var array
	 */
	public $root;

	/**
	 * @var boolean
	 */
	public $rootVisible;

	/**
	 * @var boolean
	 */
	public $rowLines;

	/**
	 * @var string
	 */
	public $selType;

	/**
	 * @var boolean
	 */
	public $singleExpand;

	/**
	 * @var boolean
	 */
	public $useArrows;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.tree.Panel';
		$this->xtype    = 'treepanel';
	}

}
