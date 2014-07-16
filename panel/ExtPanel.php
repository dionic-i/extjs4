<?php
/**
 * Description of ExtPanel
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.panel.Panel
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 19.06.2013
 */

namespace dionici\extjs4\panel;

use dionici\extjs4\Ext;
use dionici\extjs4\ExtComponent;
use dionici\extjs4\toolbar\ExtToolbar;

class ExtPanel extends ExtAbstractPanel
{
	/**
	 * @var boolean
	 */
	public $animCollapse;

	/**
	 * @var ExtToolbar
	 */
	protected $bbar;

	/**
	 * @var string
	 */
	public $buttonAlign;

	/**
	 * @var array
	 */
	protected $buttons;

	/**
	 * @var boolean
	 */
	public $closable;

	/**
	 * @var string
	 */
	public $closeAction;

	/**
	 * @var string
	 */
	public $collapseDirection;

	/**
	 * @var boolean
	 */
	public $collapseFirst;

	/**
	 * @var string
	 */
	public $collapseMode;

	/**
	 * @var boolean
	 */
	public $collapsed;

	/**
	 * @var string
	 */
	public $collapsedCls;

	/**
	 * @var boolean
	 */
	public $collapsible;

	/**
	 * @var boolean
	 */
	public $constrain;

	/**
	 * @var boolean
	 */
	public $constrainHeader;

	/**
	 * @var ExtToolbar
	 */
	protected $fbar;

	/**
	 * @var boolean
	 */
	public $floatable;

	/**
	 * @var boolean
	 */
	public $frame;

	/**
	 * @var boolean
	 */
	public $frameHeader;

	/**
	 * @var string
	 */
	public $headerPosition;

	/**
	 * @var boolean
	 */
	public $hideCollapseTool;

	/**
	 * @var string
	 */
	public $icon;

	/**
	 * @var string
	 */
	public $iconCls;

	/**
	 * @var ExtToolbar
	 */
	protected $lbar;

	/**
	 * @var boolean
	 */
	public $manageHeight;

	/**
	 * @var integer
	 */
	public $minButtonWidth;

	/**
	 * @var boolean
	 */
	public $overlapHeader;

	/**
	 * @var ExtToolbar
	 */
	protected $rbar;

	/**
	 * @var boolean
	 */
	public $simpleDrag;

	/**
	 * @var ExtToolbar
	 */
	protected $tbar;

	/**
	 * @var string
	 */
	public $title;

	/**
	 * @var string
	 */
	public $titleAlign;

	/**
	 * @var boolean
	 */
	public $titleCollapse;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.panel.Panel';
		$this->xtype    = 'panel';
		if (is_null($this->buttons))
			$this->buttons = [];
	}

	public function setButtons(array $value)
	{
		if (is_null($this->buttons))
			$this->buttons = [];

		foreach ($value as $item)
		{
			if ($item instanceof ExtComponent)
				$_item = $item;
			else
			{
				$xtype = array_key_exists('xtype', $item) ? $item['xtype'] : 'button';
				$_item = Ext::createCmp($xtype, $item);
			}

			$this->buttons[] = $_item;
		}
	}

	public function getButtons()
	{
		return $this->buttons;
	}

	protected function _setBar($propname, $item)
	{
		if (is_null($item))
			$this->$propname = NULL;
		else if ($item instanceof ExtToolbar)
			$this->$propname = $item;
		else if (is_array($item))
			$this->$propname = Ext::createCmp($item['xtype'], $item);
		else
			trigger_error('Ошибка входных данных метода _setBar');

		return $this->$propname;
	}

	public function setBbar($value)
	{
		return $this->_setBar('bbar', $value);
	}

	public function getBbar()
	{
		return $this->bbar;
	}

	public function setFbar($value)
	{
		return $this->_setBar('fbar', $value);
	}

	public function getFbar()
	{
		return $this->fbar;
	}

	public function setLbar($value)
	{
		return $this->_setBar('lbar', $value);
	}

	public function getLbar()
	{
		return $this->lbar;
	}

	public function setRbar($value)
	{
		return $this->_setBar('rbar', $value);
	}

	public function getRbar()
	{
		return $this->rbar;
	}

	public function setTbar($value)
	{
		return $this->_setBar('tbar', $value);
	}

	public function getTbar()
	{
		return $this->tbar;
	}

}
