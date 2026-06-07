<?php
/**
 * Wrapper for header.php
 * Loads pro version if premium code is available, otherwise loads free version.
 */
if ( function_exists( 'ap_fs' ) && ap_fs()->can_use_premium_code() ) {
    require get_template_directory() . '/pro/header.php';
} else {
    require get_template_directory() . '/free/header.php';
}