$(document).ready(function(){ 
    	
    $(document).on("click", ".order", function(){
		event.preventDefault();
		
        $("#order_wrap").css("display", "block");
		$("#dropdown-menu").animate({left: "-100%"}, 350);
		
		var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
		scrollTop = scrollTop-110;
		
		
		$("#order_wrap").css("top", scrollTop+"px");
		
		
		$("html").css("overflow-y", "hidden");
		
		 $(document).on("click", "#order_wrap", function(e){
			var id = e.target.id;
			if (id != "order_wrap"
				&& id != "order_close"
				) 
				return false;
			$("#order_wrap").css("display", "none");
			$("html").css("overflow-y", "scroll");
			$(document).off("click", "#order_wrap"); 
			 count = 0;
   		 }); 
    });    
});


var inputTel = document.getElementById("tel-input");
	var count = 0;
inputTel.addEventListener("keypress", function(event){
		
	if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode != 8)) {
		event.preventDefault();
		return false;
	} 
		
		if (count == 0 && event.keyCode == 56) {
			event.preventDefault();
			inputTel.value = "+7";
			count++;
			return false;
		}	
	
		if (count == 0 && event.keyCode != 56) {
			event.preventDefault();
			return false;
		}	
			
		if (count == 1 ){
			inputTel.value = inputTel.value+"(";
			count++;
			return false;
		}
		if (count == 4 ){
			inputTel.value = inputTel.value+")-";
			count++;
			return false;
		}
		if (count == 7 ){
			inputTel.value = inputTel.value+"-";
			count++;
			return false;
		}
		if (count == 9 ){
			inputTel.value = inputTel.value+"-";
			count++;
			return false;
		}
		if (count == 11 ){
			event.preventDefault();
			return false;
		}
		count++;
			
});

inputTel.addEventListener("keydown", function(event){
	if (event.keyCode == 8 && count > 0 ) {
		
		
		if (count == 10 ){
			event.preventDefault();			
			inputTel.value = inputTel.value.slice(0, -2);
			count--;
			return false;
		}
		
		if (count == 8 ){
			event.preventDefault();			
			inputTel.value = inputTel.value.slice(0, -2);
			count--;
			return false;
		}
		
		if (count == 5 ){
			event.preventDefault();			
			inputTel.value = inputTel.value.slice(0, -3);
			count--;
			return false;
		}
		
		
		
		if (count == 2 ){
			event.preventDefault();			
			inputTel.value = inputTel.value.slice(0, -2);
			count--;
			return false;
		}
		
		if (count == 1 ){
			event.preventDefault();			
			inputTel.value = inputTel.value.slice(0, -2);
			count--;
			return false;
		}
		
		count--;
		
	}
	
});

//-----------Отправка запроса

function CreateRequest()//кроссбраузерный запрос
{
    var Request = false;

    if (window.XMLHttpRequest)
    {
        //Gecko-совместимые браузеры, Safari, Konqueror
        Request = new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    {
        //Internet explorer
        try
        {
             Request = new ActiveXObject("Microsoft.XMLHTTP");
        }    
        catch (CatchException)
        {
             Request = new ActiveXObject("Msxml2.XMLHTTP");
        }
    }
 
    if (!Request)
    {
        alert("Невозможно создать XMLHttpRequest");
    }
    
    return Request;
} 

/*
Функция посылки запроса к файлу на сервере
r_method  - тип запроса: GET или POST
r_path    - путь к файлу
r_args    - аргументы вида a=1&b=2&c=3...
r_handler - функция-обработчик ответа от сервера
*/
function SendRequest(r_method, r_path, r_args, r_handler)
{
    //Создаём запрос
    var Request = CreateRequest();
    
    //Проверяем существование запроса еще раз
    if (!Request)
    {
        return;
    }
    
    //Назначаем пользовательский обработчик
    Request.onreadystatechange = function()
    {
			 //Если обмен данными завершен
		if (Request.readyState == 4)
		{
			if (Request.status == 200)
			{
				//Передаем управление обработчику пользователя
				r_handler(Request);
			}
			else
			{
				//Оповещаем пользователя о произошедшей ошибке
				document.getElementById("order").style.display = "none";
				document.getElementById("order-message").style.display = "block";
				
				document.getElementById("order-message").innerHTML = "Ошибка передачи запроса! Попробуйте обновить страницу.";
				
			}
		}
		else
		{
			//Оповещаем пользователя о загрузке
		}
    }
    
    //Проверяем, если требуется сделать GET-запрос
    if (r_method.toLowerCase() == "get" && r_args.length > 0)
    r_path += "?" + r_args;
    
    //Инициализируем соединение
    Request.open(r_method, r_path, true);
    
    if (r_method.toLowerCase() == "post")
    {
        //Если это POST-запрос
        
        //Устанавливаем заголовок
        Request.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=utf-8");
        //Посылаем запрос
        Request.send(r_args);
    }
    else
    {
        //Если это GET-запрос
        
        //Посылаем нуль-запрос
        Request.send(null);
    }
} 

var orderButton = document.getElementById("order-button");
orderButton.addEventListener("click", function(){
	
	var name = document.getElementById("input-name").value;
	var tel = document.getElementById("tel-input").value;
	var message = document.getElementById("message").value;
	
	if (name == "") {
		document.getElementById("input-name").placeholder = "Заполните это поле!";
		return false;
	}
	
	if (tel == "") {
		document.getElementById("tel-input").placeholder = "";
		setTimeout(function(){
			document.getElementById("tel-input").placeholder = "Заполните это поле!";
		}, 500);		
		return false;
	}
	
	var Handler = function(Request) {
  		document.getElementById("order").style.display = "none";
		document.getElementById("order-message").style.display = "block";
		
		
    }
	 
	SendRequest("POST","./functions/order.php","name="+name+"&tel="+tel+"&message="+message,Handler);

});


























