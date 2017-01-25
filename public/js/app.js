$('.menu-btn').on('click', function(){
	$('.nav-small ul').toggleClass('out')
})

$('select').select2({
	tags: true
})