<?php

function terravan_styles() {
    wp_enqueue_style(
        'terravan-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}

add_action( 'wp_enqueue_scripts', 'terravan_styles' );

if ( ! function_exists( 'terravan_setup' ) ) {
    function terravan_setup() {
        add_theme_support( 'wp-block-styles' );
        add_editor_style( 'style.css' );
    }
}


function terravan_setup_notice() {

    $notice_html = '
    <div style="display:flex;gap:20px;padding:20px;align-items:flex-start;">
        <div>
            <h2 style="margin:0 0 10px;font-size:24px;">
                ' . __( 'Unlock more with Terravan PRO', 'terravan' ) . '
            </h2>

            <p style="margin:0 0 12px;">
                ' . __( 'Terravan Free gives you a clean and lightweight base. Upgrade to Terravan PRO to build faster, customize more and deliver truly professional websites.', 'terravan' ) . '
            </p>

            <ul style="margin:0 0 16px;padding-left:18px;">
                <li>' . __( 'More layouts and starter patterns', 'terravan' ) . '</li>
                <li>' . __( 'Advanced customization options', 'terravan' ) . '</li>
                <li>' . __( 'Premium blocks built for performance', 'terravan' ) . '</li>
                <li>' . __( 'Ideal for freelancers and agencies', 'terravan' ) . '</li>
            </ul>

            <div style="display:flex;gap:10px;flex-wrap:wrap;">
                <a href="https://www.roarwp.com/themes/terravan-pro/"
                   class="button button-primary"
                   target="_blank" rel="noopener noreferrer">
                    ' . __( 'Upgrade to Terravan PRO', 'terravan' ) . '
                </a>

                <a href="https://www.roarwp.com/themes/preview/terravan-pro/"
                   class="button button-secondary"
                   target="_blank" rel="noopener noreferrer">
                    ' . __( 'View Live Demo', 'terravan' ) . '
                </a>

                <button type="button"
                        class="button button-secondary terravan-close-notice">
                    ' . __( 'Close', 'terravan' ) . '
                </button>
            </div>
        </div>
    </div>';

    echo '<div class="notice notice-success is-dismissible">' . wp_kses_post( $notice_html ) . '</div>';
}
add_action( 'admin_notices', 'terravan_setup_notice' );

function terravan_notice_close_script() {
    ?>
    <script>
        document.addEventListener('click', function (e) {
            if (e.target.classList.contains('terravan-close-notice')) {
                const notice = e.target.closest('.notice');
                if (notice) notice.remove();
            }
        });
    </script>
    <?php
}
add_action( 'admin_footer', 'terravan_notice_close_script' );



function terravan_notice_script() {
if ( ! wp_script_is( 'jquery', 'done' ) ) {
wp_enqueue_script( 'jquery' );
}
wp_enqueue_script( 'terravan-notice-script', get_template_directory_uri() . '/assets/js/notice.js', array( 'jquery'
), '', true );
}

add_action( 'admin_enqueue_scripts', 'terravan_notice_script' );



function terravan_dismiss_notice() {
update_option( 'terravan_setup_notice_dismissed', true );
wp_die();
}

add_action( 'wp_ajax_terravan_dismiss_notice', 'terravan_dismiss_notice' );