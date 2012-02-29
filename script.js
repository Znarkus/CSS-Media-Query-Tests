
(function () {
	function resized() {
		$('#real_data').text('Screen: ' + window.screen.width + 'x' + window.screen.height
			+ '. Window: ' + $(window).width() + 'x' + $(window).height());
	}
	
	$(window).resize(resized);
	resized();
	
	
	var viewport = $('head meta[name="viewport"]').attr('content');
	$('#viewport').change(function () {
		if ($(this).val()) {
			location = './?viewport=' + encodeURIComponent($(this).val());
		} else {
			location = './';
		}
		
	}).find('option').each(function () {
		var $o = $(this);
		if ($o.val() === viewport) {
			$o.attr('selected', 'selected');
		}
	});
}());
