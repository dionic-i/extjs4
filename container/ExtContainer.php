<?php
/**
 * Description of ExtContainer
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.container.Container
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 15.06.2013
 */

namespace dionici\extjs4\container;

class ExtContainer extends ExtAbstractContainer
{
	/**
	 * @var number/array
	 */
	public $anchorSize;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.container.Container';
		$this->xtype    = 'container';
	}

}
