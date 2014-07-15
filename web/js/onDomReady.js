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
		map_html:		'',
		map_to_html:	'',
		map_from_html:	'',
		map_infowindow:	'',
		marker:			'',
		
		mapInit: function() {
			
			$.getScript(CMS.siteConfig.GMapScriptURL + CMS.siteConfig.mapKey + "&callback=CMS.siteConfig.showMap");
		},
		
		showMap: function() {
	
			var windowHeight	= $(window).height();		
			var mapLatlng		= new google.maps.LatLng(CMS.siteConfig.mapLatitude, CMS.siteConfig.mapLongitude);		
			var contentString	= '<h4>' + CMS.siteConfig.markerTitle + '</h4>';
		
			// The info window version with the "to here" form open
			CMS.siteConfig.map_to_html = contentString + '<p><small>Directions: <b>To here</b> - <a href="javascript:CMS.siteConfig.mapFromHere()">From here</a></small></p>' +
			   '<form action="http://maps.google.com/maps" method="get"" target="_blank"><label for="saddr">Start address:</label>' +
			   '<input type="text" SIZE=40 MAXLENGTH=40 name="saddr" id="saddr" value="" /><br>' +
			   '<input class="button" value="Get Directions" type="submit">' +
			   '<input type="hidden" name="daddr" value="' + CMS.siteConfig.mapLatitude + ',' + CMS.siteConfig.mapLongitude + "(" + CMS.siteConfig.markerTitle + ")" + '"/></form>';

			// The info window version with the "to here" form open
			CMS.siteConfig.map_from_html = contentString + '<p><small>Directions: <a href="javascript:CMS.siteConfig.mapToHere()">To here</a> - <b>From here</b></small></p>' +
			   '<form action="http://maps.google.com/maps" method="get"" target="_blank"><label for="daddr">End address:</label>' +
			   '<input type="text" SIZE=40 MAXLENGTH=40 name="daddr" id="daddr" value="" /><br>' +
			   '<input class="button" value="Get Directions" type="submit">' +
			   '<input type="hidden" name="saddr" value="' + CMS.siteConfig.mapLatitude + ',' + CMS.siteConfig.mapLongitude + "(" + CMS.siteConfig.markerTitle + ")" + '"/></form>';
   
			// The inactive version of the direction info
			CMS.siteConfig.map_html = contentString + '<p><small>Directions: <a href="javascript:CMS.siteConfig.mapToHere()">To here</a> - <a href="javascript:CMS.siteConfig.mapFromHere()">From here</a></small></p>';
			
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
			
			if(CMS.siteConfig.mapZoom === 14){				
				CMS.siteConfig.marker	= new google.maps.Marker({
					position:	mapLatlng,
					map:		CMS.siteConfig.map,
					title:		CMS.siteConfig.markerTitle
				});

				CMS.siteConfig.map_infowindow = new google.maps.InfoWindow({ 
					content: CMS.siteConfig.map_html,
					disableAutoPan : false
				});

				google.maps.event.addListener(CMS.siteConfig.marker, 'click', function() {
					CMS.siteConfig.map_infowindow.open(CMS.siteConfig.map, CMS.siteConfig.marker);
				});

				google.maps.event.addListener(CMS.siteConfig.map_infowindow, 'closeclick', function() {	
					CMS.siteConfig.map_infowindow.setContent(CMS.siteConfig.map_html);
				});
				
				//loaded fully
				google.maps.event.addListenerOnce(CMS.siteConfig.map, 'idle', function(){
				});
			}
			
			$(document).on('opened', '[data-reveal]', function () {
				var newCenter = CMS.siteConfig.map.getCenter();
				google.maps.event.trigger(CMS.siteConfig.map, "resize");
				CMS.siteConfig.map.setCenter(newCenter); 
				CMS.siteConfig.map_infowindow.open(CMS.siteConfig.map, CMS.siteConfig.marker);
			});
		},
	
		// functions that open the directions forms
		mapToHere: function() {
	
			CMS.siteConfig.map_infowindow.setContent(CMS.siteConfig.map_to_html);
			CMS.siteConfig.map_infowindow.open(CMS.siteConfig.map, CMS.siteConfig.marker);
		},
		
		mapFromHere: function() {
	
			CMS.siteConfig.map_infowindow.setContent(CMS.siteConfig.map_from_html);
			CMS.siteConfig.map_infowindow.open(CMS.siteConfig.map, CMS.siteConfig.marker);
		}
	},
			
	CMS.tgsUI = {

		init: function() {
			
			$('.is-Bf').hide();
			$('.is-Meters').hide();
			
			CMS.tgsUI.filtersFormInit();
			CMS.tgsUI.infinitePagination();
			CMS.tgsUI.equalHeights();
			CMS.tgsUI.enchanceUnitSwitch();
			
			// On debounced window resize
			$(window).smartresize(function(){
				CMS.tgsUI.equalHeights();
			});

		},
			
		enchanceUnitSwitch: function() {
	
			$('#switch-windSpeed').on('change', function(){
				
				if($(this).is(':checked')){
					CMS.tgsUI.unitConvertDisplay('knots');
					$('.switch-windSpeed span').text('KNOTS');
					$('.switch-windSpeed span').removeClass('switched');	
				}
				else{		
					CMS.tgsUI.unitConvertDisplay('bf');	
					$('.switch-windSpeed span').text('BF');	
					$('.switch-windSpeed span').addClass('switched');	
				}
			});
	
			$('#switch-height').on('change', function(){
				$('.switch-height span').toggleClass('switched');
				
				if($(this).is(':checked')){
					CMS.tgsUI.unitConvertDisplay('meters');	
					$('.switch-height span').text('M');
					$('.switch-height span').removeClass('switched');
				}
				else{
					CMS.tgsUI.unitConvertDisplay('ft');
					$('.switch-height span').text('FT');
					$('.switch-height span').addClass('switched');					
				}
			});
			
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
	
			$('.displayActiveStatus').on('click', function(){
				$(this).toggleClass('isActive');
				
				var accordionTriggers = $(this).closest('dl').find('a.displayActiveStatus').not(this);
				accordionTriggers.removeClass('isActive');
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
		},
			
		equalHeights: function(){
			var $parent   = $('[data-equalheights]');
			if ( $parent.length === 0 ) { return; }
			var $item     = $parent.data("equalheights").el;
			var $minWidth = $parent.data("equalheights").minwidth || 768;

			// Make auto when below this width
			if ($(window).width() < $minWidth) {
				$parent.find($item).css('height', 'auto');
				return;
			}

			var currentTallest  = 0;
			var currentRowStart = 0;
			var rowDivs         = [];
			var $el;
			var topPosition     = 0;

			$parent.find($item).each(function() {
				$el         = $(this);
				topPosition = $el.position().top;

				$el.css('height', 'auto');

				if (currentRowStart !== topPosition) {

					// we just came to a new row.  Set all the heights on the completed row
					for (var currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
						rowDivs[currentDiv].height(currentTallest);
					}

					// set the variables for the new row
					rowDivs.length = 0; // empty the array
					currentRowStart = topPosition;
					currentTallest = $el.height();
					rowDivs.push($el);

				} else {
					// another div on the current row.  Add it to the list and check if it's taller
					rowDivs.push($el);
					currentTallest = Math.max(currentTallest, $el.height());
				}

				// do the last row
				for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
					rowDivs[currentDiv].height(currentTallest);
				}
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
				
				tab: {
					callback : function (tab) {
					  CMS.tgsUI.equalHeights();
					}
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