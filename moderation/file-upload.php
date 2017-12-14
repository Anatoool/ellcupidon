<?php
    session_start();  
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
         <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>     
        <title>EllCupidon</title>
    </head>    
    <body>
        <?php
	require_once "../functions/functions.php";
	require_once "../functions/stamp.php";
if ($_SESSION['logged_user']['role'] == 'moderator') {
//выясняем с каким проектом работать
$tableProject = 0;
$tableGallery = 0;
if ($_POST['project'] == "furniture") {
	$tableProject = "projectfurniture";
	$tableGallery = "furnituregallery";
}	
else {
	$tableProject = "projectdesign";
	$tableGallery = "designgallery";
} 

	connectDB();
        $maxId = $mysqli->query("SELECT MAX(id) AS id FROM ".$tableProject);

        $row = $maxId->fetch_assoc();
		$maxId = $row['id'];//текущий максимум
		$id = ++$maxId;
     closeDB();

$uploaddir = "../portfolio/".$_POST['project']."/".$id."/";
echo $uploaddir;

mkdir($uploaddir, 0777);

//	echo $_POST['project'];
//	echo "<br>";
//	echo $_POST['caption'];
//	echo "<br>";
//	echo $_POST['description'];
//	echo "<br>";
//	echo $_POST['youtube'];
	echo "<br>";
	//echo count($_FILES['userfile2']['name']);
//$image = imagecreatefromstring(file_get_contents($_FILES['userfile1']['tmp_name']));		
//$exif = exif_read_data($_FILES['userfile1']['tmp_name']);
//		print_r($exif['Orientation']);
//		
//		if(!empty($exif['Orientation'])) {
//    switch($exif['Orientation']) {
//        case 8:
//            $image = imagerotate($image,90,0);
//            break;
//        case 3:
//            $image = imagerotate($image,180,0);
//            break;
//        case 6:
//            $image = imagerotate($image,-90,0);
//            break;
//    }
//}
//imagejpeg($image, '../portfolio/simpletext.jpg');	

		
//загрузка основного изображения
$extension = end(explode(".", basename($_FILES['userfile1']['name'])));
		
if (move_uploaded_file($_FILES['userfile1']['tmp_name'], 	$uploaddir."1.".$extension)) {
    print 'Основной файл успешно заружен. <a href="../moderation7815318220.php">На главную</a><br>'; 
	
	getStamp($uploaddir."1.".$extension, "../functions/stamp.png");
		
connectDB();
	
$result = $mysqli->query("INSERT INTO ".$tableProject." (id, text, extension, name, description) VALUES(".$id.", '1', '".$extension."', '".$_POST['caption']."', '".$_POST['description']."')");

$result = $mysqli->query("INSERT INTO ".$tableGallery." (project_id, type, name, extension) VALUES(".$id.", 'photo', '"."1"."', '".$extension."')");
	
closeDB();	
}
else { 
		print "Ошибка загрузки основного файла!!!<br>";	 
	 }
	
//Загрузка остальных изображений
for ($i = 0; $i < count($_FILES['userfile2']['name']); $i++){
	
	$extension = end(explode(".", basename($_FILES['userfile2']['name'][$i])));
	
	if (move_uploaded_file($_FILES['userfile2']['tmp_name'][$i], 	$uploaddir.($i+2).".".$extension)) {
		echo "Файл №".($i+1)." Загружен успешно!<br>";
		
		connectDB();
		$result = $mysqli->query("INSERT INTO ".$tableGallery." (project_id, type, name, extension) VALUES(".$id.", 'photo', '".($i+2)."', '".$extension."')");
		closeDB();		
		
		getStamp($uploaddir.($i+2).".".$extension, "../functions/stamp.png");
	}
		
	else echo "Файл №".($i+1)." не загружен!!<br>";
}
		
//загрузка видео
	
if($_POST['youtube'] != "") {
	
	connectDB();

	$result = $mysqli->query("INSERT INTO ".$tableGallery." (project_id, type, name) VALUES(".$id.", 'video', "."'".$_POST['youtube']."')");

	echo "Файл с Youtube загружен успешно!";
	closeDB();
}
}
?>

      
     </body>
</html>




























