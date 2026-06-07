<?php
/**
 * Wrapper for index-banner.php
 * Pro version has different banner, free version is simpler.
 */
if ( function_exists( 'ap_fs' ) && ap_fs()->can_use_premium_code() ) {
    require get_template_directory() . '/pro/index-banner.php';
} else {
    require get_template_directory() . '/free/index-banner.php';
}