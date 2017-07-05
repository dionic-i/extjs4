<?php
/**
 * Description of Ext
 * Общий класс для работы с серверными ExtJS компонентами.
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 15.06.2013
 */

namespace dionici\extjs4;

use yii;
use dionici\extjs4\ExtComponent;

class Ext
{
	private static $_aliasClasses = array(

		// xtype classes

		'component'        => 'ExtComponent',

		// Container
		'container'        => 'ExtContainer',
		'viewport'         => 'ExtViewport',

		// Button
		'button'           => 'ExtButton',
		'cycle'            => 'ExtCycle',
		'splitbutton'      => 'ExtSplit',

		// Panel
		'panel'            => 'ExtPanel',
		'tablepanel'       => 'ExtTable',

		// Menu
		'menu'             => 'ExtMenu',
		'colormenu'        => 'ExtColorPicker',
		'datemenu'         => 'ExtDatePicker',
		'menuitem'         => 'ExtMenu',
		'menucheckitem'    => 'ExtColorPicker',
		'menuseparator'    => 'ExtDatePicker',

		// Grid
		'grid'             => 'ExtGrid',
		'propertygrid'     => 'ExtPropertyGrid',
		'filters'          => 'ExtFilterFeatures',
		'summary'          => 'ExtSummary',

		// Columns
		'actioncolumn'     => 'ExtActionColumn',
		'booleancolumn'    => 'ExtBooleanColumn',
		'checkcolumn'      => 'ExtCheckColumn',
		'datecolumn'       => 'ExtDateColumn',
		'numbercolumn'     => 'ExtNumberColumn',
		'rownumberer'      => 'ExtRowNumberer',
		'templatecolumn'   => 'ExtTemplateColumn',
		'gridcolumn'       => 'ExtColumn',
		'encheckcolumn'    => 'EnCheckColumn',
		'encombocolumn'    => 'EnComboColumn',

		// Form
		'form'             => 'ExtFormPanel',
		'enbaseform'       => 'EnBaseForm',
		'checkboxfield'    => 'ExtFormCheckboxField',
		'combobox'         => 'ExtFormComboBoxField',
		'datefield'        => 'ExtFormDateField',
		'hiddenfield'      => 'ExtFormHiddenField',
		'numberfield'      => 'ExtFormNumberField',
		'pickerfield'      => 'ExtFormPickerField',
		'radio'            => 'ExtFormRadioField',
		'spinnerfield'     => 'ExtFormSpinnerField',
		'textarea'         => 'ExtFormTextArea',
		'textfield'        => 'ExtFormTextField',
		'timefield'        => 'ExtFormTimeField',
		'triggerfield'     => 'ExtFormTriggerField',
		'passconfirmfield' => 'EnPasswordConfirmField',
		'encheckboxfield'  => 'EnFormCheckboxField',

		// Toolbar
		'toolbar'          => 'ExtToolbar',
		'pagingtoolbar'    => 'ExtPaging',
		'tbitem'           => 'ExtToolbarItem',
		'tbtext'           => 'ExtTextItem',
		'tbseparator'      => 'ExtToolbarSeparator',
		'tbspacer'         => 'ExtSpacer',
		'tbfill'           => 'ExtFill',

		'action'           => 'ExtAction',

		// type classes

		// Fields
		'auto'             => 'ExtField',
		'string'           => 'ExtField',
		'int'              => 'ExtField',
		'float'            => 'ExtField',
		'boolean'          => 'ExtField',
		'date'             => 'ExtField',

		// Proxy
		'memory'           => 'ExtMemory',
		'localstotage'     => 'ExtLocalStorage',
		'sessionstotage'   => 'ExtSessionStorage',
		'ajax'             => 'ExtAjax',

		// Reader
		'jsonreader'       => 'ExtJsonReader',
		'arrayreader'      => 'ExtArrayReader',

		// Writer
		'jsonwriter'       => 'ExtJsonWriter',

		// ptype classes
		'editing'          => 'ExtEditing',
		'cellediting'      => 'ExtCellEditing',
		'rowediting'       => 'ExtRowtditing',

		// ux
		'enobjectfield'    => 'EnObjectField',

		// tree
		'treecolumn'       => 'ExtTreeColumn'
	);

	/**
	 * Метод установки значений свойств компонента.
	 * @param ExtComponent $comp
	 * @param array $config
	 */
	public static function apply($comp, $config = array())
	{
		$_props = $comp->getExtProperties();
		foreach ($config as $prop => $value)
		{
			if (in_array($prop, $_props))
				$comp->setWithSetter($prop, $value);
		}
	}

	/**
	 * Метод установки значений не установленных свойств компонента.
	 * @param ExtComponent $comp
	 * @param array $config
	 */
	public static function applyIf($comp, $config = array())
	{
		$_props = $comp->getExtProperties();
		foreach ($config as $prop => $value)
		{
			if (in_array($prop, $_props))
			{
				$_v = $comp->getWithGetter($prop);
				if (is_null($_v))
					$comp->setWithSetter($prop, $value);
			}
		}
	}

	/**
	 * Метод получения названия php класса по xtype, type, ptype.
	 * @param string $xtype
	 * @return string Название класса ExtJs
	 */
	public static function getExtClass($name, $raise = TRUE)
	{
		if (array_key_exists($name, self::$_aliasClasses))
			return self::$_aliasClasses[$name];
		else
		{
			if ($raise)
				trigger_error("Error to find ExtJs class by xtype $name", E_USER_ERROR);
		}
	}

	/**
	 * Метод создания компонента по xtype, ptype
	 * @param array $config Конфигурационный объект
	 * @return ExtComponent Созданный объект
	 */
	public static function createCmp($name, $config)
	{
		$class = self::getExtClass($name);
		return new $class($config);
	}

}
