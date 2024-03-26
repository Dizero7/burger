	//Header navigation scroll blur
	const bgHeader = () =>{
		const header = document.getElementById('header')

		this.scrollY >=50 ? header.classList.add('header-scroll')
		: header.classList.remove('header-scroll')
	}
	window.addEventListener('scroll', bgHeader);

	//Bookings
	(function($){
		$('#reservation_form').submit( function(event){
			event.preventDefault();
			var endpoint = admin_ajax_php.ajax_url;
			var form = $('#reservation_form').serialize();
			var formdata = new FormData;
	
			formdata.append('action', 'enquiry');
			formdata.append('enquiry', form);
	
			$.ajax(endpoint, {
	
				type: 'POST',
				data: formdata,
				processData: false,
				contentType: false,
	
				success: function(res){
					alert(res.data);
				}
			})
		})
		})(jQuery)