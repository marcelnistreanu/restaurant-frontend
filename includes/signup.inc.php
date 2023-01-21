<?php

include "dbconn.inc.php";

if(isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['vemail']) && isset($_POST['vparola']) && isset($_POST['vconfirmparola'])){
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $vemail = $_POST['vemail'];
    $vparola = $_POST['vparola'];
    $vconfirmparola = $_POST['vconfirmparola'];

    $query = "select * from clienti where email='$vemail'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        header('Location: ../signup.php?error=Email deja folosit');
    } else if($vparola !== $vconfirmparola) {
        header('Location: ../signup.php?error=Parola si Confirmare parola sunt diferite');
    } else {
        $sql = "INSERT INTO clienti (nume, prenume, email, parola) VALUES ('$nume', '$prenume', '$vemail', '$vparola')";
    }

    

    if($conn->query($sql) === true){
        header('Location: ../meniu.php');
    } else{
        echo "Error";
    }

    $conn->close();

}

?>