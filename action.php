<?php
	include("jsom-filter.php");
	function my_jsomwp_save(){
		
		if(get_option('jsmenu')){
			$a_rey=get_option('jsmenu');
			$a_rey[$_REQUEST['jsom_name']]=filter_string(stripslashes($_REQUEST['jsom_val']));
			//print_r($a_rey);
			update_option('jsmenu',$a_rey);
		} else{
			$a_rey=array($_REQUEST['jsom_name'] => filter_string(stripslashes($_REQUEST['jsom_val'])));
			add_option('jsmenu',$a_rey);
		}
//die($_REQUEST['jsom_name']);die('1');
	}

	
	function save_extrafunc(){
		$extra_func = filter_tag($_REQUEST['jsom_extra']);
		$x = (get_option('jsm_addextra')) ? update_option('jsm_addextra',$extra_func):
		add_option('jsm_addextra',$extra_func);
		
		
		if($_REQUEST['jquery_in_t']=="notok"){
		add_option('includejq',"include");
		}
		else if(get_option('includejq')){
		delete_option('includejq');
		}
	}

	
	if(isset($_REQUEST['jsomsave'])){
		
		if(!empty($_REQUEST['jsmname'])){
			$jsval=$_REQUEST['jsval'];
			$i=0;

			foreach($_REQUEST['jsmname'] as $jsmenuname){
					$a_rey[$jsmenuname]= filter_string($jsval[$i]);
				$i++;
			}
    //print_r($a_rey);
			$x = (get_option('jsmenu')) ? update_option('jsmenu',$a_rey): add_option('jsmenu',$a_rey);

	// update_option('jsmenu',$a_rey);
			//print_r(get_option('jsmenu'));die;
		}

	}

	
	add_action('admin_menu','jonmenu');
	add_action('wp_footer', 'push_script', 100);
	add_filter('nav_menu_css_class' , 'jsom_menu_class' , 10 , 2);
	if(get_option('includejq'))
	add_action('wp_enqueue_scripts', 'my_scripts_method');	
	add_action('admin_footer', 'jonmenu_load_script');
	//add_action('wp_enqueue_scripts', 'jonmenu_load_script');
	add_action( 'wp_ajax_jsom_ajxsave', 'my_jsomwp_save' );
	add_action( 'wp_ajax_nopriv_jsom_ajxsave', 'my_jsomwp_save' );
	add_action( 'wp_ajax_jsom_ajxsavextra', 'save_extrafunc' );
	add_action( 'wp_ajax_nopriv_jsom_ajxsavextra', 'save_extrafunc' );
	add_action('wp_footer', 'saved_extrafunc');
	?>