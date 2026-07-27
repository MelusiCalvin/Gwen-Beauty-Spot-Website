<?php
    
    if(!$_SESSION['username']){
        header('login.php');
    }

?>