<?php
/**
 * Description of ExtSummary
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.grid.feature.Summary
 *
 * @author: Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since: 21.07.13 17:00
 */

namespace dionici\extjs4\grid\feature;

class ExtSummary extends ExtAbstractSummary
{
	/**
	 * @var string
	 */
	public $dock;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.grid.feature.Summary';
		$this->ftype    = 'summary';
	}

}
