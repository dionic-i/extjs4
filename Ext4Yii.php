<?php
/**
 * Description of Ext4Yii
 * Компонент для подключения расширения ExtJs4.
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @since 20.06.2013
 */

namespace dionici\extjs4;

use yii\base\Component;

class Ext4Yii extends Component
{
	private $_imports = array(
		'*',
		'app.*',
		'button.*',
		'container.*',

		'data.*',
		'data.proxy.*',
		'data.writer.*',
		'data.reader.*',

		'form.*',
		'form.field.*',

		'grid.*',
		'grid.column.*',
		'grid.plugin.*',
		'grid.property.*',
		'grid.feature.*',

		'menu.*',
		'panel.*',
		'toolbar.*',
		'window.*',

		'util.*',
		'state.*',

		'tree.*',

		'ux.*'
	);

	public $startAlias;

	/**
	 * Импорт файлов расширения
	 */
	private function importComponents($alias, $path)
	{
		/**
		 * @todo Дописать автоматический импорт всех директорий расширения.
		 * Пока просто импорт идёт по массиву путей
		 */
//		foreach ($this->_imports as $name)
//			Yii::import("$alias.$path.$name");
	}

	public function init()
	{
		parent::init();
//		if (empty($this->startAlias))
//			$this->startAlias = 'application';
//		$this->importComponents($this->startAlias, 'extjs4');
	}

}

