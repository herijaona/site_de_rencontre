const navbarToggleMedium = $('.navbar-toggler-md');
const navbarToggle = $('.navbar-toggler');
const menuMedium = $('.menu-md');

$(document).ready( () => {
	navbarToggleMedium.click( () => {
		menuMedium.toggleClass('hide').toggleClass('show');
	})
	navbarToggle.click( () => {
		menuMedium.toggleClass('hide').toggleClass('show');
	});
})