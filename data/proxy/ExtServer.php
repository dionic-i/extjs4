<?php
/**
 * Description of ExtServer
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.proxy.Server
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 18.06.2013
 */

namespace dionici\extjs4\data\proxy;

use yii\helpers\json;

abstract class ExtServer extends ExtProxy
{
	/**
	 * @var array
	 */
	public $api;

	/**
	 * @var string
	 */
	public $cacheString;

	/**
	 * @var string
	 */
	public $directionParam;

	/**
	 * @var array
	 */
	protected $extraParams;

	/**
	 * @var string
	 */
	public $filterParam;

	/**
	 * @var string
	 */
	public $groupDirectionParam;

	/**
	 * @var string
	 */
	public $groupParam;

	/**
	 * @var string
	 */
	public $idParam;

	/**
	 * @var string
	 */
	public $limitParam;

	/**
	 * @var boolean
	 */
	public $noCache;

	/**
	 * @var string
	 */
	public $pageParam;

	/**
	 * @var boolean
	 */
	public $simpleGroupMode;

	/**
	 * @var boolean
	 */
	public $simpleSortMode;

	/**
	 * @var string
	 */
	public $sortParam;

	/**
	 * @var string
	 */
	public $startParam;

	/**
	 * @var integer
	 */
	public $timeout;

	/**
	 * @var string
	 */
	public $url;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.data.proxy.Server';
		$this->type     = 'server';
	}

	public function getExtraParams()
	{
		return array('data' => Json::encode($this->extraParams));
	}

	public function setExtraParams(array $params)
	{
		$this->extraParams = $params;
	}

	public function setParam($name, $value)
	{
		if (!is_array($this->extraParams))
			$this->extraParams = array();
		$this->extraParams[$name] = $value;
	}

}
