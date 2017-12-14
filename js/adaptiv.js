$(document).ready(function(){
	
	$(".service-img, .stage-img").on("mouseover click", function (event) {
		$(event.target).animate({
			left: "-11px"
		}, 100, function() {
				$(event.target).animate({
				left: "10px"
			}, 100, function() {
					$(event.target).animate({
					left: "-6px"
				}, 100, function() {
							$(event.target).animate({
						left: "5px"
					}, 100, function() {
							$(event.target).animate({
							left: "0px"
						}, 100, function() {
							// Animation complete.
						});
					});
				});
			});
		});
	});
	
	
	
});