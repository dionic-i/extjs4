<?php
/**
 * Description of ExtGrid
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.grid.Panel
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 19.06.2013
 */

namespace dionici\extjs4\grid;

use dionici\extjs4\panel\ExtTable;
use dionici\extjs4\grid\feature\ExtFilterFeature;
use dionici\extjs4\grid\feature\ExtSummary;

class ExtGrid extends ExtTable
{
	/**
	 * @var array
	 */
	public $lockedGridConfig;

	/**
	 * @var array
	 */
	public $lockedViewConfig;

	/**
	 * @var boolean
	 */
	public $enableLocking;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.grid.Panel';
		$this->xtype    = 'grid';
	}

	protected function getExistFilters()
	{
		foreach ($this->columns as $column)
		{
			if ($column->filter)
				return TRUE;
		};

		return FALSE;
	}

	protected function getExistLocked()
	{
		foreach ($this->columns as $column)
		{
			if ($column->locked)
				return TRUE;
		}

		return FALSE;
	}

	protected function getExistSummations()
	{
		foreach ($this->columns as $column)
		{
			if (!is_null($column->summaryType))
				return TRUE;
		}

		return FALSE;
	}

	public function setColumns(array $value)
	{
		parent::setColumns($value);

		if ($this->getExistFilters())
		{
			$this->features[] = new ExtFilterFeature(array(
				'autoReload'     => FALSE,
				'local'          => TRUE,
				'menuFilterText' => 'Фильтр'
			));
		}

		if ($this->getExistLocked())
		{
			$this->lockedGridConfig = array('storeId' => $this->storeId);
			$this->enableLocking    = TRUE;
		}

		if ($this->getExistSummations())
			$this->features[] = new ExtSummary();
	}

}
