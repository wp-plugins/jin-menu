<?php

class jin_admin  { 

   function __construct()     {
 //  	add_action('wp_ajax_jsom_ajxsavextra', array($this,'save_extrafunc' ));
//	add_action('wp_ajax_nopriv_jsom_ajxsavextra', array($this,'save_extrafunc' ));
 }
   
    function save_extrafunc(){
		die($_REQUEST['jsm_extra']);
		$extra_func = $this->filter_tag($_REQUEST['jsm_extra']);
		$x = (get_option('jsm_addextra')) ? update_option('jsm_addextra',$extra_func):
		add_option('jsm_addextra',$extra_func);
		if($_REQUEST['jquery_in_t']=="notok"){
		add_option('includejq',"include");
		}
		else if(get_option('includejq')){
		delete_option('includejq');
		}
	
	}
	
	function getjin_template ($template=""){
		$path = "view/{$template}.php";
	    require_once $path;
       }
	
	function print_admin(){
    if(isset($_REQUEST['jsom_saveadd'])){		
		$extra_func = $this->filter_tag($_REQUEST['jsm_extra']);
		update_option('jsm_addextra',$extra_func);
	}
	?>
	<div  class="wrap">
	    <?php     //Shows the page's name and an icon if one has been provided
	    screen_icon(); echo "<h2>JS On WP Menu</h2>";
		?>
      <br>
      <h3><? //print_r get_option('jsmenu'); ?>Put onclick event On Menu </h3>
       <p>Use Javascript/jQuery On Your Wordpress Menu.</p>
        <div id="tabs">
			  <ul>
				<li><a href="#tabs-1">Plugin Info</a></li>
				<li><a href="#tabs-2">Add Javascipt/Jquery Function</a></li>
			  </ul>
			  <div id="tabs-1">		
				<?php $this->getjin_template ("tab1"); ?>
			  </div> <!-- end tab 1 -->	
			  <div id="tabs-2">
				<?php $this->getjin_template ("tab2"); ?>		
			  </div><!-- end tab 2 -->
	    </div> <!-- #tabs -->
    </div><!-- wrap -->
	<div class="of-save-popup" id="of-popup-save" >
    <div class="of-save-save">Options Updated</div></div>
	<?php	
	}
	
	function filter_tag($jsomstring){
					$filter_tag =array(
					'<script type="text/javascript">',
					"<script type='text/javascript'>",
					'<script language="javascript">',
					"<script language='javascript'>",
					'<script>',
					'</script>'
					);
					$jsomstring =trim($jsomstring);
					foreach($filter_tag as $symbl) {
					$jsomstring = str_replace($symbl,'',$jsomstring); 
					}
					return $jsomstring;
	}
}
?>