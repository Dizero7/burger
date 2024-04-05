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

//Menu
jQuery(document).ready(function($) {
	$('.menu__filter-checkbox').prop('checked', true);
	function updatePosts() {
		var categories = [];
		$('.menu__filter-checkbox:checked').each(function() {
			categories.push($(this).val());
		});

		$.ajax({
			url: admin_ajax_php.ajax_url,
			type: 'post',
			data: {
				action: 'filter_posts',
				categories: categories
			},
			success: function(response) {
				$('.menu__items').html(response);
			}
		});
	}

	updatePosts();

	$('.menu__filter-checkbox').on('change', function() {
		updatePosts();
	});
});