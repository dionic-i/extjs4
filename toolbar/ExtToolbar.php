<?php
/**
 * Description of ExtAbstractComponent
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.toolbar.Toolbar
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 15.06.2013
 */

namespace dionici\extjs4\toolbar;

use dionici\extjs4\container\ExtContainer;

class ExtToolbar extends ExtContainer
{
	/**
	 * @var string
	 */
	public $defaultButtonUI;

	/**
	 * @var string
	 */
	public $defaultType;

	/**
	 * @var boolean
	 */
	public $enableOverflow;

	/**
	 * @var string
	 */
	public $menuTriggerCls;

	/**
	 * @var boolean
	 */
	public $vertical;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.toolbar.Toolbar';
		$this->xtype    = 'toolbar';
	}

	public function setItems($value)
	{
		$this->useDefaults = TRUE;
		parent::setItems($value);
	}

	/**
	 * Метод групповой вставки элементов toolbar, начиная с указанного индекса
	 * @param array $items Вставлемые элементы (Каждый элемент может быть либо массивом настроек, либо потомком ExtComponent)
	 * @param integer $index Индекс начала вставки
	 */
	public function insertGroup(array $items, $index = 0)
	{
		foreach ($items as $item)
		{
			$this->insertAt($item, $index);
			$index++;
		}
	}

}
