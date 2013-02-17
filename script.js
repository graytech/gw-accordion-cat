
(function ($) {
	
	$(document).ready(function () {
		$('.gwaccat-cat-body').hide();
		$('.gwaccat-cat-start').closest('.gwaccat-cat').find('.gwaccat-icon').html('+');
		$('.gwaccat-cat-start').show();
		$('.gwaccat-cat-header').on('click', function () {
			var $tbody = $(this).closest('.gwaccat-cat').find('.gwaccat-cat-body');
			var $icon = $(this).closest('.gwaccat-cat').find('.gwaccat-icon');
			if ($tbody.css('display') == 'none') {
				$icon.html('+');
			} else {
				$icon.html('-');
			}
			$tbody.toggle(100);
		});
	});
	
})(jQuery);