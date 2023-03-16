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
		let id = $(this).data('id');
		let status = $(path).attr('fill');

		if (status !== '#E15B88') {
			$(path).attr('fill', '#E15B88');
			$(`span.font-bold.hidden.amin-toggle[data-doa-id="${id}"]`).show();
			$.ajax({
				type: "post",
				url: `/increase-likes/${id}`,
				success: function (res) {

				}
			});
		} else {
			$(path).attr('fill', '#989898');
			$(`span.font-bold.hidden.amin-toggle[data-doa-id="${id}"]`).hide();
			$.ajax({
				type: "post",
				url: `/decrease-likes/${id}`,
				success: function (res) {

				}
			});
		}
	});
});