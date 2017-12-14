<?php
    session_start();  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <title>EllCupidon</title>
    </head>    
    <body>
<?php		
require_once "../functions/functions.php";
if ($_SESSION['logged_user']['role'] == 'moderator') {
	
	
	$mainPath = $_POST['project'];
	
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
	
if ($_POST['project'] == "furniture" || $_POST['project'] == "design") {
	
	$dir = "../portfolio/".$_POST['project']."/".$_POST['number'];

	function removeDirectory($dir) {
    if ($objs = glob($dir."/*")) {
       foreach($objs as $obj) {
         is_dir($obj) ? removeDirectory($obj) : unlink($obj);
       }
    }
		
		return rmdir($dir); 	
	}



	$error = removeDirectory($dir);

	
	if ($error == true) {
		echo "Папка проекта успешно удалена!<br>";
	} else { 
		echo "Ошибка удаления папки проекта! Проверьте правильность идентификатора.<br>";
	}
	
	$query1 = "DELETE FROM ".$tableProject." WHERE id=".$_POST['number'];
	$query2 = "DELETE FROM ".$tableGallery." WHERE project_id=".$_POST['number'];
	connectDB();
	
	$result = $mysqli->query($query1);
	
	$result += $mysqli->query($query2);
	echo $result;
	
	closeDB();	
}	
	
	
}

		echo  '<br><a href="../moderation7815318220.php">На главную</a><br>'; 
?>
	</body>
</html>