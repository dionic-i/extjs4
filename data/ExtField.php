<?php
/**
 * Description of ExtField
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.Field
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 17.06.2013
 */

namespace dionici\extjs4\data;

use dionici\extjs4\ExtBase;

class ExtField extends ExtBase
{
	/**
	 * Список названий возможных типов полей
	 * @var array
	 */
	private $_fieldTypes;

	/**
	 * @var string
	 */
	public $convert;

	/**
	 * @var string
	 */
	public $dateFormat;

	/**
	 * @var string
	 */
	public $dateReadFormat;

	/**
	 * @var string
	 */
	public $dateWriteFormat;

	/**
	 * @var array
	 */
	public $defaultValue;

	/**
	 * @var string
	 */
	public $name;

	/**
	 * @var boolean
	 */
	public $persist;

	/**
	 * @var string
	 */
	protected $serialize;

	/**
	 * @var string
	 */
	public $sortDir;

	/**
	 * @var string
	 */
	protected $type;

	/**
	 * @var boolean
	 */
	public $useNull;

	public function __construct($config = array())
	{
		$this->_fieldTypes = array(
			'auto',
			'string',
			'int',
			'float',
			'boolean',
			'date',
			'checkbox',
			'combo'
		);
		parent::__construct($config);
	}

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass  = 'Ext.data.Field';
		$this->_notExt[] = '_fieldTypes';
	}

	//	public function setConvert($value)
	//	{
	//	}
	//
	//	public function getConvert()
	//	{
	//	}

	public function setType($value)
	{
		if (in_array($value, $this->_fieldTypes))
			$this->type = $value;
		else
			trigger_error("Error to set Ext.field.type: $value", E_USER_ERROR);
	}

	public function getType()
	{
		return $this->type;
	}

}
