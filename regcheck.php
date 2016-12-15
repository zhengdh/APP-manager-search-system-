<?php


    if(!isset($_POST['Submit'])){
        exit('非法访问!');
    }

    $username = htmlspecialchars($_POST['username']);
    $password = MD5($_POST['password']);
    $email = htmlspecialchars($_POST['email']);
    $qq = htmlspecialchars($_POST['qq']);

    require 'dbCon.php';
    $dbcon = new dbCon();

    $dbcon->reg($username,$password,$email,$qq);




?>