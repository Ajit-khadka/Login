<?php

$db = mysqli_connect("localhost", "root", "", "login");


if ($db) {

    $username = $_POST['username'];
    $password =  $_POST['password'];
    $password1 = $_POST['password1'];
    $number = $_POST['number'];

    if ($password == $password1) {


        $sql = "UPDATE users SET  password = '".$password."' WHERE number = '".$number."'";
        $result = mysqli_query($db, $sql);

        if ($result) {

            echo "Your password is recovered";
        }else{
        echo "error aayo";
        }
    }else{
        echo "Your password doesnot match";
    }
}
