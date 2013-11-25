(function(CMS, $) {

    $(function() {
		CMS.foundationConfig.init();
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
			CMS.foundationConfig.contactForm();
		},
		    
	    contactForm: function() {
			if ($("#contactForm").length > 0) {

				$("#contactForm #contactFormBtn").click(function(e) {
					e.preventDefault();

					var formData = $("#contactForm").serializeArray();
					formData.push({name: "isAjax", value: "true"});
					
					var formAction = $("#contactForm").attr("action");

					$.post(formAction, formData, function(responce) {

						$(".formError").remove();
						$("label.error").removeClass('error');

						if (responce.hasErrors === false) {
							$(".contentBlock.contact h3").html(responce.formMessage);
						}
						else {
							if (responce.errors !== null) {
								
								var errorArray = responce.errors;
								console.log(errorArray);
								
								$.each(errorArray, function(key, val) {
									console.log(key);
									console.log(val[0]);
									// find type of input, return validation
									$('#contactform_' + key).addClass('error');
									$('#contactform_' + key).after($('<small class="formError error">' + val[0] + '</small>').hide());	
								});
							}
							
							$('<small class="formError error">' + responce.formMessage + '</small>').hide().insertAfter("#contactFormBtn");
							
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