

$( document ).ready(function() {
    $('a:has(ul)').click(function(e) {
		$(".dropdown-menu").not($("ul", this)).slideUp("fast")
		.next()
		$(this).find('ul').slideToggle("fast")
		.end();
	});
});