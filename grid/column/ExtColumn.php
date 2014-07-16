<?php
/**
 * Description of ExtColumn
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.grid.column.Column
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\grid\column;

use dionici\extjs4\Ext;
use dionici\extjs4\container\ExtContainer;
use dionici\extjs4\data\ExtField;

class ExtColumn extends ExtContainer
{
	/**
	 * @var string
	 */
	public $align;

	/**
	 * @var array
	 */
	protected $columns;

	/**
	 * @var array
	 */
	public $dataIndex;

	/**
	 * @var string
	 */
	public $defaultType;

	/**
	 * @var boolean
	 */
	public $detachOnRemove;

	/**
	 * @var string/boolean
	 */
	protected $editRenderer;

	/**
	 * @var string/ExtField
	 */
	protected $editor;

	/**
	 * @var string
	 */
	public $emptyCellText;

	/**
	 * @var boolean
	 */
	public $groupable;

	/**
	 * @var boolean
	 */
	public $hideable;

	/**
	 * @var boolean
	 */
	public $lockable;

	/**
	 * @var boolean
	 */
	public $locked;

	/**
	 * @var boolean
	 */
	public $menuDisabled;

	/**
	 * @var string
	 */
	public $menuText;

	/**
	 * @var string/function
	 */
	protected $renderer;

	/**
	 * @var boolean
	 */
	public $resizable;

	/**
	 * @var string
	 */
	public $scope;

	/**
	 * @var boolean
	 */
	public $sortable;

	/**
	 * @var string
	 */
	public $stateId;

	/**
	 * @var string
	 */
	public $tdCls;

	/**
	 * @var string
	 */
	public $text;

	/**
	 * @var string
	 */
	public $tooltip;

	/**
	 * @var string
	 */
	public $tooltipType;

	/**
	 * Настройки фильтра колонки.
	 * @var array
	 */
	public $filter;

	/**
	 * Тип суммирования колонки
	 * @var string
	 */
	public $summaryType;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.grid.columns.Column';
		$this->xtype    = 'gridcolumn';
		if (is_null($this->columns))
			$this->columns = [];
	}

	public function setColumns(array $value)
	{
		if (is_null($this->columns))
			$this->columns = [];

		foreach ($value as $column)
		{
			if ($column instanceof ExtColumn)
				$_c = $column;
			else
			{
				if (!array_key_exists('xtype', $column))
					$column['xtype'] = 'gridcolumn';
				$_c = Ext::createCmp($column['xtype'], $column);
			}
			$this->columns[] = $_c;
		}
	}

	public function getColumns()
	{
		return $this->columns;
	}

	public function setEditor($value)
	{
		if (is_string($value))
			$this->editor = $value;
		else if ($value instanceof ExtField)
			$this->editor = $value;
		else
		{
			if (!array_key_exists('xtype', $value))
				$value['xtype'] = 'textfield';
			$this->editor = Ext::createCmp($value['xtype'], $value);
		}
		return $this->editor;
	}

	public function getEditor()
	{
		return $this->editor;
	}

	public function setRenderer($value)
	{
	}

	public function getRenderer()
	{
	}

}
