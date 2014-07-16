<?php
/**
 * Description of ExtJsonReader
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.reader.Json
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\data\reader;

class ExtJsonReader extends ExtReader
{
	/**
	 * @var string
	 */
	public $metaProperty;

	/**
	 * @var boolean
	 */
	public $useSimpleAccessors;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.data.reader.Json';
		$this->type     = 'json';
	}

}
