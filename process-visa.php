<?php
require('inc/dbcon.php');
$conn = connect();


$cardno = isset($_POST['cardno']) ? $_POST['cardno'] : '';
$edate = isset($_POST['edate']) ? $_POST['edate'] : '';
$cvv = isset($_POST['cvv']) ? $_POST['cvv'] : '';

session_start();
$name = $_SESSION["name"];
echo $name;
echo $cardno,$edate,$cvv;

$sql2 = "INSERT INTO `visa`(`Cust_name`, `cardno`, `edate`, `cvv`) VALUES ('$name ','$cardno','$edate','$cvv')";
$result = mysqli_query($conn, $sql2);
if ($result) {
    header("location:dates.php");
    $cardno=@$_SESSION["cardno"];
    $edate=@$_SESSION["edate"];
    $cvv=@$_SESSION["cvv"];

}

