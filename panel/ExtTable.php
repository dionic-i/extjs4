<?php
/**
 * Description of ExtTable
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.panel.Table
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\panel;

use dionici\extjs4\Ext;
use dionici\extjs4\grid\column\ExtColumn;
use dionici\extjs4\grid\feature\ExtFeature;

abstract class ExtTable extends ExtPanel
{
	/**
	 * @var boolean
	 */
	public $allowDeselect;

	/**
	 * @var boolean
	 */
	public $columnLines;

	/**
	 * @var array
	 */
	protected $columns;

	/**
	 * @var boolean
	 */
	public $deferRowRender;

	/**
	 * @var boolean
	 */
	public $disableSelection;

	/**
	 * @var string
	 */
	public $emptyText;

	/**
	 * @var boolean
	 */
	public $enableColumnHide;

	/**
	 * @var boolean
	 */
	public $enableColumnMove;

	/**
	 * @var boolean
	 */
	public $enableColumnResize;

	/**
	 * @var boolean
	 */
	public $enableLocking;

	/**
	 * @var array
	 */
	protected $features;

	/**
	 * @var boolean
	 */
	public $forceFit;

	/**
	 * @var boolean
	 */
	public $hideHeaders;

	/**
	 * @var boolean
	 */
	public $rowLines;

	/**
	 * @var boolean/string
	 */
	public $scroll;

	/**
	 * @var boolean
	 */
	public $sealedColumns;

	/**
	 * @var array
	 */
	public $selModel;

	/**
	 * @var string
	 */
	public $selType;

	/**
	 * @var boolean
	 */
	public $sortableColumns;

	/**
	 * @var array
	 */
	public $viewConfig;

	public function __construct($config)
	{
		$this->features = [];
		parent::__construct($config);
	}

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.panel.Table';
		$this->xtype    = 'tablepanel';
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

	public function setFeatures(array $value)
	{
		if (is_null($this->features))
			$this->features = [];

		foreach ($value as $feature)
		{
			if ($feature instanceof ExtFeature)
				$_f = $feature;
			else
				$_f = Ext::createCmp($feature['ftype'], $feature);

			$this->features[] = $_f;
		}
	}

	public function getFeatures()
	{
		return $this->features;
	}

	/**
	 * Метод получения колонки по dataIndex
	 * @param $name
	 */
	public function getColumnByName($name)
	{
		foreach ($this->columns as $column)
		{
		}
	}

}
