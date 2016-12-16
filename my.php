<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>个人中心</title>

    <style type="text/css">
        #customers
        {
            font-family:"Microsoft YaHei", Arial, Helvetica, sans-serif;
            width:100%;
            border-collapse:collapse;
        }

        #customers td, #customers th
        {
            font-size:1em;
            border:1px solid #98bf21;
            padding:3px 7px 2px 7px;
        }

        #customers th
        {
            font-size:1.1em;
            text-align:left;
            padding-top:5px;
            padding-bottom:4px;
            background-color:#A7C942;
            color:#ffffff;
        }

        #customers tr.alt td
        {
            color:#000000;
            background-color:#EAF2D3;
        }
    </style>

</head>
<body link="black" alink="black" vlink="black">
<h2 style = "font-family: Microsoft YaHei, Arial, Helvetica, sans-serif;text-align: center;"></h2>
<table id="customers" border="1" align="center" width="1000px">
    <tr>
        <th>UID</th>
        <th>用户名</th>
        <th>email</th>
        <th>QQ</th>
    </tr>
    <tr>
        <?php
        /**
         * Created by PhpStorm.
         * User: Hakurei Reimu
         * Date: 2016/12/16
         * Time: 0:04
         */

        SESSION_START();
        $con = mysqli_connect("localhost", "root", "qxztxzhyhm");



        $name = $_SESSION['username'];
        $email = mysqli_query($con,"select eamil from users where username='$name'");
        $qq = mysqli_query($con,"select qq from users where username='$name'");

        mysqli_select_db($con,"app_db");
        $sql = "select * from users where username='$name'";
        $rs = mysqli_query($con,$sql);
        $user_info = mysqli_fetch_array($rs);
        //echo $user_info[0];//UID
        //echo $user_info[3];//email
        //echo $user_info[4];//QQ

        echo "欢迎",$name;
        echo '  <a style="text-decoration:none"href="index.php?action=logout">退出</a> <br />';

        if(isset($_GET['action']) and  $_GET['action'] == "logout"){
            unset($_SESSION['userid']);
            unset($_SESSION['username']);
            header('Location:index.php');
            echo '注销登录成功！点击此处 <a style="text-decoration:none"href="index.php">登录</a>';
            exit;
        }

        echo "<tr class='alt'>";
        echo "<td align='center'>".$user_info[0]."</td>";
        echo "<td align='center'>".$name."</td>";
        echo "<td align='center'>".$user_info[3]."</td>";
        echo "<td align='center'>".$user_info[4]."</td>";
        echo "</tr>";

        ?>
    </tr>
</table>



<h3 style = "font-family: Microsoft YaHei, Arial, Helvetica, sans-serif;text-align: center;"><a href="index.php" style="text-decoration:none;">返回首页</a></h3>
</body>
</html>

