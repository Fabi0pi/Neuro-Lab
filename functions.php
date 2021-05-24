<?php
    /************************
        Adding custom files
    ************************/
    function neurolab_script_enqueue() {

        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.0.1', 'all');//bootstrap css
        wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/neurolab.css', array(), '1.0.0', 'all'); //for include my css file
        wp_enqueue_script('jquery'); //jquery
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.0.1', true);//bootstrap js
        wp_enqueue_script('customjs', get_template_directory_uri() . '/js/neurolab.js', array(), '1.0.0', true); //for include my js file
    }
    
    add_action('wp_enqueue_scripts', 'neurolab_script_enqueue');

    /************************
        Adding menu
    ************************/
    function neurolab_theme_setup(){
        add_theme_support('menus'); //To activate the menu on wordpress

        /*menu class name and section*/
        register_nav_menu('primary', 'Primary Header Navigation'); //the first value is the name, second value is a description 
        register_nav_menu('secondary', 'Footer Navigation');
    }

    add_action('init', 'neurolab_theme_setup'); //we can call this action in 2 modes: after the setup function (after_setup_theme) or when theme initializes (init) 
    
    /****************************
        Theme support functions
    *****************************/
    add_theme_support('custom-background');     //enables upload and custom background
    add_theme_support('custom-header');         //enables customize header
    add_theme_support('post-thumbnails');       //enables featured image


    /*************************************************************
        Register Custom Navigation Walker
        https://github.com/wp-bootstrap/wp-bootstrap-navwalker
    *************************************************************/
    function register_navwalker(){
	    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
    add_action( 'after_setup_theme', 'register_navwalker' ); 
    
    
    /****************************
        Sidebar function
    *****************************/
    function neurolab_widget_setup(){
        
        register_sidebar(
            array(
                'name'          => 'sidebar',
                'id'            => "sidebar-1",
                'description'   => 'standard sidebar',
                'class'         => 'custom',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => "</div>\n",
                'before_title'  => '<h2 class="widgettitle">',
                'after_title'   => "</h2>\n"
            )
        );
    }
    add_action('widgets_init','neurolab_widget_setup');
    