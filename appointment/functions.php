<?php

/**
 * Appointment Theme - Main functions.php
 * Freemius integration - loads free or pro version based on license
 */
// Freemius Mock class for when Freemius is not available (e.g., child themes, non-Appointment themes)
if ( !class_exists( 'Appointment_Freemius_Mock' ) ) {
    class Appointment_Freemius_Mock {
        public function can_use_premium_code() {
            return false;
        }

        public function is_premium() {
            return false;
        }

        public function is_plan( $plan ) {
            return false;
        }

        public function is_free_plan() {
            return true;
        }

    }

}
if ( !function_exists( 'ap_fs' ) ) {
    // Create a helper function for easy SDK access.
    function ap_fs() {
        global $ap_fs;
        if ( !isset( $ap_fs ) ) {
            $appointment_theme = wp_get_theme();
            $allowed_themes = array(
                'Appointment',
                'Appointment child',
                'Appointment Child',
                'Appointment Pro',
                'Appointment Pro child',
                'Appointment Pro Child'
            );
            if ( in_array( $appointment_theme->get( 'Name' ), $allowed_themes ) ) {
                // Include Freemius SDK.
                if ( file_exists( dirname( __FILE__ ) . '/freemius/start.php' ) ) {
                    require_once dirname( __FILE__ ) . '/freemius/start.php';
                } elseif ( defined( 'WC__PLUGIN_DIR' ) && file_exists( WC__PLUGIN_DIR . 'freemius/start.php' ) ) {
                    require_once WC__PLUGIN_DIR . 'freemius/start.php';
                }
                if ( function_exists( 'fs_dynamic_init' ) ) {
                    $ap_fs = fs_dynamic_init( array(
                        'id'               => '11273',
                        'slug'             => 'appointment',
                        'premium_slug'     => 'appointment-pro',
                        'type'             => 'theme',
                        'public_key'       => 'pk_e19ffbf9b68ccfb2337d839195299',
                        'is_premium'       => false,
                        'premium_suffix'   => 'Pro',
                        'has_addons'       => false,
                        'has_paid_plans'   => true,
                        'is_org_compliant' => true,
                        'menu'             => array(
                            'slug'    => 'appointment-welcome',
                            'account' => true,
                            'support' => true,
                            'contact' => false,
                            'parent'  => array(
                                'slug' => 'themes.php',
                            ),
                        ),
                        'navigation'       => 'menu',
                        'is_live'          => true,
                    ) );
                }
            }
        }
        if ( !isset( $ap_fs ) || !is_object( $ap_fs ) ) {
            $ap_fs = new Appointment_Freemius_Mock();
        }
        return $ap_fs;
    }

    // Init Freemius.
    ap_fs();
    // Signal that SDK was initiated.
    do_action( 'ap_fs_loaded' );
}
// Load Pro or Free functions based on Freemius license
if ( ap_fs()->can_use_premium_code() ) {
    require get_template_directory() . '/pro/functions.php';
} else {
    require get_template_directory() . '/free/functions.php';
}