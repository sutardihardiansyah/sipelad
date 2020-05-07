$(document).ready(function () {

	// tombol hapus
	$('body').on('click', '.btn-delete', function (e) {
		e.preventDefault();

		let href = $(this).attr('href');
		let title = $('.section-header h1').text();

		Swal.fire({
			title: 'Apakah anda yakin',
			text: title + ' akan dihapus',
			type: 'question',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus Data!'
		}).then((result) => {
			if (result.value) {
				document.location.href = href;
			}
		});

	})
})
