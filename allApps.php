<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>应用推荐</title>
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
<h2 style = "font-family: Microsoft YaHei, Arial, Helvetica, sans-serif;text-align: center;">这里是应用推荐(=・ω・=)</h2>
<table id="customers">
  <tr>
    <th>Logo</th>
    <th>应用名称</th>
    <th>类别</th>
    <th>评分</th>
  </tr>
  <tr>
  <?php 
  	require 'dbCon.php';
  	$dbcon = new dbCon();
  	$dbcon->appRecommend();
  	$apps = $dbcon->getApps();
  	for ($i = 0; $i < count($apps); $i++) {
  		if ($i % 2 == 1) {
  			echo "<tr class='alt'>";
  			echo "<td width=50px><img src='".$apps[$i]['image']."' /></td>";
  			echo "<td><a href='app.php?id=".$apps[$i]['id']."' style='text-decoration:none;'>".$apps[$i]['name']."</a></td>";
  			echo "<td>".$apps[$i]['category']."</td>";
  			echo "<td>".$apps[$i]['score']."</td>";
  			echo "</tr>";
  		}
  		else {
  			echo "<tr>";
	  		echo "<td width=50px><img src='".$apps[$i]['image']."' /></td>";
	  		echo "<td><a href='app.php?id=".$apps[$i]['id']."' style='text-decoration:none;'>".$apps[$i]['name']."</a></td>";
	  		echo "<td>".$apps[$i]['category']."</td>";
	  		echo "<td>".$apps[$i]['score']."</td>";
	  		echo "</tr>";
  		}
  		
  	}
  ?>
  </tr>

</table>
<h3 style = "font-family: Microsoft YaHei, Arial, Helvetica, sans-serif;text-align: center;"><a href="index.php" style="text-decoration:none;">返回首页</a></h3>
</body>
</html>