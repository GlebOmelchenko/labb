<?php
//    session_start();
//    $_SESSION['phone'] = $_POST['phone'];
//    $_SESSION['sposobdostavki'] = $_POST['sposobdostavki'];
//    $connect = '../connect.php';
//    mysqli_query($connect, "INSERT INTO `Заказ` (`phone`, `sposobdostavki`) VALUES ('$_SESSION[phone]', '$_SESSION[sposobdostavki]')");

if($_POST['phone'] && $_POST['sposobdostavki']){
    echo $_POST['phone'];
    header('Location: gotoviesborki.html');
} else {
    echo "Error";
    header('Location: index.html');
}
?>