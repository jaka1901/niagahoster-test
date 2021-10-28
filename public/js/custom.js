'use strict';

$('.nav-button-trigger').on('click', function(e){
	e.preventDefault()

	$('.navbar-second .navbar-menu').toggleClass('show')
})