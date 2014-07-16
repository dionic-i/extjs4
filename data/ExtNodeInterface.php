<?php
/**
 * Description of ExtNodeInterface.
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.NodeInterface
 *
 * @author: Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since: 12.07.13 14:49
 */

namespace dionici\extjs4\data;

use dionici\extjs4\ExtBase;

class ExtNodeInterface extends ExtBase
{
	/**
	 * @var boolean
	 */
	public $allowDrag;

	/**
	 * @var boolean
	 */
	public $allowDrop;

	/**
	 * @var boolean
	 */
	public $checked;

	/**
	 * @var array
	 */
	protected $children;

	/**
	 * @var string
	 */
	public $cls;

	/**
	 * @var integer
	 */
	public $depth;

	/**
	 * @var boolean
	 */
	public $expandable;

	/**
	 * @var boolean
	 */
	public $expanded;

	/**
	 * @var string
	 */
	public $href;

	/**
	 * @var string
	 */
	public $hrefTarget;

	/**
	 * @var string
	 */
	public $icon;

	/**
	 * @var string
	 */
	public $iconCls;

	/**
	 * @var integer
	 */
	public $index;

	/**
	 * @var boolean
	 */
	public $isFirst;

	/**
	 * @var boolean
	 */
	public $isLast;

	/**
	 * @var boolean
	 */
	public $leaf;

	/**
	 * @var boolean
	 */
	public $loaded;

	/**
	 * @var boolean
	 */
	public $loading;

	/**
	 * @var boolean
	 */
	public $parentId;

	/**
	 * @var integer
	 */
	public $qshowDelay;

	/**
	 * @var string
	 */
	public $qtip;

	/**
	 * @var string
	 */
	public $qtitle;

	/**
	 * @var boolean
	 */
	public $root;

	/**
	 * @var string
	 */
	public $text;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.data.NodeInterface';
		if (is_null($this->children))
			$this->children = [];
	}

	public function clear()
	{
		$this->children = [];
	}

	public function getChildren()
	{
		return $this->children;
	}

	public function setChildren($value)
	{
		if (empty($this->children))
			$this->children = [];

		$this->clear();

		if (is_array($value))
		{
			foreach ($value as $item)
				$this->appendChild($item);
		}
	}

	/**
	 * Метод добавления узла.
	 * @param $child array
	 * @return ExtNodeInterface
	 */
	public function appendChild($child)
	{
		$this->children[] = new ExtNodeInterface($child);
	}

	public function removeChild($index)
	{
	}

}
