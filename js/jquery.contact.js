
(function($) { 
	"use strict";
jQuery(document).ready(function(){
	$('#cform').submit(function(){

		var action = $(this).attr('action');

		var langu = $('#gjuha').text();
		var langu =langu.toString();
		console.log(langu);

		$("#message").slideUp(function() {
		$('#message').hide();

 		$('#submit')
			.before('<img src="images/ajax-loader.gif" class="contact-loader" />')
			.attr('disabled','disabled');

		$.post(action, {
			name: $('#name').val(),
			email: $('#email').val(),
			comments: $('#comments').val(),
			lang: langu,
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#cform img.contact-loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#cform').slideUp('slow');
			}
		);

		});

		return false;

	});

});
}(jQuery));