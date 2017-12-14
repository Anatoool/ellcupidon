
<?php 

$mysqli = false;
    
function connectDB () {
    global $mysqli;
	$mysqli = new mysqli("localhost", "root","", "ellcupidon");
	
	
//	$mysqli = new mysqli("localhost", "ci21522_ell", "9312358134ellIrina", "ci21522_ell");
	
	
//    $mysqli = new mysqli("mysql.hostinger.ru", "u101168504_aaaaa","7815318220", "u101168504_aaaaa");
//    $mysqli->query("SET NAMES 'utf8'");
}

function closeDB () {
    global $mysqli;
    $mysqli->close();
}


function resultToArray($result) {
    $array = array ();
    while (($row = $result->fetch_assoc()) != false)
        $array[] = $row;
    return $array;
}


function getProjectsMain($a, $b, $c) {
	global $mysqli;
    connectDB();	
	
	if ($c == "/mebel.php")
		$table = "projectfurniture";
	else $table = "projectdesign";
	
    $result = $mysqli->query("SELECT * FROM ".$table." ORDER BY id DESC LIMIT ".$a.",".$b);
    closeDB();
    return resultToArray($result);
}

function getProjects($a, $b, $c) {
	global $mysqli;
    connectDB();	
	$table = "";
	if ($c == "m")
		$table = "projectfurniture";
	else if ($c == "d")
		$table = "projectdesign";	
    $result = $mysqli->query("SELECT * FROM ".$table." ORDER BY id DESC LIMIT ".$a.",".$b);
    closeDB();
    return resultToArray($result);
}

function getGallerey($projectID, $table) {
	global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM ".$table." WHERE project_id=".$projectID);
    closeDB();
    return resultToArray($result);
}

function getProject($projectID, $table) {
	global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM ".$table." WHERE id=".$projectID);
    closeDB();
    return resultToArray($result);
}

?>































