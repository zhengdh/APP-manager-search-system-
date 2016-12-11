<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>应用详情</title>

    <style type="text/css">
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
        $comments = explode("@",$apps[$data]['comment']);


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

<table id="comments" border="1"align="center" width="1000px">
    <tr>
        <th>评论</th>
    </tr>
    <tr>
        <?php

        for ($i = 1; $i < count($comments); $i++){
            echo "<tr class='alt'>";
            echo "<td>".$comments[$i]."</td>";
            echo "</tr>";
        }
        ?>
    </tr>
</table>
<h3 style = "font-family: Microsoft YaHei, Arial, Helvetica, sans-serif;text-align: center;"><a href="index.php" style="text-decoration:none;">返回首页</a></h3>
</body>
</html>
