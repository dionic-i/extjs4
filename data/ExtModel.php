<?php
/**
 * Description of ExtModel
 * Класс моделей данных ExtJs.
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.Model
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 27.06.2013
 */

namespace dionici\extjs4\data;

use dionici\extjs4\ExtBase;

class ExtModel extends ExtBase
{
	/**
	 * @var string
	 */
	public $clientIdProperty;

	/**
	 * @var string
	 */
	public $defaultProxyType;

	/**
	 * @var array
	 */
	protected $fields;

	/**
	 * @var string
	 */
	public $idProperty;

	/**
	 * @var array
	 */
	public $idgen;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.data.Model';
	}

	public function setFields($fields)
	{
		if (is_null($this->fields))
			$this->fields = [];

		foreach ($fields as $field)
		{
			if ($field instanceof ExtField)
				$this->fields[] = $field;
			else
				$this->fields[] = new ExtField($field);
		}
	}

	public function getFields()
	{
		return $this->fields;
	}

}
