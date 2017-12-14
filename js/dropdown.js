function dropmenuSH() {
	if ($("#dropdown-menu").css("left")!="0px")	$("#dropdown-menu").animate({left: 0}, 350);
		else
			$("#dropdown-menu").animate({left: "-100%"}, 350);
}

//--------------------------dropdown-menu

$(document).ready(function(){
	$("#menu-button, #dropdown-ul a").on("click", function () {
		dropmenuSH();
	});
	
	$("#img-sections").on("mouseover", function (event) {
		$(event.target).animate({
			width: "50px",
			height: "50px",
			top: "15px"
		}, 400, function() {
			$(event.target).animate({
				width: "40px",
				height: "40px",
				top: "20px"
				}, 400, function() {
				
			});		
		});
	});
});

//#img-sections {
//	width: 40px;
//	height: 40px;
//	position: absolute;
//	right: 20px;
//	top: 20px;
//}

