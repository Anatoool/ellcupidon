<?php
    session_start();  
?>
<?php
	
    require_once "../functions/functions.php";  

		
        $data = $_POST;  
        connectDB();

        $user = $mysqli->query("SELECT * FROM users WHERE login='".$data['name']."'");

        $row = $user->fetch_assoc();        

        if (isset($row)) {
            if (password_verify($data['password'], $row['password'])){
				$_SESSION['logged_user'] = $row;
				echo 1;
			} else echo 0;
        } else{
            echo 0;
        }

		

        closeDB();
    
?>


