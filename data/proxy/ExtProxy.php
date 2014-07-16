<?php
/**
 * Description of ExtProxy
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.proxy.Proxy
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 18.06.2013
 */

namespace dionici\extjs4\data\proxy;

use dionici\extjs4\Ext;
use dionici\extjs4\ExtTypedBase;
use dionici\extjs4\data\reader\ExtReader;
use dionici\extjs4\data\writer\ExtWriter;

abstract class ExtProxy extends ExtTypedBase
{
	/**
	 * @var boolean
	 */
	public $batchActions;

	/**
	 * @var string
	 */
	public $batchOrder;

	/**
	 * @var string
	 */
	public $model;

	/**
	 * @var ExtReader
	 */
	protected $reader;

	/**
	 * @var ExtWriter
	 */
	protected $writer;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.data.proxy.Proxy';
	}

	public function setReader($value)
	{
		if ($value instanceof ExtReader)
			$this->reader = $value;
		else
			$this->reader = Ext::createCmp($value['type'], $value);
		return $this->reader;
	}

	public function getReader()
	{
		return $this->reader;
	}

	public function setWriter($value)
	{
		if ($value instanceof ExtWriter)
			$this->writer = $value;
		else
			$this->writer = Ext::createCmp($value['type'], $value);
		return $this->writer;
	}

	public function getWriter()
	{
		return $this->writer;
	}

}
