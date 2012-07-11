<?php

/**
 * Russian Language File for the customnews Plugin
 *
 * @version 3.00
 * @author esclkm littledev.ru
 * @copyright (c) 2011-2011 esclkm littledev.ru
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Config
 */

$L['cfg_tabs'] = array('Конфигуратор шаблонов','1|2|3|4|5|6<br />
	1. Код (привязка к шаблону)<br />
	2. Количество выводимых элементов<br />
	3. Локация (all / ajax / page / index / $_GET[\'e\'])<br />
	4. Условие (page_shop_instock = \'1\') -- обязательно в формате MySQL!<br />
	5. Параметр сортировки (page_date ASC)<br />
	6. Ограничение по родителю (страниц страниц только из указанной категории и ее детей)  или incat для поиска в текущем родителе<br />
	Для применения вставьте тег {PHP.CNS.КОД}
	Для Использования произвольных шаблонов, необходимо создать файл формата customnews.код.tpl');
$L['cfg_count'] = array('Количество элементов по умолчанию');
$L['Where'] = 'Условие запроса';
$L['Order'] = 'Сортировка';
$L['incat'] = 'Внутри текущей категории';
$L['Template']='Шаблон';
$L['Code_help']='Индивидуальный идентификатор колонки новостей';
$L['Order_help']='Сортировка колонки новостей, по умолчанию: page_date DESC';
$L['Where_help']='Дополнительный фильтр, где {$sys_now} - текущее время';
$L['Part_help']='Локация (all / ajax / page / index / $_GET[\'e\']), в которой работает данная колонка новостей';

$L['Newscat_exists']='Данный код уже существует или пустой. Задайте другой';

?>