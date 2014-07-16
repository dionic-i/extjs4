<?php
/**
 * Description of ExtJsonWriter
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.writer.Json
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 19.06.2013
 */

namespace dionici\extjs4\data\writer;

class ExtJsonWriter extends ExtWriter
{
	/**
	 * @var boolean
	 */
	public $allowSingle;

	/**
	 * @var string
	 */
	public $encode;

	/**
	 * @var boolean
	 */
	public $expandData;

	/**
	 * @var string
	 */
	public $root;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.data.writer.Json';
		$this->type     = 'json';
	}

}
