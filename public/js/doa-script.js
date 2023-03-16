// tes amin doa

// $(document).ready(function () {
// 	$('.svg-like').on('click', function () {
// 		$('.svg-like svg path').toggleClass('fill-[#E15B88]');
// 		$('.amin-toggle').toggleClass('hidden');
// 	});
// });

$(document).ready(function () {
	$('.svg-like').on('click', function () {
		let path = $(this).find('svg path')
		// console.log('in')
		let id = $(this).data('id');
		console.log(`id = ${id}`)

		let status = $(path).attr('fill');
		console.log('status:' + status)

		if (status !== '#E15B88') {
			console.log('in')
			$(path).attr('fill', '#E15B88');
			$(`span.font-bold.hidden.amin-toggle[data-doa-id="${id}"]`).show();
			$.ajax({
				type: "post",
				url: `/increase-likes/${id}`,
				success: function (res) {
					console.log('success increase')
				}
			});
		} else {
			console.log('kembali')
			$(path).attr('fill', '#989898');
			$(`span.font-bold.hidden.amin-toggle[data-doa-id="${id}"]`).hide();
			$.ajax({
				type: "post",
				url: `/decrease-likes/${id}`,
				success: function (res) {
					console.log('success decrease')
				}
			});
		}
	});
});