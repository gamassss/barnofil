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
		let user_id = $(this).data('user-id');
		let program_id = $(this).data('program-id');
		console.log(user_id)
		console.log(program_id)

		let status = $(path).attr('fill');
		console.log(status)

		if (status !== '#E15B88') {
			console.log('in')
			$(path).attr('fill', '#E15B88');
		} else {
			console.log('kembali')
			$(path).attr('fill', '#989898');
		}
	});
});