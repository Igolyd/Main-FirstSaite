(function() {
	
	function Slideshow( element ) {
		this.el = document.querySelector( element );
		this.init();
	}
	
	Slideshow.prototype = {
		init: function() {
			this.wrapper = this.el.querySelector( ".slider-wrapper" );
			this.slides = this.el.querySelectorAll( ".slide" );
			this.previous = this.el.querySelector( ".slider-previous" );
			this.next = this.el.querySelector( ".slider-next" );
			this.index = 0;
			this.total = this.slides.length;
			
			this.actions();	
		},
		_slideTo: function( slide ) {
			var currentSlide = this.slides[slide];
			currentSlide.style.opacity = 1;
			
			for( var i = 0; i < this.slides.length; i++ ) {
				var slide = this.slides[i];
				if( slide !== currentSlide ) {
					slide.style.opacity = 0;
				}
			}
		},
		actions: function() {
			var self = this;
			self.next.addEventListener( "click", function() {
				self.index++;
				self.previous.style.display = "block";
				
				if( self.index == self.total - 1 ) {
					self.index = self.total - 1;
					self.next.style.display = "none";
				}
				
				self._slideTo( self.index );
				
			}, false);
			
			self.previous.addEventListener( "click", function() {
				self.index--;
				self.next.style.display = "block";
				
				if( self.index == 0 ) {
					self.index = 0;
					self.previous.style.display = "none";
				}
				
				self._slideTo( self.index );
				
			}, false);
		}
		
		
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		
		var slider = new Slideshow( "#main-slider" );
		
	});
	
	
})();
$(document).ready (function(){
	$('#Profile').on("click", function(){
		$('#BlockProvile').toggle();
	});
	$('.bblock a').on('click', function() {

		let href = $(this).attr('href');
	
		$('html, body').animate({
			scrollTop: $(href).offset().top
		}, {
			duration: 330,   // по умолчанию «400» 
			easing: "linear" // по умолчанию «swing» 
		});
	
		return false;
	});
});
function checkAvailability() {
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "XP.php",
	data:'login='+$("#login").val(),
	type: "POST",
	success:function(data){
	$("#user-availability-status").html(data);
	$("#loaderIcon").hide();
	},
	error:function (){}
	});
}
function checkAvailabilityEmail() {
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "XP.php",
	data:'email='+$("#email").val(),
	type: "POST",
	success:function(data){
	$("#user-email").html(data);
	$("#loaderIcon").hide();
	},
	error:function (){}
	});
}
function checkAvailabilityComment() {
	jQuery.ajax({
	url: "XP.php",
	data:'comment='+$("#comment").val(),
	type: "POST",
	success:function(data){
	$("#error_comment").html(data);
	},
	error:function (){}
	});
}
// window.addEventListener("resize", changeCss); //Масштабируем страницу при растягивании окна

// changeCss(); //Масштабируем страницу после загрузки

// function  changeCss() {
// var w = window.innerWidth;
// if(w >= '1600' && w <= '3440'){
// 	document.getElementById("stylesheet").href="normal.css";
// }
// else if(w < '1600' && w >= '1024'){
// 	document.getElementById("stylesheet").href="small.css";
// }
// else if(w <= '5120' && w > '3440')
// document.getElementById("stylesheet").href="big.css";
// }