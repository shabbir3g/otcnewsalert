 (function ($) {
	"use strict";
	
	$(function() {
	 $('.countdown.callback').countdown({
	 date: +(new Date) + 86400000+86400+57600+1715000,
	 render: function(data) {
	 $(this.el).html("<div class='count-div big'><div class='count-days'>" + this.leadingZeros(data.days, 2) + "</div><span>Days</span></div><div></div><div class='threecount-mid'><div class='count-div'><div class='count-days'>" + this.leadingZeros(data.hours, 2) + "</div><span>H</span></div><div></div><div class='count-div'><div class='count-days'>" + this.leadingZeros(data.min, 2) + "</div><span>M</span></div><div></div><div class='count-div'><div class='count-days'>" + this.leadingZeros(data.sec, 2) + "</div><span>S</span></div></div>");},onEnd: function() {
	 $(this.el).addClass('ended');
	 }
	 });
		 
		 
		 
});


$(window).scroll(function () {
	if ($(this).scrollTop() > 200) {
		$('.menu-top').fadeIn();
	} else {
		
		$('.menu-top').fadeOut();
	}
});



$(document).ready(function() {
 var $liCollection = $(".how-it-works-right li");
 var $firstListItem = $liCollection.first();
 $liCollection.first().addClass("active");
 setInterval(function() {
 var $activeListItem = $(".active")
 $activeListItem.removeClass("active");
 var $nextListItem = $activeListItem.closest('li').next();
 if ($nextListItem.length == 0) {
 $nextListItem = $firstListItem;
 }
 $nextListItem.addClass("active");
 }, 1500);
 });

 wow = new WOW(
 {
 animateClass: 'animated',
 offset:       100,
 callback:     function(box) {
 console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
 }
 }
 );
 wow.init();
 document.getElementById('moar').onclick = function() {
 var section = document.createElement('section');
 section.className = 'section--purple wow fadeInDown';
 this.parentNode.insertBefore(section, this);
 };
 
 
		 
 $(document).ready(function () {
         var vid = document.getElementById('video_player');
         window.scroll = false;
         vid.onpause = function () {
         // alert("The video has been paused");
         // alert(window.scroll);
         };
         var vid = vid.pause();
         $(window).scroll(function () {
         if (window.scroll == false) {
         var hT = $('#scroll-to').offset().top;
         var hH = $('#scroll-to').outerHeight();
         var wH = $(window).height();
         var wS = $(this).scrollTop();
         if (wS > (hT + hH - wH)) {
         unmuteButton.addEventListener('click', function () {
         video.muted = false;
         });
         document.getElementById('video_player').play();
         $('.video-section').attr("id", "newId");
         window.scroll = true;
         }
         }
         });
         });
}(jQuery));