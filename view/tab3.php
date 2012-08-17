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
               <? echo stripslashes(get_option('jsm_addextra')); ?>
               </textarea><br />
               <input type="button" value="Save" id="jsm_saveextra" class="button-primary" name="jsom_saveadd" />
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
			 <div style="margin:3em 0">
				<h3>Please Confirm</h3>
				<? $y=(get_option('includejq')) ? "checked='checked'" : ''; $x=($y!='')? '': "checked='checked'"; ?>				
			<p><input type="radio" name="inc_jquery" value="ok" <? echo $x; ?> id="inc_jquery"> My theme use jQuery.</p>
			<p><input type="radio" name="inc_jquery" <? echo $y; ?> value="notok" id="ninc_jquery"> My theme do not use jQuery.</p>
            </div>
         </td>
      </tr>
   </tbody>
</table>