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

			$('#notice-formBtn').on('click', function(e) {
				e.preventDefault();

				var formData = $('#notice-form').serializeArray();
				var url = $('#notice-form').attr('action');
				var message = '';
				
				if ($('input.email').val() != '') {
					$.post(url, formData, function(data) {
						console.log(data);
						$('#notice-form .error').remove();

						if (data == 'success')
						{
							$(".ucForm").html('<h4>Thank you for contacting us,<br /> we will be in touch soon</h4>');
						}
						else
						{
							if (data == 'email error') {
								message = 'Please enter a valid e-mail address';
							}
							else {
								message = 'An error occured. Please try again later.';
							}

							$('<small class="error">' + message + '</small>').insertBefore("#notice-formBtn").hide();
							$('#notice-form .error').fadeIn(300);			
						}
					});
				}
				else{
					message = 'Please enter a valid e-mail address';
					$('#notice-form .error').remove();
					$('<small class="error">' + message + '</small>').insertBefore("#notice-formBtn").hide();
					$('#notice-form .error').fadeIn(300);					
				}
			});
		}
	};

})(window.CMS = window.CMS || {}, jQuery);