<?php
/**
 * Description of ExtAjax
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.proxy.Ajax
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 18.06.2013
 */

class ExtAjax extends ExtServer
{
	/**
	 * @var boolean
	 */
	public $binary;

	/**
	 * @var array
	 */
	public $headers;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.data.proxy.Ajax';
		$this->type     = 'ajax';
	}

}
