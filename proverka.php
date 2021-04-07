<?php

//    session_start();
//    $_SESSION['phone'] = $_POST['phone'];
//    $connect = '../connect.php';
//    $norm = mysqli_query($connect, "SELECT `Phone` FROM `Phone` WHERE `Phone` = '$_SESSION[phone]'");
//    $n = mysqli_fetch_assoc($norm);
//    $norms = $n['phone'];
//    if($_SESSION['phone'] == NULL || !$norms ){ header('Location: account_avtor.html');
//    }else{
//        header('Location: account_vibor.html');
//    }

    if($_POST['phone']){
        echo $_POST['phone'];
        header('Location: account_vibor.html');
    } else {
        echo "Error";
        header('Location: account_avtor.html');
    }
?>