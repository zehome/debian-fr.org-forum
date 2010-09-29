<?php
/**
* phpBB_SEO Class
* www.phpBB-SEO.com
* @package Advanced phpBB3 SEO mod Rewrite
*/
if (!defined('IN_PHPBB')) {
	exit;
}
$this->cache_config['settings'] = array ( 'url_rewrite' => true, 'modrtype' => 3, 'sql_rewrite' => true, 'profile_inj' => true, 'profile_vfolder' => true, 'profile_noids' => false, 'rewrite_usermsg' => false, 'rewrite_files' => true, 'rem_sid' => true, 'rem_hilit' => true, 'rem_small_words' => false, 'virtual_folder' => false, 'virtual_root' => false, 'cache_layer' => true, 'rem_ids' => true, 'copyrights' => array ( 'img' => false, 'txt' => 'SEO', 'title' => 'SEO', ), 'no_dupe' => array ( 'on' => true, ), 'zero_dupe' => array ( 'on' => true, 'strict' => false, 'post_redir' => 'all', ), );
$this->cache_config['forum'] = array ( 11 => 'debian-org', 2 => 'administration', 15 => 'moderation', 7 => 'les-annonces', 5 => 'forum-interne', 12 => 'aide', 3 => 'support-debian', 8 => 'trucs-astuces', 13 => 'divers', 1 => 'pause-cafe', 9 => 'programmation', 10 => 'poubelle', );
?>