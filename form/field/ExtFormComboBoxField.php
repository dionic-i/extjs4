<?php
/**
 * Description of ExtFormComboBoxField
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.form.field.ComboBox
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 27.06.2013
 */

namespace dionici\extjs4\form\field;

class ExtFormComboBoxField extends ExtFormPickerField
{
	/**
	 * @var string
	 */
	public $allQuery;

	/**
	 * @var boolean
	 */
	public $anyMatch;

	/**
	 * @var boolean
	 */
	public $autoSelect;

	/**
	 * @var boolean
	 */
	public $caseSensitive;

	/**
	 * @var array
	 */
	public $defaultListConfig;

	/**
	 * @var string
	 */
	public $delimiter;

	/**
	 * @var string
	 */
	public $displayField;

	/**
	 * @var boolean
	 */
	public $enableRegEx;

	/**
	 * @var boolean
	 */
	public $forceSelection;

	/**
	 * @var boolean
	 */
	public $growToLongestValue;

	/**
	 * @var string
	 */
	public $hiddenName;

	/**
	 * @var array
	 */
	public $listConfig;

	/**
	 * @var integer
	 */
	public $minChars;

	/**
	 * @var boolean
	 */
	public $multiSelect;

	/**
	 * @var integer
	 */
	public $pageSize;

	/**
	 * @var boolean
	 */
	public $queryCaching;

	/**
	 * @var integer
	 */
	public $queryDelay;

	/**
	 * @var string
	 */
	public $queryMode;

	/**
	 * @var string
	 */
	public $queryParam;

	/**
	 * @var integer
	 */
	public $selectOnTab;

	/**
	 * @var array
	 */
	protected $store;

	/**
	 * @var string
	 */
	public $transform;

	/**
	 * @var string
	 */
	public $triggerAction;

	/**
	 * @var string
	 */
	public $triggerCls;

	/**
	 * @var boolean
	 */
	public $typeAhead;

	/**
	 * @var string
	 */
	public $typeAheadDelay;

	/**
	 * @var string
	 */
	public $valueNotFoundText;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.form.field.ComboBox';
		$this->xtype    = 'combobox';
	}

	public function setStore($value)
	{
		if (is_array($value))
		{
			$items = array();
			foreach ($value as $key => $v)
				$items[] = array($key, $v);
			$this->store = $items;
		}
		else
			$this->store = $value;
	}

	public function getStore()
	{
		return $this->store;
	}
}
