<?php
/**
 * Description of ExtReader
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 14.07.2014
 */

namespace dionici\extjs4\data\reader;

use dionici\extjs4\ExtTypedBase;

abstract class ExtReader extends ExtTypedBase
{
	/**
	 * @var string
	 */
	public $idProperty;

	/**
	 * @var boolean
	 */
	public $implicitIncludes;

	/**
	 * @var string
	 */
	public $messageProperty;

	/**
	 * @var boolean
	 */
	public $readRecordsOnFailure;

	/**
	 * @var string
	 */
	public $root;

	/**
	 * @var string
	 */
	public $successProperty;

	/**
	 * @var string
	 */
	public $totalProperty;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.data.reader.Reader';
	}

}
