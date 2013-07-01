<?php 
/*
Plugin Name: JinMenu

Plugin URI: http://buffernow.com/

Description: Put Javascript In WP MENU

Version: 1.1.1

Author: Rohit Chowdhary

Author URI: http://buffernow.com/about-me/

*/


class jin {
public static $dir, $url;

    function __construct()     {
	
	JIN::$dir = WP_PLUGIN_DIR.'/jin-menu/';
	JIN::$url = WP_PLUGIN_URL."/jin-menu/";
	add_filter('nav_menu_css_class' , array($this,'jsom_menu_class') , 10 , 2);
	add_action('admin_menu',array($this,'jonmenu'));
	add_action('admin_footer', array($this,'jonmenu_load_script'));
	register_activation_hook(__FILE__, array($this, 'activate') );
	$this->init();

   }
   
   
   function activate(){
   add_option('jsm_addextra',"");
   }
	
	function jsom_menu_class($classes, $item){
	            	    if($item->url =="#" && $item->jin !="" ){
						$classes[] = "jsom".str_replace(' ', '',$item->title);  
                      }	                             
					 
					 return $classes;
				}
	
	function jonmenu(){
	    require_once (JIN::$dir . 'class.admin.php');
	    $admin = new jin_admin();
		add_submenu_page('themes.php','JinMenu','JinMenu','manage_options','jinmenu',array($admin , "print_admin"));
	}
	
    function jonmenu_load_script(){

		wp_register_script( 'jsom-js', plugins_url( '/js/jsom.js', __FILE__));
		wp_register_script( 'expand-js', plugins_url( '/js/expand.js',__FILE__));
	    wp_register_style( 'jsom-style',plugins_url( '/css/jsom.css', __FILE__) );
	    wp_register_style( 'expand-style',plugins_url( '/css/expando.css',__FILE__));		

		wp_enqueue_script( 'jsom-js' );
		wp_enqueue_script( 'expand-js' );   
	
        wp_enqueue_style( 'jsom-style' );
        wp_enqueue_style( 'expand-style' );
	
  }
  
  	
	function init(){
    require_once (JIN::$dir . 'class.draw.php');
    require_once (JIN::$dir . 'class.injection.php');
	$draw = new draw();
	$injection = new jin_injection();
	}
	
}
	
$Lets_Start = new jin();
?>