<?php
/**
 * Wrapper for home.php
 * Pro theme mein home.php hai (blog page), free mein nahi.
 * Pro license hone par pro/home.php load hogi, warna free/index.php.
 */
if ( function_exists( 'ap_fs' ) && ap_fs()->can_use_premium_code() ) {
    require get_template_directory() . '/pro/home.php';
} else {
    require get_template_directory() . '/free/index.php';
}