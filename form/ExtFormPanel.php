<?php
/**
 * Description of ExtFormPanel
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.form.Panel
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.form.Basic
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\form;

use dionici\extjs4\Ext;
use dionici\extjs4\panel\ExtPanel;
use dionici\extjs4\data\reader\ExtReader;

class ExtFormPanel extends ExtPanel
{
	// Ext.form.Panel

	/**
	 * @var boolean
	 */
	public $pollForChanges;

	/**
	 * @var integer
	 */
	public $pollInterval;

	// Ext.form.Basic

	/**
	 * @var array
	 */
	public $api;

	/**
	 * @var array
	 */
	public $baseParams;

	/**
	 * @var ExtReader
	 */
	protected $errorReader;

	/**
	 * @var boolean
	 */
	public $jsonSubmit;

	/**
	 * @var string
	 */
	public $method;

	/**
	 * @var string/array
	 */
	public $paramOrder;

	/**
	 * @var boolean
	 */
	public $paramsAsHash;

	/**
	 * @var ExtReader
	 */
	protected $reader;

	/**
	 * @var boolean
	 */
	public $standartSubmit;

	/**
	 * @var integer
	 */
	public $timeout;

	/**
	 * @var boolean
	 */
	public $trackResetOnLoad;

	/**
	 * @var string
	 */
	public $url;

	/**
	 * @var string
	 */
	public $waitMsgTarget;

	/**
	 * @var string
	 */
	public $waitTitle;

	/**
	 * @var array
	 */
	public $fieldDefaults;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.form.Panel';
		$this->xtype    = 'form';
	}

	public function setErrorReader($value)
	{
		if ($value instanceof ExtReader)
			$this->errorReader = $value;
		else
			$this->errorReader = Ext::createCmp($value['xtype'], $value);
		return $this->errorReader;
	}

	public function getErrorReader()
	{
		return $this->errorReader;
	}

	public function setReader($value)
	{
		if ($value instanceof ExtReader)
			$this->reader = $value;
		else
			$this->reader = Ext::createCmp($value['xtype'], $value);
		return $this->reader;
	}

	public function getReader()
	{
		return $this->reader;
	}

}
