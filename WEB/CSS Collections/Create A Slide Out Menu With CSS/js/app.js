
$('.nav-slide, .nav-toggle').on('click', function(e) {
	e.preventDefault();
	$(this).parent().toggleClass('nav-open');
	//alert("lol");
});

