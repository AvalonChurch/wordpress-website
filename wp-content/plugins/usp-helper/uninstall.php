<?php // delete plugin settings

if (!defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN')) exit();

delete_option('usp_helper_settings');
