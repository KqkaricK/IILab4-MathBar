$(document).ready(function() {
	$('.next').click(function() {
		var current = $('.photo.curry');
		var currindex = $('.photo.curry').index();
		var nextindex = currindex+1;
		var nextimg = $('.photo').eq(nextindex);
		current.fadeOut(1000);
		current.removeClass('curry');
		
		if(nextindex == ($('.photo:last').index()+1)){	
			$('.photo').eq(0).fadeIn(1000);
			$('.photo').eq(0).addClass('curry');
			
		} else {
			nextimg.fadeIn(1000);
			nextimg.addClass('curry');
		}
	});

	$('.prev').click(function() {
		var current = $('.photo.curry');
		var currindex = current.index();
		var previndex = currindex-1;
		var previmg = $('.photo').eq(previndex);
		current.removeClass('curry');
		current.fadeOut(500);
		
		current.fadeOut(1000);
		current.removeClass('curry')
		previmg.fadeIn(1000);
		previmg.addClass('curry');
		
	});
});