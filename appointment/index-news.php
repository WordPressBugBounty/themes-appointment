<?php
/**
 * Wrapper for index-news.php
 * Pro version has extended news section, free version is simpler.
 */
if ( function_exists( 'ap_fs' ) && ap_fs()->can_use_premium_code() ) {
    require get_template_directory() . '/pro/index-news.php';
} else {
    require get_template_directory() . '/free/index-news.php';
}