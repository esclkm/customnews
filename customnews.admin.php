<?php

/* ====================
  [BEGIN_COT_EXT]
  Hooks=admin.config.edit.loop
  [END_COT_EXT]
  ==================== */

/**
 * customnews for Cotonti CMF
 *
 * @version 4.00
 * @author esclkm littledev.ru
 * @copyright (с) 2011 esclkm littledev.ru
 */
defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('page', 'module');
$adminhelp = $L['news_help'];

if ($p == 'customnews' && $config_name == 'tabs' && $cfg['jquery'])
{
	$sskin = cot_tplfile('customnews.admin', 'plug', true);
	$tt = new XTemplate($sskin);

	$categories = explode("\n", str_replace("\r\n", "\n", $config_value));
	$jj = 0;
	foreach ($categories as $k => $val)
	{
		$val = explode('|', trim($val));
		if (!empty($val[0]))
		{
			$jj++;
			$tt->assign(array(
				'ADDNUM' => $jj,
				'CODE' => $val[0],
				'COUNT' => ($val[1] > 0) ? $val[1] : $cfg['plugin']['customnews']['count'],
				'PART' => empty($val[2]) ? 'all' : $val[2],
				'WHERE' => empty($val[3]) ? '' : $val[3],
				'ORDER' => empty($val[4]) ? 'page_date DESC' : $val[4],
				'CAT' => empty($val[5]) ? '' : $val[5],
			));
			$tt->parse('MAIN.ADDITIONAL');
		}
	}

	$tt->assign(array(
		'MAINCATEGORY' => cot_selectbox_structure('page', $index, 'newsmaincat'),
		'CATNUM' => $jj
	));
	$tt->parse('MAIN');

	$t->assign(array(
		'ADMIN_CONFIG_ROW_CONFIG_MORE' => $tt->text('MAIN') . '<div id="helptext">' . $config_more . '</div>'
	));

}
?>