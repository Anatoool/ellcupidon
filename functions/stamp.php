<?php

function getStamp ($file, $stamp) {
    // Загрузка штампа и фото, для которого применяется водяной знак (называется штамп или печать)
	$im = imagecreatefromjpeg($file);

	// Сначала создаем наше изображение штампа вручную с помощью GD
	$stamp = imagecreatefrompng($stamp);
	//imagefilledrectangle($stamp, 0, 0, 99, 69, 0x0000FF);
	//imagefilledrectangle($stamp, 9, 9, 90, 60, 0xFFFFFF);
	//imagestring($stamp, 5, 20, 20, 'libGD', 0x0000FF);
	//imagestring($stamp, 3, 20, 40, '(c) 2007-9', 0x0000FF);

	// Установка полей для штампа и получение высоты/ширины штампа
	$marge_right = 30;
	$marge_bottom = 15;
	$sx = imagesx($stamp);
	$sy = imagesy($stamp);

	// Слияние штампа с фотографией. Прозрачность 50%
	imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

	// Сохранение фотографии в файл и освобождение памяти
	imagejpeg($im, $file);
	imagedestroy($im);
	imagedestroy($stamp);
}

//echo '<img src="photo_stamp.jpg" style="width: 600px;">';
?>


