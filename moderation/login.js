function funcBefore(){
}

function funcSuccess(data){//data - информация с контента, вернувшаяся обратно 
	
    if (data == 0){
        $("#login_answer").css("display", "block");
        $("#log_in_form input[type='password']").val("");
    } 
    else {
		location.reload();;
	}
}

$(document).ready (function (){
    $("#login_button").on("click", function() {
        var name = $("#log_in_form input[name='login']").val();
        var password = $("#log_in_form input[name='password']").val();
        $.ajax ({
            url: "./moderation/login.php",
            type: "POST",
            data: ({name: name, password: password}),
            dataType: "html",
            beforeSend: funcBefore,
            success: funcSuccess
        });
    });
});
    