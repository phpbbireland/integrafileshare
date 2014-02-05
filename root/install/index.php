<?php
/**
*
* @author michaelo phpbbireland@gmail.com - http://www.phpbbireland.com
*
* @package IFS (IntegraFileShare)
* @version 1.0.0
* @copyright (c) 2014 Michael O'Toole (phpbbireland.com)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);

// correct root for install using root/install/index.php //
$phpbb_root_path = './../';

$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

// The name of the mod to be displayed during installation.
$mod_name = 'IFS (Integra File Share)';

$version_config_name = 'ifs_version';
$language_file = 'install_ifs_umil';
$logo_img = 'install/ifs_install.png';

include($phpbb_root_path . 'install/ifs_sql_data.' . $phpEx);

$versions = array(

	// Version 1.0.0
	'1.0.0' => array(
		'permission_add' => array(
			array('a_ifs', 1),
			array('u_ifs', 1),
		),

		'permission_set' => array(
			array('ROLE_ADMIN_FULL', 'a_ifs'),
		),

		'config_add' => array(
			array('ifs_enabled', 1),
			array('ifs_build', '312-001'),
		),

		'table_add' => array(

			array('phpbb_ifs_auth', array(
					'COLUMNS' => array(
						'group_id'          => array('UINT', NULL, 'auto_increment'),
						'cat_id'            => array('UINT', '0'),
						'auth_view'         => array('BOOL', '1'),
						'auth_read'         => array('BOOL', '1'),
						'auth_view_file'    => array('BOOL', '1'),
						'auth_edit_file'    => array('BOOL', '1'),
						'auth_delete_file'  => array('BOOL', '1'),
						'auth_upload'       => array('BOOL', '1'),
						'auth_download'     => array('BOOL', '1'),
						'auth_rate'         => array('BOOL', '1'),
						'auth_email'        => array('BOOL', '1'),
						'auth_v_comment'    => array('BOOL', '1'),
						'auth_p_comment'    => array('BOOL', '1'),
						'auth_e_comment'    => array('BOOL', '1'),
						'auth_d_comment'    => array('BOOL', '1'),
						'auth_mod'          => array('BOOL', '1'),
						'auth_search'       => array('BOOL', '1'),
						'auth_stats'        => array('BOOL', '1'),
						'auth_toplist'      => array('BOOL', '1'),
						'auth_viewall'      => array('BOOL', '1'),
					),
					'PRIMARY_KEY'    => 'group_id',
					'KEYS'           => array(
						'cat_id'     => array('INDEX', 'cat_id'),
					),
				),
			),

			array('phpbb_ifs_categories', array(
					'COLUMNS'    => array(
						'cat_id'              => array('UINT', NULL, 'auto_increment'),
						'cat_parent'          => array('UINT', '0'),
						'cat_name'            => array('VCHAR', ''),
						'cat_desc'            => array('VCHAR', ''),
						'cat_parents_data'    => array('VCHAR', ''),
						'cat_order'           => array('UINT', '0'),
						'cat_files'           => array('INT:8', '0'),
						'cat_last_file_id'    => array('UINT', '0'),
						'cat_last_file_time'  => array('UINT:50', '0'),
						'cat_last_file_name'  => array('VCHAR', ''),
						'cat_allow_file'      => array('BOOL', '0'),
						'cat_allow_ratings'   => array('BOOL', '0'),
						'cat_allow_comments'  => array('BOOL', '0'),
						'auth_view'           => array('BOOL', '0'),
						'auth_read'           => array('BOOL', '0'),
						'auth_view_file'      => array('BOOL', '0'),
						'auth_edit_file'      => array('BOOL', '0'),
						'auth_delete_file'    => array('BOOL', '0'),
						'auth_upload'         => array('BOOL', '0'),
						'auth_download'       => array('BOOL', '0'),
						'auth_rate'           => array('BOOL', '0'),
						'auth_email'          => array('BOOL', '0'),
						'auth_v_comment'      => array('BOOL', '0'),
						'auth_p_comment'      => array('BOOL', '0'),
						'auth_e_comment'      => array('BOOL', '0'),
						'auth_d_comment'      => array('BOOL', '0'),
					),
					'PRIMARY_KEY'    => 'cat_id',
				),
			),

			array('phpbb_ifs_comments', array(
					'COLUMNS'	=> array(
						'comments_id'         => array('UINT', NULL, 'auto_increment'),
						'file_id'             => array('UINT:10', '0'),
						'comments_text'       => array('VCHAR', ''),
						'comments_title'      => array('VCHAR', ''),
						'comments_time'       => array('UINT:50', '0'),
						'comment_bbcode_uid'  => array('VCHAR:10', ''),
						'poster_id'           => array('UINT', '0'),
					),
					'PRIMARY_KEY'    => 'comments_id',
					'KEYS'           => array(
						'comment_bbcode_uid'    => array('INDEX', 'comment_bbcode_uid'),
					),
				),
			),

			array('phpbb_ifs_config', array(
					'COLUMNS'	=> array(
						'config_name'   => array('VCHAR', ''),
						'config_value'  => array('VCHAR', ''),
					),
					'PRIMARY_KEY'    => 'config_name',
				),
			),

			array('phpbb_ifs_custom', array(
				'COLUMNS'	=> array(
					'custom_id'           => array('UINT', NULL, 'auto_increment'),
					'custom_name'         => array('VCHAR', ''),
					'custom_description'  => array('VCHAR', ''),
					'data'                => array('VCHAR', ''),
					'field_order'         => array('UINT:20', '0'),
					'field_type'          => array('TINT:2', '0'),
					'regex'               => array('VCHAR', ''),
					),
					'PRIMARY_KEY'  => 'custom_id',
				),
			),

			array('phpbb_ifs_customdata', array(
				'COLUMNS'	=> array(
					'customdata_file'    => array('UINT:50', '0'),
					'customdata_custom'  => array('UINT:50', '0'),
					'data'               => array('VCHAR', ''),
					),
				),
			),

			array('phpbb_ifs_download', array(
				'COLUMNS'  => array(
					'file_id'             => array('UINT', '0'),
					'user_id'             => array('UINT', '0'),
					'downloader_ip'       => array('VCHAR:16', ''),
					'downloader_os'       => array('VCHAR', ''),
					'downloader_browser'  => array('VCHAR', ''),
					'browser_version'     => array('VCHAR', ''),
					),
				),
			),

			array('phpbb_ifs_files', array(
				'COLUMNS'	=> array(
					'file_id'           => array('UINT:10', NULL, 'auto_increment'),
					'user_id'           => array('UINT', '0'),
					'poster_ip'         => array('VCHAR:16', ''),
					'file_name'         => array('VCHAR', ''),
					'file_size'         => array('UINT:20', '0'),
					'unique_name'       => array('VCHAR:100', ''),
					'real_name'         => array('VCHAR:100', ''),
					'file_dir'          => array('VCHAR', ''),
					'file_desc'         => array('VCHAR', ''),
					'file_creator'      => array('VCHAR:100', ''),
					'file_version'      => array('VCHAR', ''),
					'file_longdesc'     => array('VCHAR', ''),
					'file_ssurl'        => array('VCHAR', ''),
					'file_sshot_link'   => array('TINT:2', '0'),
					'file_dlurl'        => array('VCHAR', ''),
					'file_time'         => array('UINT:50', '0'),
					'file_update_time'  => array('UINT:50', '0'),
					'file_catid'        => array('UINT:10', '0'),
					'file_posticon'     => array('VCHAR', ''),
					'file_license'      => array('UINT', '0'),
					'file_dls'          => array('UINT:10', '0'),
					'file_last'         => array('UINT:50', '0'),
					'file_pin'          => array('BOOL', '0'),
					'file_docsurl'      => array('VCHAR', ''),
					'file_approved'     => array('BOOL', '0'),
					'file_broken'       => array('BOOL', '0'),
					),
					'PRIMARY_KEY'  => 'file_id',
				),
			),

			array('phpbb_ifs_license', array(
				'COLUMNS'	=> array(
					'license_id'    => array('UINT', '0'),
					'license_name'  => array('VCHAR', ''),
					'license_text'  => array('STEXT', ''),
				),
				'PRIMARY_KEY'  => 'license_id',
				),
			),

			array('phpbb_ifs_mirrors', array(
				'COLUMNS'	=> array(
					'mirror_id'        => array('UINT:10', NULL, 'auto_increment'),
					'file_id'          => array('UINT:10', '0'),
					'unique_name'      => array('VCHAR', ''),
					'file_dir'         => array('VCHAR', ''),
					'file_dlurl'       => array('VCHAR', ''),
					'mirror_location'  => array('VCHAR', ''),
				),
					'PRIMARY_KEY'  => 'mirror_id',
					'KEYS'         => array(
						'file_id'  => array('INDEX', 'file_id'),
					),
				),
			),
		),

		'module_add' => array(
			//array('acp', '0', 'ACP_CAT_PORTAL'),
			array('acp', 'ACP_CAT_PORTAL', 'ACP_IFS'),

			array('acp', 'ACP_IFS',	array(
					'module_basename' => 'ifs',
				),
			),
			array('acp', 'ACP_IFS',	array(
					'module_basename' => 'ifs_config',
				),
			),
			array('acp', 'ACP_IFS',	array(
					'module_basename' => 'ifs_categories',
				),
			),
			array('acp', 'ACP_IFS',	array(
					'module_basename' => 'ifs_permissions',
				),
			),
			array('acp', 'ACP_IFS',	array(
					'module_basename' => 'ifs_custom_fields',
				),
			),
			array('acp', 'ACP_IFS',	array(
					'module_basename' => 'ifs_files',
				),
			),
			array('acp', 'ACP_IFS',	array(
					'module_basename' => 'ifs_licenses',
				),
			),
			array('acp', 'ACP_IFS',	array(
					'module_basename' => 'ifs_mirrors',
				),
			),

			array('ucp', '0', 'UCP_IFS_USER'),
			array('ucp', 'UCP_IFS_USER', array(
					'module_basename'	=> 'ifs',
					'modes'				=> array('info'),
					'module_auth'		=> 'u_ifs',
				),
			),
		),

		'table_insert' => array(
			array($ifs_auth_table,        $ifs_auth_array),
			array($ifs_categories_table,  $ifs_categories_array),
			array($ifs_comments_table,    $ifs_comments_array),
			array($ifs_config_table,      $ifs_config_array),
			array($ifs_custom_table,      $ifs_custom_array),
			array($ifs_customdata_table,  $ifs_customdata_array),
			array($ifs_download_table,    $ifs_download_array),
			array($ifs_files_table,       $ifs_files_array),
			array($ifs_license_table,     $ifs_license_array),
			array($ifs_mirrors_table,     $ifs_mirrors_array),
		),

		// purge the cache
		'cache_purge'  =>  array('', 'imageset', 'template', 'theme'),
	),

);//versions

include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>