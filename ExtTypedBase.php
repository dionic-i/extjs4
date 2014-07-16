<?php
/**
 * Description of ExtTypedBase
 * АБстрактный класс компонентов, построение которых идёт по типу type (Proxy, Field, Store)
 *
 * @author Ilya Petrushenko <ilya.petrushenko@yandex.ru>
 * @version 0.1
 * @since 18.06.2013
 */

namespace dionici\extjs4;

abstract class ExtTypedBase extends ExtBase
{
	/**
	 * ExtJs type
	 * @var string
	 */
	public $type;

}

