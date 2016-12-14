<?php
//登录
//注销登录

if($_GET['action'] == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
    exit;
}
if(!isset($_POST['submit'])){
    exit('非法访问!');
}

$username = htmlspecialchars($_POST['username']);
$password = MD5($_POST['password']);

//包含数据库连接文件
require 'dbCon.php';
$dbcon = new dbCon();
//检测用户名及密码是否正确
$key = $dbcon->user($username,$password);

if($result = $key){
    //登录成功
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $result['userid'];
    echo $username,' 欢迎你！进入 <a href="my.php">用户中心</a><br />';
    echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />';
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}





?>