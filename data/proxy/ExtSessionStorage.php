<?php
/**
 * Description of ExtSessionStorage
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.proxy.SessionStorage
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since  19.06.2013
 */

namespace dionici\extjs4\data\proxy;

class ExtSessionStorage extends ExtWebStorage
{

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.data.proxy.SessionStorage';
		$this->type     = 'sessionstorage';
	}

}
