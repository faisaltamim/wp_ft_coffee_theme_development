<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "theme_option_data";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'submenu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => false,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => 'redux_demo',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => false,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => false,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => false,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => false,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

   
    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    // Redux::setSection( $opt_name, array(
    //     'title'            => __( 'Basic Fields', 'redux-framework-demo' ),
    //     'id'               => 'basic',
    //     'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
    //     'customizer_width' => '400px',
    //     'icon'             => 'el el-home'
    // ) );

    //Generel option 
    Redux::setSection($opt_name,array(

        'title'         => "General Options",
        'id'            => "go",//go means general option
        'desc'          => "This is FT Coffee theme general option",
        'fields'        => array(
            [
                'title'         => "Map",
                'id'            => "map",
                'desc'          => "Embed Code Here",
                'type'          => "editor",
            ],
        ),

    ));
    //header option create
    Redux::setSection($opt_name,[

        'title'         => "Header Options",
        'id'            => "ho",//ho stands for header option
        'desc'          => "This is FT Coffee theme header option",
        'icon'             => 'el el-th-large',

    ]);

            //header sub section -- mone rakhte hobe jar sub section banabo tar niche ei rakhte hobe
            Redux::setSection($opt_name,[

                'title'         => "Logo",
                'id'            => "logo",//ho stands for header option
                'subsection'    => true,
                'fields'        => array(
                    [

                        'title'         => "Upload Logo",
                        'id'            => "headerlogo",
                        'type'          => "media",

                    ],
                    [

                        'title'         => "Logo Width",
                        'id'            => "logowid",
                        'type'          => "text",

                    ],
                    [

                        'title'         => "Favicon",
                        'id'            => "favicon",
                        'type'          => "media",

                    ],

            ),
            ]);
            //header another subsection 
            Redux::setSection($opt_name,[

                'title'         => "Menus",
                'id'            => "menu",
                'subsection'    => "true",
                'fields'         => array([

                        'title'         => "Menu Color",
                        'id'            => "Menucolor",
                        'type'          => "color",

                ]),

            ]);

    //social icon create
    Redux::setSection($opt_name,[

        'title'         => "Social Icon",
        'id'            => "si",
        'desc'          => "This is FT Coffee theme Social Icon option",
        'icon'          => 'el el-group',
        'fields'        =>array(
            [

                'title'         => "Facebook",
                'id'            => "fb",
                'desc'          => "Facebook Link",
                'type'          => "text",

            ],
            [

                'title'         => "Instagram",
                'id'            => "insta",
                'desc'          => "Instagram Link",
                'type'          => "text",

            ],
            [

                'title'         => "Linked Id",
                'id'            => "lnkdn",
                'desc'          => "Linked Id Link",
                'type'          => "text",

            ],
            [

                'title'         => "Twitter",
                'id'            => "twi",
                'desc'          => "Twitter Link",
                'type'          => "text",

            ],
            [

                'title'         => "Pinterest",
                'id'            => "pin",
                'desc'          => "Pinterest Link",
                'type'          => "text",

            ],
            [

                'title'         => "Dribble",
                'id'            => "dri",
                'desc'          => "Dribble Link",
                'type'          => "text",

            ]
    ),


    ]);
     //footer option create
    Redux::setSection($opt_name,[

        'title'         => "Footer Option",
        'id'            => "fo",
        'desc'          => "This is FT Coffee theme footer option",
        'icon'          => 'el el-align-center',
        'fields'        => array(
            [
                'title'         => "Footer Text",
                'id'            => "ftrtxt",
                'type'          => "text",
            ],
            [
                'title'         => "Footer Color",
                'id'            => "ftrclr",
                'type'          => "color",
            ],
            [
                'title'         => "Footer Background",
                'id'            => "ftrbgc",
                'type'          => "color",
            ]
    ),


    ]);