<?php
/**
 * Description of ExtAbstractPanel
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.panel.AbstractPanel
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\panel;

use dionici\extjs4\Ext;
use dionici\extjs4\ExtComponent;
use dionici\extjs4\container\ExtContainer;

abstract class ExtAbstractPanel extends ExtContainer
{
	/**
	 * @var boolean
	 */
	public $bodyBorder;

	/**
	 * @var string/array
	 */
	public $bodyClass;

	/**
	 * @var string
	 */
	public $bodyPadding;

	/**
	 * @var string/array
	 */
	public $bodyStyle;

	/**
	 * @var array
	 */
	protected $dockedItems;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.panel.AbstractPanel';
		if (is_null($this->dockedItems))
			$this->dockedItems = [];
	}

	public function getDockedItems()
	{
		return $this->dockedItems;
	}

	public function setDockedItems(array $value)
	{
		if (is_null($this->dockedItems))
			$this->dockedItems = [];

		foreach ($value as $item)
		{
			if ($item instanceof ExtComponent)
				$_item = $item;
			else
				$_item = Ext::createCmp($item['xtype'], $item);

			$this->dockedItems[] = $_item;
		}
	}

}

