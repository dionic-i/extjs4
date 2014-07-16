<?php
/**
 * Description of ExtViewport
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 17.06.2013
 */

namespace dionici\extjs4\container;

class ExtViewport extends ExtContainer
{
	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.container.Viewport';
		$this->xtype    = 'viewport';
	}
}

