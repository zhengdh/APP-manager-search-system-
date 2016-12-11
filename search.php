<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>搜索结果</title>
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
<table id="customers">
  <tr>
    <th>Logo</th>
    <th>应用名称</th>
    <th>类别</th>
    <th>评分</th>
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
    $data=$_POST["keyword"];
    require 'dbCon.php';
  	$dbcon = new dbCon();
  	$dbcon->appcommend();
  	$apps = $dbcon->getApps();

   $result = array();
   $result_count = 0;
   for ($i = 0; $i < count($apps); $i++) {
       if(stristr($apps[$i][name],$data)){
           $result[$result_count] = ($apps[$i][id] - 1);
           $result_count ++;
       }
   }
  	for ($i = 0; $i < $result_count; $i++) {
            echo "<tr class='alt'>";
            echo "<td width=50px><img src='".$apps[$result[$i]]['image']."' /></td>";
            echo "<td><a href='app.php?id=".$apps[$result[$i]]['id']."' style='text-decoration:none;'>".$apps[$result[$i]]['name']."</a></td>";
            echo "<td>".$apps[$result[$i]]['category']."</td>";
            echo "<td>".$apps[$result[$i]]['score']."</td>";
            echo "</tr>";
    }
  ?>
</tr>

</table>
<h3 style = "font-family: Microsoft YaHei, Arial, Helvetica, sans-serif;text-align: center;"><a href="index.php" style="text-decoration:none;">返回首页</a></h3>
</body>
</html>