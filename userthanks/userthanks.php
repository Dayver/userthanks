<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=users.details.tags,ajax
Tags=users.details.tpl:{USERS_DETAILS_USERTHANKS}
[END_COT_EXT]
==================== */
defined('COT_CODE') or die('Wrong URL.');

if (cot_plugin_active('thanks'))
{
	require_once cot_langfile('userthanks');
	if (cot_module_active('page'))  require_once cot_incfile('page', 'module');
	require_once cot_incfile('thanks', 'plug');

	$work_now = $t->hasTag('USERS_DETAILS_USERTHANKS');
	if ($work_now || COT_AJAX)
	{
		$userthanks = new XTemplate(cot_tplfile('userthanks', 'plug'));


		$userthanks->parse("USERTHANKS");
		$user_thanks = $userthanks->text("USERTHANKS");

		if (COT_AJAX)
		{
			cot_sendheaders();
			echo $user_thanks;
			exit();
		}
		else
		{
			$t->assign("USERS_DETAILS_USERTHANKS", $user_thanks);
		}
	}
}
