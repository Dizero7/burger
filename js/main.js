	//Header navigation scroll blur
	const bgHeader = () =>{
		const header = document.getElementById('header')

		this.scrollY >=50 ? header.classList.add('header-scroll')
		: header.classList.remove('header-scroll')
	}
	window.addEventListener('scroll', bgHeader);

	//Bookings
	(function($){
		$('.reservation__form').submit( function(event){
			event.preventDefault();	
			var $form = $(this);
			var data = $form.serialize(); 

			$.post(window.admin_ajax_php.ajax_url + '?action=bookings', data, function(data){
				if(data.res){
					$form.find('.reservation__message').html('Thank you, your table has been booked.');
				}
				else{
					$form.find('.reservation__message').html(data.error);
				}
			},'json');
		});
		})(jQuery)