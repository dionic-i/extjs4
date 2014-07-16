<?php
/**
 * Description of ExtFilterFeature.
 *
 *
 * @author: Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since: 19.07.13 12:25
 */

namespace dionici\extjs4\grid\feature;

class ExtFilterFeature extends ExtFeature
{
	/**
	 * @var boolean
	 */
	protected $autoReload;

	/**
	 * @var boolean
	 */
	public $encode;

	/**
	 * @var string
	 */
	public $filterCls;

	/**
	 * @var array
	 */
	public $filters;

	/**
	 * @var boolean
	 */
	public $local;

	/**
	 * @var string
	 */
	public $menuFilterText;

	/**
	 * @var string
	 */
	public $paramPrefix;

	/**
	 * @var boolean
	 */
	public $showMenu;

	/**
	 * @var string
	 */
	public $stateId;

	/**
	 * @var string
	 */
	public $updateBuffer;

	public function initComponent()
	{
		parent::initComponent();
		$this->ftype = 'filters';
	}
}
