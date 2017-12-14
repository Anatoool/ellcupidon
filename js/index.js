
//нимация мебели
	var interierImg = document.getElementById("interier-img");
	
	interierImg.addEventListener("mouseover", function(event){
		event.target.src = "./img/index/den.png";
//		document.getElementById("interier-col").style.backgroundColor = "#39bbd3";
	});
	
	interierImg.addEventListener("mouseout", function(event){
		event.target.src = "./img/index/noch.png";
//		document.getElementById("interier-col").style.backgroundColor = "#34afc6";
	});

var enable = true;
var enableFront = true;
var enableBack = false;

var mebelImg = document.getElementById("mebel-img");

mebelImg.addEventListener("mouseover", function(event) {
	rotateFront(event.target);	
	//event.target.src = "./img/index/den-mebel.png";
	//document.getElementById("mebel-col").style.backgroundColor = "#67d7eb";
});
	
	mebelImg.addEventListener("mouseout", function(event){
		
		rotateBack(event.target);	
		enableBack = true;
		//event.target.src = "./img/index/noch-mebel.png";
		//document.getElementById("mebel-col").style.backgroundColor = "#63c6d8";
	});

function rotateFront(event) {
	if (enableFront == true && enable == true) {
		enableFront = false;
		enable = false;
		var start = Date.now(); // сохранить время начала

		var timer = setInterval(function() {
		// вычислить сколько времени прошло из opts.duration
		var timePassed = Date.now() - start;

		event.style.transform = "rotateY("+(timePassed/1.6666667)+"deg)";

		if (timePassed >= 150) event.src = "./img/index/den-mebel.png";
		if (timePassed >= 300) {
			clearInterval(timer);
			enable = true;			
			enableBack = true;
		}

	  }, 20);
	}
}
		
function rotateBack(event) {
	if (enableBack == true && enable == true) {
		enable = false;
		enableBack == false
		var start = Date.now(); // сохранить время начала

		var timer = setInterval(function() {
		// вычислить сколько времени прошло из opts.duration
		var timePassed = Date.now() - start;

		event.style.transform = "rotateY(-"+((300-timePassed)/1.6666667)+"deg)";

		if (timePassed >= 150) event.src = "./img/index/noch-mebel.png";
		if (timePassed >= 300) {
			clearInterval(timer);
			enable = true
			enableFront = true;
		}

	  }, 20);
	}
}

isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };



if (isMobile.any()) {
	
	var queue = false;
	
    var timerAnimate = setInterval(function() {
		// вычислить сколько времени прошло из opts.duration
		
		if (queue == false) {
			rotateFront(mebelImg);
			interierImg.src = "./img/index/den.png";
			queue = true;
		} else {
			rotateBack(mebelImg);
			interierImg.src = "./img/index/noch.png";
			queue = false;
		}

	  }, 3500);
}

