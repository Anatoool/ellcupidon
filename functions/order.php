<?php

$message = "Поступила новая заявка на сайт\nИмя: ".$_POST["name"]."\nТелефон: ".$_POST["tel"]."\nСообщение: ".$_POST["message"];
	
	echo $message;

mail("ellcupidon@yandex.ru", "Новая заявка", $message); 
mail("anatoool@yandex.ru", "Новая заявка", $message);

?>