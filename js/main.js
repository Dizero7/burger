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
				categories: categories,
				page: 1
			},
			success: function(response) {
				$('.menu__items').html(response);
				$('.menu__show-more-btn').data('page-number', 2);
			}
		});
	}

	updatePosts();

	$('.menu__filter-checkbox').on('change', function() {
			updatePosts();
	});

	$(document).on('click', '.menu__show-more-btn', function() {
		var pageNumber = $(this).data('page-number');
		var categories = [];
		$('.menu__filter-checkbox:checked').each(function() {
				categories.push($(this).val());
		});

		$.ajax({
			url: admin_ajax_php.ajax_url,
			type: 'post',
			data: {
				action: 'filter_posts',
				categories: categories,
				page: pageNumber
			},
			success: function(response) {
				$('.menu__items').append(response);
				pageNumber++;
				$('.menu__show-more-btn').data('page-number', pageNumber);
			}
		});
	});
});

//Header navigation adaptive
const headerMenu = document.getElementById('header-menu'),
headerToggle = document.getElementById('header-toggle'),
headerClose = document.getElementById('header-close')

if(headerToggle){
	headerToggle.addEventListener('click', () =>{
		headerMenu.classList.add('open')
	})
}

if(headerClose){
	headerClose.addEventListener('click', () =>{
		headerMenu.classList.remove('open')
	})
}

