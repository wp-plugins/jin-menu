 var twitterWidgets = document.createElement('script');
        twitterWidgets.type = 'text/javascript';
        twitterWidgets.async = true;
        twitterWidgets.src = 'http://platform.twitter.com/widgets.js';
        document.getElementsByTagName('head')[0].appendChild(twitterWidgets);
		jQuery(document).ready(function($) {
         $("h3.expand").toggler();
    $("div.jsmexpnd").expandAll({trigger: "h3.expand", ref: "h3.expand"});  
	
	
		$( "#tabs" ).tabs();
		
			
//Update Message popup
	$.fn.center = function () {
		this.animate({"top":( $(window).height() - this.height() - 200 ) / 2+$(window).scrollTop() + "px"},100);
		this.css("left", 250 );
		return this;
	}
		
			
	$('#of-popup-save').center();
	$('#of-popup-reset').center();
	$('#of-popup-fail').center();
			
	$(window).scroll(function() { 
		$('#of-popup-save').center();
		$('#of-popup-reset').center();
		$('#of-popup-fail').center();
	});
		
		});

jQuery().ready(function($){
				jQuery("#jsm_saveextra").click(function(e){		
		$("#jsomfxtramsg").hide("normal");				
	
				var data = {
				 action: 'jsom_ajxsavextra',
				jsom_extra:jQuery("#extrajsjq").val(),					
				jquery_in_t: jQuery("input[name='inc_jquery']:checked").val()
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
							
					
					  }
				}).responseText; 
				});
			});	
		
			



