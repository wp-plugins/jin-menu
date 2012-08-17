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
		<li><a href="#tabs-2">Menu Options</a></li>
		<li><a href="#tabs-3">Addition Function</a></li>
	</ul>
	<div id="tabs-1">		
		<?php getjin_template ("tab1"); ?>
	</div> <!-- end tab 1 -->
	
	<div id="tabs-2">
		<?php getjin_template ("tab2"); ?>
		
	</div><!-- end tab 2 -->
	<div id="tabs-3">
		<?php getjin_template ("tab3"); ?>
		
	</div><!-- end tab 2 -->
	</div> <!-- #tabs -->
</div><!-- wrap -->
<div class="of-save-popup" id="of-popup-save" >
    <div class="of-save-save">Options Updated</div>
  </div>