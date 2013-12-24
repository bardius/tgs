(function(CMS, $) {

    $(function() {
		CMS.foundationConfig.init();
		
		if($('#mapModal').length > 0){
			CMS.siteConfig.mapInit();			
		}
    });
    // END DOC READY

    /* Optional triggers
     
     // WINDOW.LOAD
     $(window).load(function() {
     
     });

    // WINDOW.RESIZE
    $(window).resize(function() {
	
    });
     */
	CMS.siteConfig = {
		map:			null,
		mapKey:			'AIzaSyB8uoWbuhHNagbpi22tEeZYiT41toB171g',
		mapLatitude:	$('#mapLat').val(),
		mapLongitude:	$('#mapLong').val(),
		markerTitle:	$('#mapTitle').val(),
		mapCanvasId:	'map-canvas',
		GMapScriptURL:	'http://maps.google.com/maps/api/js?sensor=false&key=',
		
		mapInit: function() {
			$.getScript(CMS.siteConfig.GMapScriptURL + CMS.siteConfig.mapKey + "&callback=CMS.siteConfig.showMap");
		},
		
		showMap: function() {
	
			var windowHeight	= $(window).height();		
			var mapLatlng		= new google.maps.LatLng(CMS.siteConfig.mapLatitude, CMS.siteConfig.mapLongitude);		
			var contentString	= '<h5>' + CMS.siteConfig.markerTitle + '</h5>';
			
			$('#' + CMS.siteConfig.mapCanvasId).css('height', (windowHeight / 2) + 'px');
			
			var mapOptions	= {
				center:		mapLatlng,
				mapTypeId:	google.maps.MapTypeId.ROADMAP,
				zoom:		14
			};
			
			var infowindow	= new google.maps.InfoWindow({ 
				content: contentString
			});
			
			CMS.siteConfig.map	= new google.maps.Map(document.getElementById(CMS.siteConfig.mapCanvasId), mapOptions);

			var marker		= new google.maps.Marker({
				position:	mapLatlng,
				map:		CMS.siteConfig.map,
				title:		CMS.siteConfig.markerTitle
			});
			
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(CMS.siteConfig.map,marker);
			});
		 
			google.maps.event.addDomListener(window, "resize", function() {
				var newCenter = CMS.siteConfig.map.getCenter();
				google.maps.event.trigger(CMS.siteConfig.map, "resize");
				CMS.siteConfig.map.setCenter(newCenter); 
			});
			
			$(document).on('opened', '[data-reveal]', function () {
				var newCenter = CMS.siteConfig.map.getCenter();
				google.maps.event.trigger(CMS.siteConfig.map, "resize");
				CMS.siteConfig.map.setCenter(newCenter); 
			});
		}
	},
			

    CMS.foundationConfig = {
		
		init: function() {		
			
			// Start the foundation Javascript Plugins
			$(document).foundation({
				reveal : {
					animation: 'fadeAndPop',
					animation_speed: 350,
					close_on_background_click: true,
					dismiss_modal_class: 'close-reveal-modal',
					bg_class: 'reveal-modal-bg'
				},
				orbit : {
					animation: 'fade',
					timer_speed: 8000,
					pause_on_hover: true,
					resume_on_mouseout: false,
					animation_speed: 700,
					stack_on_small: true,
					navigation_arrows: true,
					slide_number: false,
					bullets: true,
					timer: false,
					variable_height: false
				},
				dropdown : {
				}
			});
			
			// Start the AJAX based contact form
			CMS.foundationConfig.ajaxSubmittedForm('#contactform', '#contactFormBtn');
			CMS.foundationConfig.ajaxSubmittedForm('#add_comment_form', '#submitCommentBtn');
		},
		    
	    ajaxSubmittedForm: function(formId, formSubmitBtnId) {
			
			var formElement = $(formId);
			var btnElement = $(formSubmitBtnId);
			
			if (formElement.length > 0) {

				btnElement.on('click', function(e) {
					e.preventDefault();

					var formData = formElement.serializeArray();
					formData.push({name: "isAjax", value: "true"});
					
					var formAction = formElement.attr("action");

					$.post(formAction, formData, function(responce) {

						$(".formError").remove();
						$("label.error").removeClass('error');

						if (responce.hasErrors === false) {
							formElement.trigger("reset");
							formElement.html('<p>' + responce.formMessage + '</p>');
						}
						else {
							if (responce.errors !== null) {
								
								var errorArray = responce.errors;
								
								$.each(errorArray, function(key, val) {
									console.log(key);
									console.log(formId + '_' + key);
									console.log(val[0]);
									// find type of input, return validation
									$(formId + '_' + key).addClass('error');
									$(formId + '_' + key).after($('<small class="formError error">' + val[0] + '</small>').hide());	
								});
							}
							
							$('<small class="formError error">' + responce.formMessage + '</small>').hide().insertAfter(btnElement);
							
							$('.formError').fadeIn(200);
						}
					});
				});
			}
	    }
		
		/*
		 * Intercharge custom query sample
		 * 
			$(document).foundation('interchange', {
				named_queries : {
					my_custom_query_for_max_200 : 'only screen and (max-width: 200px)'
				}
			 });
		 */
    };

})(window.CMS = window.CMS || {}, jQuery);