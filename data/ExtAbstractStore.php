<?php
/**
 * Description of ExtAbstractStore
 * Класс абстрактного store ExtJs.
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.AbstractStores
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 17.06.2013
 */

namespace dionici\extjs4\data;

use dionici\extjs4\Ext;
use dionici\extjs4\ExtBase;
use dionici\extjs4\data\proxy\ExtProxy;

abstract class ExtAbstractStore extends ExtBase
{
	/**
	 * Название свойства компонента, которому установить созданный store.
	 * @var string
	 */
	public $storeName;

	/**
	 * @var array/boolean
	 */
	public $autoLoad;

	/**
	 * @var boolean
	 */
	public $autoSync;

	/**
	 * @var string
	 */
	public $batchUpdateMode;

	/**
	 * Поля store. Если их определить, то можно не указывать model.
	 * @var array
	 */
	protected $fields;

	/**
	 * @var boolean
	 */
	public $filterOnLoad;

	/**
	 * @todo Определить как устанавливать фильтры на сервере.
	 * @var array
	 */
	public $filters;

	/**
	 * @var string
	 */
	public $model;

	/**
	 * @var ExtProxy
	 */
	protected $proxy;

	/**
	 * @var boolean
	 */
	public $remoteFilter;

	/**
	 * @var boolean
	 */
	public $remoteSort;

	/**
	 * @var boolean
	 */
	public $sortOnLoad;

	/**
	 * @var boolean
	 */
	public $statefulFilters;

	/**
	 * @var string
	 */
	public $storeId;

	public function initComponent()
	{
		parent::initComponent();
		if (is_null($this->fields))
			$this->fields = [];
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

	public function setProxy($value)
	{
		if ($value instanceof ExtProxy)
			$this->proxy = $value;
		else
			$this->proxy = Ext::createCmp($value['type'], $value);
		return $this->proxy;
	}

	public function getProxy()
	{
		return $this->proxy;
	}

}
