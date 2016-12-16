<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>应用详情</title>

    <style>
        #customers, #comments
        {
            font-family:"Microsoft YaHei", Arial, Helvetica, sans-serif;
            width:100%;
            border-collapse:collapse;
        }

        #customers td, #customers th, #comments td, #comments th
        {
            font-size:1em;
            border:1px solid #98bf21;
            padding:3px 7px 2px 7px;
        }

        #customers th, #comments th
        {
            font-size:1.1em;
            text-align:left;
            padding-top:5px;
            padding-bottom:4px;
            background-color:#A7C942;
            color:#ffffff;
        }

        #customers tr.alt td, #comments tr.alt td
        {
            color:#000000;
            background-color:#EAF2D3;
        }
        .form
        {

            border-style:inset;
            width:420px;
            height:36px;
            float: left;
            border: 1px solid #A7C942;
        }
        input{
            height:12px:
            padding: 0px 0px;
            font-size: 25px;
            font-family:"Microsoft YaHei";
        }
        .button {
            display: inline-block;
            padding: 2px 25px;
            font-size: 24px;
            text-align: center;
            outline: none;
            color: #fff;
            background-color: #A7C942;
            border: none;
            float: left;
            font-family:"Microsoft YaHei", Arial, Helvetica, sans-serif;
        }
        .button:hover
        {
            background-color: #3e8e41
        }
        .con {
            position: relative;
            float: left;
            left: 35%;

        }
    </style>

</head>
<body link="black" alink="black" vlink="black">
<h2 style = "font-family: Microsoft YaHei, Arial, Helvetica, sans-serif;text-align: center;"></h2>

<table id="customers" border="1" align="center" width="1000px">
    <tr>
        <th>Logo</th>
        <th>应用名称</th>
        <th>类别</th>
        <th>评分</th>
        <th>描述</th>
    </tr>
    <tr>
        <?php
        /**
         * Created by PhpStorm.
         * User: Hakurei Reimu
         * Date: 2016/11/18
         * Time: 10:56
         */
        error_reporting(0);
        $data=$_GET["id"];
        $data --;
        require 'dbCon.php';
        $dbcon = new dbCon();
        $dbcon->appcommend();
        $apps = $dbcon->getApps();


        echo "<tr class='alt'>";
        echo "<td align='center'><img src='".$apps[$data]['image']."' /></td>";
        echo "<td align='center'><a href='".$apps[$data]['url']."' style='text-decoration:none;'>".$apps[$data]['name']."</a></td>";
        echo "<td align='center'>".$apps[$data]['category']."</td>";
        echo "<td align='center'>".$apps[$data]['score']."</td>";
        echo "<td align='center'>".$apps[$data]['instruction']."</td>";
        echo "</tr>";

        ?>
    </tr>


</table>

<?php
session_start();
if(isset($_SESSION['username'])){
    $name = $_SESSION['username'];

    echo "当前登录：",$name;
    echo '  <a style="text-decoration:none"href="index.php?action=logout">退出</a> <br />';

    if(isset($_GET['action']) and  $_GET['action'] == "logout"){
        unset($_SESSION['userid']);
        unset($_SESSION['username']);
        header('Location:index.php');
        echo '注销登录成功！点击此处 <a style="text-decoration:none"href="index.php">登录</a>';
        exit;
    }

}
?>
<form  action="" method="post">
    <div class="con">
        <input  class="form" type="text" name="comment">
        <input class="button" type="submit" value="评论">
    </div>
</form>

<table id="comments" border="1"align="center">
    <tr>
        <th width="200px">用户</th>
        <th width="800px">评论</th>
    </tr>
    <tr>
        <?php
        $com = $_POST["comment"];
        $db_com = new dbCon();
        $db_com->add_com($data,$name,$com);
        $com_info = $db_com->get_com($data);


        for ($i = 0; $i < count($com_info); $i++){
            echo "<tr class='alt'>";
            //print_r($com_info);
            echo "<td>".$com_info[$i][username]."</td>";
            echo "<td>".$com_info[$i][comments]."</td>";
            echo "</tr>";
        }
        

        ?>
    </tr>
</table>

<h3 style = "font-family: Microsoft YaHei, Arial, Helvetica, sans-serif;text-align: center;"><a href="index.php" style="text-decoration:none;">返回首页</a></h3>
</body>
</html>

