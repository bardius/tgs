(function(CMS, $) {
	
	'use strict';
	
	CMS.siteConfig = {
		// Map settings
		map:			null,
		mapKey:			'AIzaSyB8uoWbuhHNagbpi22tEeZYiT41toB171g',
		mapLatitude:	$('#mapLat').val(),
		mapLongitude:	$('#mapLong').val(),
		mapZoom:		14,
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
			
			if($('#mapZoom').length > 0){
				CMS.siteConfig.mapZoom = parseInt($('#mapZoom').val());
			}
			
			var mapOptions	= {
				center:		mapLatlng,
				mapTypeId:	google.maps.MapTypeId.ROADMAP,
				zoom:		CMS.siteConfig.mapZoom
			};
			
			CMS.siteConfig.map	= new google.maps.Map(document.getElementById(CMS.siteConfig.mapCanvasId), mapOptions);
		 
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
			
			if(CMS.siteConfig.mapZoom == 14){				
				var marker		= new google.maps.Marker({
					position:	mapLatlng,
					map:		CMS.siteConfig.map,
					title:		CMS.siteConfig.markerTitle
				});

				var infowindow	= new google.maps.InfoWindow({ 
					content: contentString
				});

				google.maps.event.addListener(marker, 'click', function() {
					infowindow.open(CMS.siteConfig.map,marker);
				});
			}
		}
	},
			
	CMS.tgsUI = {

		init: function() {
			
			$('.is-Bf').hide();
			$('.is-Meters').hide();
			
			CMS.tgsUI.filtersFormInit();
			CMS.tgsUI.infinitePagination();		
		},
	
		unitConvertDisplay: function(unit) {
	
			switch(unit)
			{
				
				case 'knots':
					$('.is-Bf').fadeOut(0, function(){
						$('.is-Knots').fadeIn(200);						
					});
					
					break;

				case 'bf':
					$('.is-Knots').fadeOut(0, function(){
						$('.is-Bf').fadeIn(200);						
					});
					
					break;

				case 'meters':
					$('.is-Ft').fadeOut(0, function(){
						$('.is-Meters').fadeIn(200);						
					});
					
					break;

				case 'ft':
					$('.is-Meters').fadeOut(0, function(){
						$('.is-Ft').fadeIn(200);						
					});
					
					break;

				default:
				
			}
		},

		filtersFormInit: function() {
	
			$('.displayActiveStatus').on('click', function(e){
				$(this).toggleClass('isActive');
				
				var accordioTriggers = $(this).closest('dl').find('a.displayActiveStatus').not(this);
				accordioTriggers.removeClass('isActive');
			});
        
			$('#resetFilters').change(function() {
				var checkboxes = $(this).closest('form').find(':checkbox').not(this);
				checkboxes.removeAttr('checked');
			});
		},
		
		// The ajax pagination plugin call
		infinitePagination: function() {
			var container;
			var item;
			
			if($('.spotsList').length > 0){
				container = ".spotsList";
				item = ".spot_articleItem";
			}
			else{
				container = ".blogArticleList";
				item = ".blog_articleItem";
			}
			
			var ias = $.ias({
				container	: ".spotsList",
				item		: ".spot_articleItem",
				pagination	: ".pagination",
				next		: ".nextPageLink"
			});
			
			ias.extension(
				new IASSpinnerExtension({
					src: '/images/site_assets/loading.gif',
					html: '<div class="ias-spinner" style="text-align: center;"><img src="{src}"/></div>'
				})
			);
			
			ias.extension(
				new IASNoneLeftExtension({
					text: 'No more sports to load',
					html: '<div class="ias-noneleft" style="text-align: center;">{text}</div>'
				})
			);
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
					timer_speed: 6000,
					pause_on_hover: true,
					resume_on_mouseout: true,
					animation_speed: 900,
					stack_on_small: false,
					navigation_arrows: true,
					slide_number: false,
					bullets: false,
					timer: true,
					circular: true,
					swipe: true,
					variable_height: false
				},
				dropdown : {
				}
			});
			
			// Start the AJAX based contact form
			CMS.foundationConfig.ajaxSubmittedForm('#contactform', '#contactFormBtn');
			//CMS.foundationConfig.ajaxSubmittedForm('#add_comment_form', '#submitCommentBtn');
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
						$(formId +" .error").removeClass('error');

						if (responce.hasErrors === false) {
							formElement.trigger("reset");
							formElement.html('<p>' + responce.formMessage + '</p>');
						}
						else {
							if (responce.errors !== null) {
								
								var errorArray = responce.errors;
								
								$.each(errorArray, function(key, val) {
									// find type of input, return validation
									$(formId + '_' + key).addClass('error');
									$(formId + '_' + key).closest(".formFieldContainer").addClass('error');
									$(formId + '_' + key).closest(".formFieldContainer").after($('<small class="formError error">' + val[0] + '</small>').hide());	
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
	
	// Shorthand for $( document ).ready()
    $(function() {
		
		CMS.foundationConfig.init();
		CMS.tgsUI.init();		
		
		if($('#mapModal').length > 0){
			CMS.siteConfig.mapInit();			
		}
    });

    /* Optional triggers
     
     // WINDOW.LOAD
     $(window).load(function() {
     
     });

    // WINDOW.RESIZE
    $(window).resize(function() {
	
    });
     */
	
})(window.CMS = window.CMS || {}, jQuery);