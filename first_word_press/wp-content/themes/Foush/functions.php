<?php

require_once('WP-Bootstrap-Navwalker.php');
    /*
    ** function to add my custom style
    ** added by @ Foush
    */

    /*
     *add support to featured image
     *
     **/
    add_theme_support( 'post-thumbnails'  );






    function Foush_Add_Styles(){

        wp_enqueue_style('Bootstrap.Css',get_template_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_style('Fontawesome.Css',get_template_directory_uri().'/css/font-awesome.min.css');
        wp_enqueue_style('main.Css',get_template_directory_uri().'/css/main.css');
    }


    /*
    ** function to add my custom scripts
    ** added by @ Foush
    */
    function Foush_Add_Scripts(){
        //Remove the Registeration of the jquery
        wp_deregister_script('jquery');
        //Add regiseration of jquery but in the footer
        wp_register_script('jquery',includes_url('/js/jquery/jquery.js'),array(),false,true);
        //Enqueue the jquery
        wp_enqueue_script('jquery');
        wp_enqueue_script('Bootstrap-Js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),false,true);
        wp_enqueue_script('Main-Js',get_template_directory_uri().'/js/Main.js',array(),false,true);
        wp_enqueue_script('html5shiv',get_template_directory_uri().'/js/html5shiv.js');
        wp_script_add_data('html5shiv','conditional','lt IE 9'); //adding the condtional comment for internet exploler
        wp_enqueue_script('responsive',get_template_directory_uri().'/js/responsive.js');
        wp_script_add_data('responsive','conditional','lt IE 9');//adding the condtional comment for internet exploler

    }

    /*
     *register navagation bar in our theme
     *added by @foush
     *
     */

    function Foush_register_navbar(){
        register_nav_menus(array(
            'bootstrap-menu' => 'Navigation Bar',
            'footer_menu'    => 'the footer menu of the website'
        ));
    }
    /*to show the navagation menu in the site*/
    function Foush_bootstrap_navbar(){
        wp_nav_menu(
            array(
                    'theme_location' => 'footer_menu',
                    'menu_class'     => 'nav navbar-nav',
                    'container'      => false,
                    'walker'         => new WP_Bootstrap_Navwalker


        ));
    }
    /*
     *customize the length of words taken by the excerpt
     *default is 55work
     * */
    function Foush_extend_excerpt_length($length){
        return55;
    }
    /*
     *change the default of read me  [..] to read me
     *
     * */
    function Foush_change_excerpt_dots($more){
        return '..read more..';}

    /*adding filters to change the defaults of Wordpress
     *
     * */

    add_filter('excerpt_length','Foush_extend_excerpt_length');
    add_filter('excerpt_more','Foush_change_excerpt_dots');


    /*
     **Add Actions
     **Added by Foush
     **This is the hock to add My_styles and My_Scripts,navbar
     */

    add_action('wp_enqueue_scripts','Foush_Add_Styles');
    add_action('wp_enqueue_scripts','Foush_Add_Scripts');
    add_action('init','Foush_register_navbar');

?>
