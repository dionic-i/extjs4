<?php
/**
 * @class ExtEditor
 *
 * @author: Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @created 19.03.2013
 */

namespace dionici\extjs4\data;

use dionici\extjs4\ExtBase;

class ExtEditor extends ExtBase
{
	/**
	 * Список событий
	 * @var array
	 */
	public $bindEvents;

	/**
	 * Название поля
	 * @var string
	 */
	public $fieldName = '';

	/**
	 * Флаг разрешения редактирования поля
	 * @var Boolean
	 */
	public $editable = FALSE;

	public function __construct($config = array())
	{
		parent::__construct($config);
		$this->cmpClass = 'Ext.form.field.Text';
	}

	public function addBindEvent($event, $func)
	{
		if (!is_array($this->bindEvents))
			$this->bindEvents = array();
		$this->bindEvents[$event] = $func;
	}
}
