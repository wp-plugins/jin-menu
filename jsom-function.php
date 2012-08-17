<?php

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

	function jsom_menu_class($classes, $item){
		foreach(get_option('jsmenu') as $key =>$value){
			
			if($item->title == $key ){
		
				$classes[] = "jsom".str_replace(' ', '',$key);
			}

		}

		return $classes;
	}

	function my_scripts_method() {			
	
		wp_enqueue_script( 'jquery' );
	}
	
function push_script(){	
	
	?>
<script type="text/javascript">  
jQuery.noConflict();
jQuery(document).ready(function(){
<?php
 $i=1;foreach(get_option('jsmenu') as $key =>$value){ ?>
        var menuID<?php  echo $i; ?> = jQuery('<?php echo ".jsom".str_replace(' ', '',$key); ?>');
        findA<?php  echo $i; ?> =menuID<?php  echo $i; ?> .find('a');
 findA<?php  echo $i; ?>.attr( "href", "javascript:void(0)" );
        findA<?php  echo $i; ?>.click(function(event){
         <?php  echo stripslashes($value); ?>
   });
<?php 
			$i++;
		}

		?>
});
</script>
<?php 
	}

function saved_extrafunc(){
	
	if(get_option('jsm_addextra')){
		?>
<script>
<?php echo stripslashes(get_option('jsm_addextra')); ?>
</script>
<?php 
	}

}

	// Admin Panel Functions
	function jsom_admin_panel(){
		wp_enqueue_script('jquery-ui-tabs');
		require_once('admin-panel.php');
	}

	function jonmenu(){
		add_submenu_page('themes.php','JinMenu','JinMenu','manage_options','jinmenu','jsom_admin_panel');
	}

	
	function getjin_template ($template=""){
		$path = "view/{$template}.php";
	    require_once $path;
}
?>