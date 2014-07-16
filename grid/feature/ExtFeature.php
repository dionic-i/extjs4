<?php
/**
 * Description of ExtFeature.
 *
 * @author: Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since: 19.07.13
 */

namespace dionici\extjs4\grid\feature;

use dionici\extjs4\ExtBase;

abstract class ExtFeature extends ExtBase
{
	public $ftype;

	public function initComponent()
	{
		parent::initComponent();
		$this->ftype = 'feature';
	}

}
