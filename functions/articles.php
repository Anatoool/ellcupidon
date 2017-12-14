<?php
	require_once "./functions.php";

	$num = $_POST['number'] * 10;

	$projects = getProjects($num,10,$_POST['table']);
	$projectsCount = count($projects);

	$arr = array('a1' => $_POST['table'], 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

	echo json_encode($projects);
	//echo json_encode($arr);

//$_POST['number']
?>


