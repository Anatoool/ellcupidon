$(document).ready(function(){
	$("#header ul a, #slider li a").on("click", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		
		if (this.id != "sections" && this.id != "header-logo-link" && this.className != "order" ) {
			
			event.preventDefault();

			//забираем идентификатор бока с атрибута href
			var id  = $(this).attr('href');
			if (id[2] == "i") {
				id = id.substr(14);
			} else {
				id = id.substr(11);
			}

			//узнаем высоту от начала страницы до блока на который ссылается якорь
			var top = $(id).offset().top;


			//анимируем переход на расстояние - top за 1500 мс

			$('body,html').animate({scrollTop: top}, 1500);
		}
	});
});

