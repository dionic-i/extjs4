<?php
/**
 * Description of ExtAbstractSummary
 *
 * @author: Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since: 21.07.13 16:32
 */

namespace dionici\extjs4\grid\feature;

abstract class ExtAbstractSummary extends ExtFeature
{
	/**
	 * @var string
	 */
	public $remoteRoot;

	/**
	 * @var boolean
	 */
	public $showSummaryRow;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.grid.feature.AbstractSummary';
		$this->ftype    = 'summary';
	}

}
