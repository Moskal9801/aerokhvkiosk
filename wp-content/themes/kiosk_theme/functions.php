<?php
	add_action( 'wp_enqueue_scripts', function () {
		wp_enqueue_style( 'main-style', get_stylesheet_uri(), [], filemtime( get_stylesheet_directory() . '/style.css' ) );
		wp_enqueue_script( 'main-script', get_template_directory_uri() . '/main.js', [ 'jquery' ], filemtime( get_stylesheet_directory() . '/main.js' ) );
	} );

	add_action( 'wp_head', function () {
		echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
	} );

	add_theme_support( 'post-thumbnails' );

    add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );

    function delete_intermediate_image_sizes( $sizes ){

        return array_diff( $sizes, [
            'large',
            'medium_large',
            'medium',
            'post-thumbnail',
            '1536x1536',
            '2048x2048',
        ] );
    }

	add_action( 'admin_head', function () {
		wp_enqueue_script( 'cat-script', get_template_directory_uri() . '/cat.js' );
	} );

	add_filter( 'login_headerurl', function () {
		return 'https://01cat.ru';
	} );

	add_action( 'login_header', function () { ?>
        <style>
			#login h1 a {
				background: url("logo.png") center top no-repeat !important;
				width:      111px !important;
				height:     180px !important;
			}
        </style>
	<?php } );

	add_filter( 'admin_footer_text', function () {
		return '<b>Сделано:</b>
			<a href="https://01cat.ru/" target="_blank">Двоичный кот</a>
			<br>
			<b>Техническая поддержка:</b> тел. <a href="tel:+79145416354">+7 (914) 541-63-54</a>, email: <a href="mailto:hello@01cat.ru">hello@01cat.ru</a>';
	} );

	if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page( [
			'page_title' => 'Контактные данные',
			'menu_title' => 'Настройки сайта',
			'menu_slug'  => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect'   => false
		] );
	}

function wpschool_disable_srcset( $sources ) {
    return false;
}
add_filter( 'wp_calculate_image_srcset', 'wpschool_disable_srcset' );







/**
 * Сollapse ADMIN-BAR (Toolbar) into left-top corner.
 *
 * @version 1.0
 */
final class Kama_Collapse_Toolbar {

    public static function init(){
        add_action( 'admin_bar_init', [ __CLASS__, 'hooks' ] );
    }

    public static function hooks(){

        // remove html margin bumps
        remove_action( 'wp_head', '_admin_bar_bump_cb' );

        add_action( 'wp_head', [ __CLASS__, 'collapse_styles' ] );
    }

    public static function collapse_styles(){

        // do nothing for admin-panel.
        // Remove this if you want to collapse admin-bar in admin-panel too.
        if( is_admin() ){
            return;
        }

        ob_start();
        ?>
        <style id="kama_collapse_admin_bar">
            #wpadminbar{ background:none; float:left; width:auto; height:auto; bottom:0; min-width:0 !important; }
            #wpadminbar > *{ float:left !important; clear:both !important; }
            #wpadminbar .ab-top-menu li{ float:none !important; }
            #wpadminbar .ab-top-secondary{ float: none !important; }
            #wpadminbar .ab-top-menu>.menupop>.ab-sub-wrapper{ top:0; left:100%; white-space:nowrap; }
            #wpadminbar .quicklinks>ul>li>a{ padding-right:17px; }
            #wpadminbar .ab-top-secondary .menupop .ab-sub-wrapper{ left:100%; right:auto; }
            html{ margin-top:0!important; }

            #wpadminbar{ overflow:hidden; width:33px; height:30px; }
            #wpadminbar:hover{ overflow:visible; width:auto; height:auto; background:rgba(102,102,102,.7); }

            * the color of the main icon *
            #wp-admin-bar-<?= is_multisite() ? 'my-sites' : 'site-name' ?> .ab-item:before{ color:#797c7d; }

            * hide wp-logo *
            #wp-admin-bar-wp-logo{ display:none; }
            * #wp-admin-bar-search{ display:none; } *

                                                    * edit for twentysixteen *
                                                    body.admin-bar:before{ display:none; }

            * for almin panel --- *
            @media screen and ( min-width: 782px ) {
                html.wp-toolbar{ padding-top:0 !important; }
                #wpadminbar:hover{ background:rgba(102,102,102,1); }
                #adminmenu{ margin-top:48px !important; }
            }

            * Gutenberg *
            #wpwrap .edit-post-header{ top:0; }
            #wpwrap .edit-post-sidebar{ top:56px; }
        </style>
        <?php
        $styles = ob_get_clean();

        echo preg_replace( '/[\n\t]/', '', $styles ) ."\n";
    }
}
Kama_Collapse_Toolbar::init();
