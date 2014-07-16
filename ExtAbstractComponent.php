<?php
/**
 * Description of ExtAbstractComponent
 * Класс абстрактного компонента.
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.AbstractComponent-cfg-tplWriteMode
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 15.06.2013
 */

namespace dionici\extjs4;

use dionici\extjs4\state\ExtStateful;

abstract class ExtAbstractComponent extends ExtBase
{
	/**
	 * Альтернативное название xtype
	 * @var string
	 */
	protected $altXtype;

	/**
	 * @var string
	 */
	public $autoEl;

	/**
	 * @var boolean
	 */
	public $autoRender;

	/**
	 * @var boolean
	 */
	public $autoShow;

	/**
	 * @var string
	 */
	public $baseCls;

	/**
	 * @var boolean
	 */
	public $border;

	/**
	 * @var array
	 */
	public $childEls;

	/**
	 * @var string
	 */
	public $cls;

	/**
	 * @var string
	 */
	public $componentCls;

	/**
	 * @var array
	 */
	public $data;

	/**
	 * @var boolean
	 */
	public $disabled;

	/**
	 * @var string
	 */
	public $disabledCls;

	/**
	 * @var boolean
	 */
	public $draggable;

	/**
	 * @var boolean
	 */
	public $frame;

	/**
	 * @var integer
	 */
	public $height;

	/**
	 * @var boolean
	 */
	public $hidden;

	/**
	 * @var string/array
	 */
	public $html;

	/**
	 * @var string
	 */
	public $id;

	/**
	 * @var string
	 */
	public $itemId;

	/**
	 * @var array
	 */
	protected $listeners;

	/**
	 * @var array
	 */
	public $loader;

	/**
	 * @var string/integer
	 */
	public $margin;

	/**
	 * @var integer
	 */
	public $maxWidth;

	/**
	 * @var integer
	 */
	public $maxHeight;

	/**
	 * @var integer
	 */
	public $minWidth;

	/**
	 * @var integer
	 */
	public $minHeight;

	/**
	 * @var string
	 */
	public $overCls;

	/**
	 * @var string/integer
	 */
	public $padding;

	/**
	 * @var array
	 */
	public $plugins;

	/**
	 * @var array
	 */
	public $renderData;

	/**
	 * @var string
	 */
	public $renderTo;

	/**
	 * @var array
	 */
	public $renderTpl;

	/**
	 * @var boolean
	 */
	public $shrinkWrap;

	/**
	 * @var string
	 */
	public $style;

	/**
	 * @var string/array
	 */
	public $tpl;

	/**
	 * @var integer
	 */
	public $width;

	/**
	 * @var string
	 */
	public $xtype;

	/**
	 * @var float
	 */
	public $flex;

	public function __construct($config = array())
	{
		$this->_notExt[] = 'altXtype';
		$this->addMixin('stateful-mixin', new ExtStateful());
		parent::__construct($config);
		if (!is_null($this->altXtype))
			$this->xtype = $this->altXtype;
	}

	public function setAltXtype($value)
	{
		$this->altXtype = $value;
	}

	public function initComponent()
	{
		parent::initComponent();
		if (is_null($this->plugins))
			$this->plugins = [];
	}

	public function setListeners(array $value)
	{
		$this->listeners = $value;
	}

	public function getListeners()
	{
		return $this->listeners;
	}

	public function setPlugins(array $value)
	{
		if (is_null($this->plugins))
			$this->plugins = [];

		foreach ($value as $plugin)
		{
			if ($plugin instanceof ExtAbstractPlugin)
				$_p = $plugin;
			else
				$_p = Ext::createCmp($plugin['type'], $plugin);
			$this->plugins[] = $_p;
		}
	}

	public function getPlugins()
	{
		return $this->plugins;
	}
}

