$(document).ready(function() {
	function heightDetect() {
		$(".s_header").css("height", $(window).height());
	};
	$("#portfolio_grid").mixItUp();
	$(".s_portfolio li").click(function() {
		$(".s_portfolio li").removeClass("active");
		$(this).addClass("active");
	});
	$(".popup").magnificPopup({type:"image"});
	$(".popup_content").magnificPopup({
		type:"inline",
		midClick: true
	});
	heightDetect();
	$(window).resize(function() {
		heightDetect();
	});
	new WOW().init();
	$('.toggle-menu').on('click', function(e) {
	  e.preventDefault;
	  $(this).toggleClass('toggle-menu_active');
	});
	$(".top-menu ul a").click(function() {
		$(".top-menu").fadeOut(600);
		$(".toggle-menu").toggleClass("toggle-menu_active");
		$(".top-wrapper").css("opacity", "1");
	});
	$(".toggle-menu").click(function() {
		if ($(".top-menu").is(":visible")) {
			$(".top-wrapper").css("opacity", "1");
			$(".top-menu").fadeOut(600);
			$(".top-menu li a").removeClass("fadeInUp animated");
		} else {
			$(".top-wrapper").css("opacity", ".1");
			$(".top-menu").fadeIn(600);
			$(".top-menu li a").addClass("fadeInUp animated");
		};
	});
	$(".portfolio_item").each(function(i) {
		$(this).find("a").attr("href", "#work_" + i);
		$(this).find(".podrt-descr").attr("id", "work_" + i);
	});
	$("input, select, textarea").jqBootstrapValidation();
	$(".top-menu ul a").mPageScroll2id();
	$(".top-wrapper .header-btn a").mPageScroll2id();
	$("#phone").mask("+38 (099) 999 99 99");

});
$(window).load(function() {


}); 