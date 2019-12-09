//Welcome-Section Scroll Effect
//scroll to top on page refresh (PART1)
window.onbeforeunload = function () {
window.scrollTo(0, 0);
}
//for arrow click part (PART2)
$(document).ready( function () {
$('#down').on('click',function () {
$("html").scrollTop(0);
$('html, body').animate({
	scrollTop: $('#about').offset().top
}, 500);
});
});

//Navbar Scroll Effect
$(function(){
	$(document).scroll(function(){
		var $nav = $("#main-nav");
		var $welcome = $("#welcome-section")
		$nav.toggleClass("scrolled" , $(this).scrollTop() > $welcome.height());
	})
})

