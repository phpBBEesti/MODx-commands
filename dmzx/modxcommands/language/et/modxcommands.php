<?php
/**
* Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
*
* @package MODX commands
* @author dmzx (www.dmzx-web.net)
* @copyright (c) 2014 by dmzx (www.dmzx-web.net)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
			'MODX_FIND'				 => 'Leia',
			'MODX_ADD_AFTER'			=> 'Lisa pärast',
			'MODX_ADD_BEFORE'			=> 'Lisa enne',
			'MODX_REPLACE_WITH'		 => 'Asenda',
			'MODX_DELETE'				=> 'Kustuta',
			'MODX_IN_LINE_FIND'		 => 'Otsi rida',
			'MODX_IN_LINE_ADD_AFTER'	=> 'Peale seda järgmisele reale lisa',
			'MODX_IN_LINE_ADD_BEFORE'	=> 'Enne seda rida lisa',
			'MODX_IN_LINE_REPLACE_WITH' => 'Asenda rida',
			'MODX_CMD'					=> 'MODx käsk',
			'BBCODE21_FIND'			 => '[b]Leia[/b] [i][size=85]See võib olla osaline leid, mitte kogu rida[/size][/i]',
			'BBCODE21_AFTER'			=> '[b][color=#008000]Lisa pärast[/color][/b] [i][size=85]Lisage need read uuele tühjale reale pärast seda, kui olete leidnud eelmise rea(d)[/size][/i]',
			'BBCODE21_BEFORE'			=> '[b][color=#BF0080]Lisa enne[/color][/b] [i][size=85]Lisage need read uuele tühjale reale enne eelmist rida(de)[/size][/i]',
			'BBCODE21_REPLACE'			=> '[b][color=#BF0000]Asenda[/b][/color] [i][size=85]Asenda eelmised read järgmisega[/size][/i]',
			'BBCODE21_DELETE'			=> '[b][color=#FF0000]Kustuta[/b][/color] [i][size=85]Eemalda eelmised read[/size][/i]',
			'BBCODE21_INFIND'			=> '[b][color=#BF0080]Otsi rida[/b][/color] [i][size=85]See on rida toimingute osaline vaste[/size][/i]',
			'BBCODE21_INAFTER'			=> '[b][color=#BF0080]Peale seda järgmisele reale lisa[/b][/color]',
			'BBCODE21_INBEFORE'		 => '[b][color=#BF0080]Enne seda rida lisa[/b][/color]',
			'BBCODE21_INREPLACE'		=> '[b][color=#BF0080]Asenda rida[/b][/color]',

));
