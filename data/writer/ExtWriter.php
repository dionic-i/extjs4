<?php
/**
 * Description of ExtWriter
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.writer.Writer
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\data\writer;

use dionici\extjs4\ExtTypedBase;

abstract class ExtWriter extends ExtTypedBase
{
	/**
	 * @var string
	 */
	public $dateFormat;

	/**
	 * @var string
	 */
	public $nameProperty;

	/**
	 * @var boolean
	 */
	public $writeAllFields;

	/**
	 * @var boolean
	 */
	public $writeRecordId;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.data.writer.Writer';
		$this->type     = 'base';
	}

}
