<?php
/**
 * Description of ExtArrayReader
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.reader.Array
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 18.06.2013
 */

namespace dionici\extjs4\data\reader;

class ExtArrayReader extends ExtReader
{

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.data.reader.Array';
		$this->type     = 'array';
	}

}
