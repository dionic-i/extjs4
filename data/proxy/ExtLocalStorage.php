<?php
/**
 * Description of ExtLocalStorage
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.proxy.LocalStorage
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 19.06.2013
 */

namespace dionici\extjs4\data\proxy;

class ExtLocalStorage extends ExtWebStorage
{

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.data.proxy.LocalStorage';
		$this->type     = 'localstorage';
	}

}
