// tes amin doa

$(document).ready(function () {
	$('.svg-like').on('click', function () {
		// $('.svg-like svg path').attr('fill', '#E15B88');
		$('.svg-like svg path').toggleClass('fill-[#E15B88]');
		$('.amin-toggle').toggleClass('hidden');
	});
});