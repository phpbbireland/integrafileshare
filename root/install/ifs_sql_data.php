<?php
if (!defined('UMIL_AUTO')) // keep mpv happy
{
    exit;
}
if (!defined('IN_PHPBB')) // keep mpv happy
{
    exit;
}

$ifs_auth_table = 'phpbb_ifs_auth';
$ifs_auth_array = array();
/*
$ifs_auth_array[] = array(
    'group_id'          => '0',
    'cat_id'            => '0',
    'auth_view'         => '0',
    'auth_read'         => '0',
    'auth_view_file'    => '0',
    'auth_edit_file'    => '0',
    'auth_delete_file'  => '0',
    'auth_upload'       => '0',
    'auth_download'     => '0',
    'auth_rate'         => '0',
    'auth_email'        => '0',
    'auth_v_comment'    => '0',
    'auth_p_comment'    => '0',
    'auth_e_comment'    => '0',
    'auth_d_comment'    => '0',
    'auth_mod'          => '0',
    'auth_search'       => '1',
    'auth_stats'        => '1',
    'auth_toplist'      => '1',
    'auth_viewall'      => '1',
);
*/


$ifs_categories_table = 'phpbb_ifs_categories';
$ifs_categories_array = array();
/*
$ifs_categories_array[] = array(
    'cat_id'              => '1',
    'cat_name'            => 'Test',
    'cat_desc'            => 'Test',
    'cat_parent'          => '0',
    'cat_parents_data'    => '',
    'cat_order'           => '1',
    'cat_allow_file'      => '1',
    'cat_allow_ratings'   => '1',
    'cat_allow_comments'  => '1',
    'cat_files'           => '0',
    'cat_last_file_id'    => '0',
    'cat_last_file_name'  => 'test',
    'cat_last_file_time'  => '0',
    'auth_view'           => '1',
    'auth_read'           => '1',
    'auth_view_file'      => '1',
    'auth_edit_file'      => '1',
    'auth_delete_file'    => '1',
    'auth_upload'         => '1',
    'auth_download'       => '1',
    'auth_rate'           => '1',
    'auth_email'          => '1',
    'auth_v_comment'      => '1',
    'auth_p_comment'      => '1',
    'auth_e_comment'      => '1',
    'auth_d_comment'      => '1',
);
*/

$ifs_comments_table = 'phpbb_ifs_comments';
$ifs_comments_array = array();
/*
$ifs_comments_array[] = array(
  'comments_id'         => '0',
  'file_id'             => '0',
  'comments_text'       => '0',
  'comments_title'      => '0',
  'comments_time'       => '0',
  'comment_bbcode_uid'  => '0',
  'poster_id'           => '0',
);
*/

$ifs_config_table = 'phpbb_ifs_config';
$ifs_config_array = array();

$ifs_config_array[] = array(
    'config_name'    => '',
    'config_value'   => ''
);
$ifs_config_array[] = array(
    'config_name'    => 'allow_bbcode',
    'config_value'   => '1',
);
$ifs_config_array[] = array(
    'config_name'    => 'allow_comment_images',
    'config_value'   => '1',
);
$ifs_config_array[] = array(
    'config_name'    => 'allow_comment_links',
    'config_value'   => '1',
);
$ifs_config_array[] = array(
    'config_name'    => 'allow_html',
    'config_value'   => '0',
);
$ifs_config_array[] = array(
    'config_name'    => 'allow_smilies',
    'config_value'   => '1',
);
$ifs_config_array[] = array(
    'config_name'    => 'auth_search',
    'config_value'   => '0',
);
$ifs_config_array[] = array(
    'config_name'    => 'auth_stats',
    'config_value'   => '1',
);
$_config_array[] = array(
    'config_name'    => 'auth_toplist',
    'config_value'   => '1',
);
$ifs_config_array[] = array(
    'config_name'    => 'auth_viewall',
    'config_value'   => '0',
);
$ifs_config_array[] = array(
    'config_name'    => 'forbidden_extensions',
    'config_value'   => '0',
);
$ifs_config_array[] = array(
    'config_name'    => 'php, php3, php4, phtml, pl, asp, aspx, cgi',
    'config_value'   => '400',
);
$ifs_config_array[] = array(
    'config_name'    => 'hotlink_allowed',
    'config_value'   => '0',
);
$ifs_config_array[] = array(
    'config_name'    => 'hotlink_prevent',
    'config_value'   => '1',
);
$ifs_config_array[] = array(
    'config_name'    => 'max_comment_chars',
    'config_value'   => '5000',
);
$ifs_config_array[] = array(
    'config_name'    => 'max_file_size',
    'config_value'   => '262144',
);
$ifs_config_array[] = array(
    'config_name'    => 'no_comment_image_message',
    'config_value'   => '5',
);
$ifs_config_array[] = array(
    'config_name'    => '[NO_IMAGE_PLEASE]',
    'config_value'   => '',
);
$ifs_config_array[] = array(
    'config_name'    => 'no_comment_link_message',
    'config_value'   => '[NO_LINKS_PLEASE]',
);
$ifs_config_array[] = array(
    'config_name'    => 'pm_notify',
    'config_value'   => '0',
);
$ifs_config_array[] = array(
    'config_name'    => 'screenshots_dir',
    'config_value'   => 'ifs/images/ss/',
);
$ifs_config_array[] = array(
    'config_name'    => 'settings_dbdescription',
    'config_value'   => '',
);
$ifs_config_array[] = array(
    'config_name'    => 'settings_dbname',
    'config_value'   => '[DOWNLOAD_DATABASE]',
);
$ifs_config_array[] = array(
    'config_name'    => 'settings_disable',
    'config_value'   => '0',
);
$ifs_config_array[] = array(
    'config_name'    => 'settings_file_page',
    'config_value'   => '20',
);
$ifs_config_array[] = array(
    'config_name'    => 'settings_newdays',
    'config_value'   => '7',
);
$ifs_config_array[] = array(
    'config_name'    => 'settings_stats',
    'config_value'   => '',
);
$ifs_config_array[] = array(
    'config_name'    => 'settings_topnumber',
    'config_value'   => '10',
);
$ifs_config_array[] = array(
    'config_name'    => 'settings_viewall',
    'config_value'   => '1',
);
$ifs_config_array[] = array(
    'config_name'    => 'sort_method',
    'config_value'   => 'file_time',
);
$ifs_config_array[] = array(
    'config_name'    => 'sort_order',
    'config_value'   => 'DESC',
);
$ifs_config_array[] = array(
    'config_name'    => 'tpl_php',
    'config_value'   => '0',
);
$ifs_config_array[] = array(
    'config_name'    => 'upload_dir',
    'config_value'   => 'ifs/uploads/',
);
$ifs_config_array[] = array(
    'config_name'    => 'validator',
    'config_value'   => 'validator_mod',
);

$ifs_custom_table = 'phpbb_ifs_custom';
$ifs_custom_array = array();
/*
$ifs_custom_array[] = array(
    'custom_id'           => '0',
    'custom_name'         => '',
    'custom_description'  => '',
    'data'                => '',
    'field_order'         => '0',
    'field_type'          => '0',
    'regex'               => '',
);
*/

$ifs_customdata_table = 'phpbb_ifs_customdata';
$ifs_customdata_array = array();
/*
$ifs_customdata_array[] = array(
    'customdata_file'    => '0',
    'customdata_custom'  => '0',
    'data'               => '',
);
*/

$ifs_download_table = 'phpbb_ifs_download';
$ifs_download_array = array();
/*
$ifs_download_array[] = array(
    'file_id'             => '0',
    'user_id'             => '0',
    'downloader_ip'       => '',
    'downloader_os'       => '',
    'downloader_browser'  => '',
    'browser_version'     => '',
);
*/

$ifs_files_table = 'phpbb_ifs_files';
$ifs_files_array = array();
/*
$ifs_files_array[] = array(
    'file_id'           => '0',
    'user_id'           => '0',
    'poster_ip'         => '',
    'file_name'         => '',
    'file_size'         => '0',
    'unique_name'       => '',
    'real_name'         => '',
    'file_dir'          => '',
    'file_desc'         => '',
    'file_creator'      => '',
    'file_version'      => '',
    'file_longdesc'     => '',
    'file_ssurl'        => '',
    'file_sshot_link'   => '0',
    'file_dlurl'        => '',
    'file_time'         => '0',
    'file_update_time'  => '0',
    'file_catid'        => '0',
    'file_posticon'     => '',
    'file_license'      => '0',
    'file_dls'          => '0',
    'file_last'         => '0',
    'file_pin'          => '0',
    'file_docsurl'      => '',
    'file_approved'     => '1',
    'file_broken'       => '0',
);
*/

$ifs_license_table = 'phpbb_ifs_license';
$ifs_license_array = array();
/*
$ifs_license_array[] = array(
    'license_id'    => '0',
    'license_name'  => '',
    'license_text'  => '',
);
*/

$ifs_mirrors_table = 'phpbb_ifs_mirrors';
$ifs_mirrors_array = array();
/*
$ifs_mirrors_array[] = array(
    'mirror_id'        => '0',
    'file_id'          => '0',
    'unique_name'      => '',
    'file_dir'         => '',
    'file_dlurl'       => '',
    'mirror_location'  => '',
);
*/
// Finished tables and data ...
?>