<?php
include "connection.php";

$uname = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);


if ($uname != "" && $password != ""){

    $sql_query = "SELECT count(*) as cntUser FROM user_tbl WHERE user_email='".$uname."' and user_password='".$password."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['uname'] = $uname;
        echo 1;
    }else{
        echo 0;
    }

}