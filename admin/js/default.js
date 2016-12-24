// ketika di klik akan menampilkan sub menu
$(document).ready(function(){
	$('[data-toggle="offcanvas"]').click(function(){
		$('#side-menu').toggleClass('hidden-xs');
	});
});