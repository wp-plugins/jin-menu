<table class="postbox widefat" cellspacing="0" cellpadding="4">
   <thead>
      <tr>
         <th>Add Addition javascript/jQuery Function</th>
         <th>Hint/How to Use.</th>
      </tr>
   </thead>
   <tbody>
      <tr class="alternate">
         <td>
            <div id="jsomfxtramsg"></div>
            <form method="post">
               <textarea id="extrajsjq" style="width: 548px; height: 141px;" name="jsm_extra">
               <?php echo esc_html(stripslashes(get_option('jsm_addextra'))); ?>
               </textarea><br />
               <input type="submit" value="Save" id="" class="button-primary" name="jsom_saveadd" />
            </form>
         </td>
         <td width="45%">
            <div >
		   <p>Add addition javascript/jQuery Function.<br />These function will be added to footer of your theme.</p>
               <span style="color:red">Do Not use </span>following tag <br /><br />
               <span class="hint">	<span class="sc1">&lt;script</span><span class="sc1">&gt;</span>	</span>
               <span class="hint"><span class="sc1">&lt;script</span>
               <span class="sc3">type</span><span class="sc8">=</span><span class="sc6">"text/javascript"</span>		
               <span class="sc1">&gt;</span></span>
               <span class="hint"><span class="sc1">&lt;script</span>
               <span class="sc3">language</span><span class="sc8">=</span><span class="sc6">"javascript"</span></span>	
               <span class="hint">	<span class="sc1">&lt;&#47;script&gt;</span></span>
            </div>

         </td>
      </tr>
   </tbody>
</table>