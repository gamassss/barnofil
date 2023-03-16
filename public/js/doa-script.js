// tes amin doa

// $(document).ready(function () {
// 	$('.svg-like').on('click', function () {
// 		$('.svg-like svg path').toggleClass('fill-[#E15B88]');
// 		$('.amin-toggle').toggleClass('hidden');
// 	});
// });

$(document).ready(function () {
	$('.svg-like').on('click', function () {
		// console.log('in')
		
		let status = $('.like-doa-icon').attr('fill');
		console.log(status)
		if (status !== '#E15B88') {
			console.log('in')
			$('.like-doa-icon').attr('fill', '#E15B88');
		} else {
			console.log('kembali')
			$('.like-doa-icon').attr('fill', '#989898');
		}
	});
});