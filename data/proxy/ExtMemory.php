<?php
/**
 * Description of ExtMemory
 *
 * @see http://docs.sencha.com/extjs/4.2.1/#!/api/Ext.data.proxy.Memory
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 19.06.2013
 */

namespace dionici\extjs4\data\proxy;

class ExtMemory extends ExtProxy
{
	/**
	 * @var array
	 */
	public $data;

	/**
	 * @var boolean
	 */
	public $enablePaging;

	public function initComponent()
	{
		parent::initComponent();
		$this->cmpClass = 'Ext.data.writer.Writer';
		$this->type     = 'memory';
	}

}
