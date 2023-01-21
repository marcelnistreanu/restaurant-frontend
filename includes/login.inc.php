<?php

include "dbconn.inc.php";

if(isset($_POST['email']) && isset($_POST['parola'])){
    $email = $_POST['email'];
    $parola = $_POST['parola'];

    $sql = "select * from clienti where email='$email' and parola='$parola'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
        
        header('Location: ../meniu.php');
    } else{
        header('Location: ../login.php?error=Incorrect data');
        exit();
    }
}



?>