$(function() {
	var $commentForm = $('form#new_comment');

	if ($commentForm.length !== 0) {
		$commentForm.on('submit', function(e) {
			e.preventDefault();

			$.ajax({
				url: '/new_comment.php',
				type: 'POST',
				data: $commentForm.serialize()
			})
			.done(function(response) {
				$('#comments').append(response);
				$('textarea', $commentForm).val('');
			})
			.fail(function() {
				alert('An error occurred.');
			});
		});
	}
});