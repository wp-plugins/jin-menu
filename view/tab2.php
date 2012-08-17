<table cellspacing="0" cellpadding="4" class="postbox widefat">
   <thead>
      <tr>
         <th>Custom Menu</th>
         <th>How To Use ?</th>
      </tr>
   </thead>
   <tbody>
      <tr class="alternate">
         <td>
            <div id="jsomfmsg"></div>
            <div class="jsmexpnd">
               <form method="post" action="">
                  <?php             
                     $locations = get_nav_menu_locations() ;  
                     foreach($locations as $key => $val){
                     $menu_items = wp_get_nav_menu_items($val);
                     foreach ( (array) $menu_items as $key => $menu_item ) {
                         $title = $menu_item->title;
                         $url = $menu_item->url;	
                     	if($url=="#")
                         $menu_list[]=  $title ;
                     	
                     }
                     }	
                     if(!empty($menu_list) ){
                     echo '<h3>Expand Menu To Insert Javascript/Jquery Code</h3>
                     <p class="switch"><a class="" href="#">[Expand All]</a></p>';
                     $fetchh = (get_option('jsmenu')) ? get_option('jsmenu') : "" ;
                     $i=0;	
                     foreach($menu_list as $jsmenu)
                     {
				
                     $value = (isset($fetchh[$jsmenu]))? $fetchh[$jsmenu]:"";
                     ?>
                  <h3 class="expand"><? echo $jsmenu; ?></h3>
                  <div class="collapse">
                     <p><textarea id="jsval<? echo $i;?>" name="jsval[]"><? echo stripslashes($value); ?></textarea>
                        <input id="hide<? echo $i;?>" type="hidden" value="<? echo $jsmenu ;?>" name="jsmname[]" />
                        <input type="button" style="float:right" value="Save" id="saveajx<? echo $i;?>" class="button-primary" />
                     </p>
                  </div>
                  <script>
                     jQuery.noConflict();
                     jQuery().ready(function($){
                     	jQuery("#saveajx<? echo $i;?>").click(function(e){		
                     $("#jsomfmsg").hide("normal");				
                     	var data = {
                     	 action: 'jsom_ajxsave',
                     	jsom_name:jQuery("#hide<? echo $i;?>").val(),
                     	jsom_val :jQuery("#jsval<? echo $i;?>").val()
                     	};
                     var bodyContent = jQuery.ajax({
                     		  url: ajaxurl,
                     		  global: false,
                     		  type: "POST",
                     		  data: data,
                     		  dataType: "html",
                     		  async: false,	
                     		  success: function(result){
							  
							 
							  var success_popup = $('#of-popup-save');
					success_popup.fadeIn();
					window.setTimeout(function(){
	    success_popup.fadeOut();                        
		}, 2000);
							  
							  /*
                     		  	 $("#jsomfmsg").html("Options Saved");
                     			 $("#jsomfmsg").show("normal");
                     		*/
                     		  }
                     	}).responseText; 
                     	});
                     });	
                     
                     		 
                     
                     
                  </script>
                  <?php $i++; } if($i>1) { ?>
				  
                  <center><input type="submit" value="Save All" id="jsomsave" name="jsomsave" class="button-primary" /></center>
				  <?php } ?>
               </form>
               <?php } else { ?>
               <h3 style="color:red;"> No Custom Menu With URL # Found !!! </h3>
               <ol />
               <li>Goto Your Wordpress <a href="<? echo bloginfo('url')."/wp-admin/nav-menus.php";?>"> Menus </a> Option.</li>
               <li>In Custom Links Box place <b>#</b> in URL and Give It a Label.</li>
               <li>Add To Menu.</li>
               <li>Save Menu.</li>
               <li>This menu now will be appear in this tab.</li>
               <li>Expand The Menu Add Your Code. </li>
               <li>Enjoy.</li>
               <ol />
               <?php } ?>	
            </div>
         </td>
         <td width="45%">
            <div style="margin:3em 0">
               <h3>Hint</h3>
               <span style="color:red">Do Not use </span>following tag or jquery declaration<br /><br />
               <span class="hint">	<span class="sc1">&lt;script</span><span class="sc1">&gt;</span>	</span>
               <span class="hint"><span class="sc1">&lt;script</span>
               <span class="sc3">type</span><span class="sc8">=</span><span class="sc6">"text/javascript"</span>		
               <span class="sc1">&gt;</span></span>
               <span class="hint">$(<span class="sc47">function</span><span class="sc50">()</span>{</span>
               <span class="hint">(<span class="sc47">function</span><span class="sc50">($)</span> { </span>
               <span class="hint">jQuery(document).ready(<span class="sc47">function</span>($) {</span>
               <span class="hint">$(window).load(<span class="sc47">function</span><span class="sc50">()</span>{ </span>
               <br /><span style="color:red">in the box.</span>
            </div>
            <div class="clear"></div>
            <h3>Javascript Example</h3>
			
            <p>If you want to execute <i>foobar</i> 
			function.
            </p>
			<p>Insert foobar Function in <a href="#tabs-3">Addition Function Tab</a>
			<br/>after that insert <span style="color:red">foobar();</span> in menu textarea.
			</p>
			<div style="background: #F2F4FF; ">           
			   <div class="hint"> <pre><span class="sc47">function</span><span class="sc41"> </span><span class="sc46">foobar</span><span class="sc50">(){</span>
		<span class="sc47">if</span><span class="sc50">(</span><span class="sc46">confirm</span><span class="sc50">(</span><span class="sc48">"your Message"</span><span class="sc50">))</span><span class="sc41"></span><span class="sc50">{</span>
			<span class="sc46">window.open</span><span class="sc50">(</span><span class="sc49">'http://www.buffernow.com/'</span><span class="sc50">);</span><span class="sc41">
					</span><span class="sc50">}</span>        
               <span class="sc50">}</span></pre>  </div>
            </div>
            <div class="clear"></div>
            <br />
            <h3>jQuery Example</h3>
            <p> if want to execute jquery code like below </p>
            <div style=" background: #F2F4FF; ">

               <span class="sc40">
               <pre>$</span><span class="sc50">(</span><span class="sc47">function</span><span class="sc50">()</span><span class="sc41"> </span><span class="sc50">{</span><span class="sc41"><br />
$</span><span class="sc50">(</span><span class="sc48">"#mymenu a"</span><span class="sc50">).</span><span class="sc46">click</span><span class="sc50">(</span><span class="sc47">function</span><span class="sc50">(</span><span class="sc46">event</span><span class="sc50">){</span><span class="sc41"></pre>
               <div class="hint">$</span><span class="sc50">(</span><span class="sc48">"#mydiv"</span><span class="sc50">).</span><span class="sc46">hide</span><span class="sc50">();</span><span class="sc41">               </div>
               <pre></span><span class="sc50">});</span>
            </div>
			<p>then only insert <span style="color:red">$("#mydiv").hide();</span> in menu textarea.</p>
            </pre>
            <br /><br />
			
            <div class="clear"></div>
         </td>
      </tr>
   </tbody>
</table>