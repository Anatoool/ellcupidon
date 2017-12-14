<?php
    session_start();  
?>
<?php
    require_once "../functions/functions.php";
    
    unset($_SESSION['logged_user']);
    
    echo '<script>window.location.href = "../moderation7815318220.php";</script>';
?>