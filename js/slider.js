/*Адаптивность слайдера*/
function slider_height_resize() {
    var width =  $("#slider-img").css("width");
	
	width = (width.substr(0, width.length - 2));
	
	if (width < 900) {
		$("#slider-next").css("width", "60px");
		$("#slider-prev").css("width", "60px");
	} else {
		$("#slider-next").css("width", "80px");
		$("#slider-prev").css("width", "80px");
	}
	
    width = width*0.45;
	
    if (width > 1100) width = 1100;
    $("#slider-img").css("height", width+"px");
    
    //-----------------центрирование кнопок
    $("#slider-container").css("height", width+"px");
    $("#slider-prev").css("height", "100%");
    $("#slider-prev").css("line-height", width+"px");
    
    $("#slider-next").css("height", "100%");
    $("#slider-next").css("line-height", width+"px");
    
    //сдвиг подписи слайдера
    $(".link-info").css("right", $("#slider-next").css("width"));
    
}    



$(document).ready(function(){
    slider_height_resize();
    $(window).resize(function(){
        slider_height_resize();
    });
});
/**/
function prev_slide() {
    
    if (allow == true) {
        allow = false;    
        $("#slider li:eq(0)").animate({
          'left': "0%"
        },400, function() {        
        });
         $("#slider li:eq(1)").animate({
          'left': "100%"
        },400, function() {  
             $("#slider li:eq(2)").css("left", "-100%");
             $("#slider li:eq(2)").prependTo("#slider"); 
             allow = true;
        });
    }
}

var allow = true;

function next_slide() {
        
    if (allow == true) {
        allow = false;
        $("#slider li:eq(2)").animate({
        'left': "0%"
        },400, function() {        
        });

        $("#slider li:eq(1)").animate({
          'left': "-100%"
        },400, function() { 
            $("#slider li:eq(0)").css("left", "100%");
            $("#slider li:eq(0)").appendTo("#slider");
            allow = true;
        });
    }    
}





$(document).ready(function(){
    $("#slider-next").on("click", next_slide);
    $("#slider-prev").on("click", prev_slide);
	
var slide_time = setInterval(function() {
  		next_slide();
	}, 10000);
});



function handleGesure() {
    
    if (touchendX < touchstartX) {
        next_slide();
    }
    
    if (touchendX > touchstartX) {
        prev_slide();
    }
}

$(document).ready(function(){
    
    var touchstartX = 0;
    var touchendX = 0;
    
    var gesuredZone = document.getElementById('slider-img');

   gesuredZone.addEventListener('touchstart', function(event) {
       touchstartX = event.changedTouches[0].pageX;
    }, false);

    gesuredZone.addEventListener('touchend', function(event) {
        touchendX = event.changedTouches[0].pageX;
        
        if (touchendX < touchstartX && (touchstartX - touchendX)>10 ) {
            next_slide();
        } else
            if (touchendX > touchstartX && (touchendX - touchstartX)>10)
        {
            prev_slide();
        }
    }, false);    
    
});








