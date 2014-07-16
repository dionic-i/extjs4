<?php
/**
 * Description of ExtAbstractPlugin
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.AbstractPlugin
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4;

abstract class ExtAbstractPlugin extends ExtBase
{
	/**
	 * @var string
	 */
	public $ptype;

	/**
	 * @var string
	 */
	public $pluginId;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.AbstractPlugin';
	}

}

