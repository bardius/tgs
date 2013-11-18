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
			// Configure settings for the Foundation Plugins
			CMS.foundationConfig.dropdownConfig();
			CMS.foundationConfig.revealConfig();
			CMS.foundationConfig.orbitConfig();
			
			// Start the foundation Javascript Plugins
			$(document).foundation();
			
			// Start the AJAX based contact form
			CMS.foundationConfig.contactForm();
		},
				
		dropdownConfig : function(){
			$(document).foundation('dropdown', {
				activeClass: 'open',
				is_hover: true
				/*opened: function(){},
				closed: function(){}*/
			});
		},
				
		revealConfig : function(){
			$(document).foundation('reveal', {
				animation: 'fadeAndPop',
				animationSpeed: 350,
				closeOnBackgroundClick: true,
				dismissModalClass: 'close-reveal-modal',
				bgClass: 'reveal-modal-bg'
				/*open: function(){},
				opened: function(){},
				close: function(){},
				closed: function(){},
				bg : $('.reveal-modal-bg'),
				css : {
				  open : {
					'opacity': 0,
					'visibility': 'visible',
					'display' : 'block'
				  },
				  close : {
					'opacity': 1,
					'visibility': 'hidden',
					'display': 'none'
				  }
				}*/
			});
		},
		
		orbitConfig : function(){
			$(document).foundation('orbit', {
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
				/*container_class: 'orbit-container',
				stack_on_small_class: 'orbit-stack-on-small',
				next_class: 'orbit-next',
				prev_class: 'orbit-prev',
				timer_container_class: 'orbit-timer',
				timer_paused_class: 'paused',
				timer_progress_class: 'orbit-progress',
				slides_container_class: 'orbit-slides-container',
				bullets_container_class: 'orbit-bullets',
				bullets_active_class: 'active',
				slide_number_class: 'orbit-slide-number',
				caption_class: 'orbit-caption',
				active_slide_class: 'active',
				orbit_transition_class: 'orbit-transitioning',
				before_slide_change: function(){},
				after_slide_change: function(){}*/
		  });			
	    },
		    
	    contactForm : function(){
		if($("#contactForm").length > 0){
		    
		    $("#contactForm #contactFormBtn").click(function(e){
			e.preventDefault();
			
			var formData = $("#contactForm").serializeArray();
			var formAction = $("#contactForm").attr("action");
		        
			$.post(formAction, formData, function(responce){
			
			    $(".formError").remove();			
			    $("label.error").removeClass('error');
			
			    if(responce.error === false){
			        $(".contentBlock.contact h3").html(responce.message);
			    }
			    else{
			        $('<p class="formError round alert label alert-error">' + responce.message + '</p>').hide().insertAfter("#contactFormBtn");
				$('.formError').fadeIn(200);
			    }
			});
		    });
		}
	    }
    };

})(window.CMS = window.CMS || {}, jQuery);