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
					active_class: open,
					is_hover: true
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
					var formAction = $("#contactForm").attr("action");

					$.post(formAction, formData, function(responce) {

						$(".formError").remove();
						$("label.error").removeClass('error');

						if (responce.error === false) {
							$(".contentBlock.contact h3").html(responce.message);
						}
						else {
							$('<p class="formError round alert label alert-error">' + responce.message + '</p>').hide().insertAfter("#contactFormBtn");
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