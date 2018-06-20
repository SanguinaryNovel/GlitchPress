$(document).ready( function() {
//	Toggle menu
	$('.btn-toggle').click(function(){
	    $(this).toggleClass('is-active');
	    $('body').toggleClass('is-active-menu');
	    $('.navigation').toggleClass('is-active');
	});
	$('.navigation').click(function(){
	    $(this).toggleClass('is-active');
	    $('body').toggleClass('is-active-menu');
	    $('.btn-toggle').toggleClass('is-active');
	});
});