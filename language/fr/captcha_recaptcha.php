<?php
/**
* This file is part of French (Formal Honorifics) phpBB Translation.
* Copyright (C) 2010 phpBB.fr
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; version 2 of the License.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along
* with this program; if not, write to the Free Software Foundation, Inc.,
* 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*
* recaptcha [French (Formal Honorifics)]
*
* @package   language
* @author    Maël Soucaze <maelsoucaze@phpbb.fr> (Maël Soucaze) http://www.phpbb.fr/
* @copyright 2009 phpBB Group
* @license   http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License
* @version   $Id: captcha_recaptcha.php 9933 2009-08-06 09:12:21Z marshalrusty $
*/

/**
* DO NOT CHANGE
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

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'fr',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Vous devez créer un compte sur <a href="http://recaptcha.net">reCaptcha.net</a> afin de pouvoir utiliser reCaptcha.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Le code de confirmation visuelle que vous avez saisi est incorrect',

	'RECAPTCHA_PUBLIC'				=> 'Clé reCaptcha publique',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Votre clé reCaptcha publique. Vous pouvez obtenir des clés sur <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Clé reCaptcha privée',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Votre clé reCaptcha privée. Vous pouvez obtenir des clés sur <a href="http://recaptcha.net">reCaptcha.net</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Afin d’empêcher les actions automatisées, nous vous demandons de bien vouloir saisir les deux mots affichés dans le champ de texte ci-dessous.',
));

?>