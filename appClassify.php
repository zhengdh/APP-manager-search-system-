<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>应用大全</title>
</head>
<style>
header {
    background-color:#A7C942;
    color:white;
    font-family:"Microsoft YaHei", Arial, Helvetica, sans-serif;
    text-align:center;
    padding:5px;	 
}
nav {
    line-height:30px;
    background-color:#EAF2D3;
    height:600px;
    width:90px;
    float:left;
    font-family:"Microsoft YaHei", Arial, Helvetica, sans-serif;
    padding:15px;	      
}
section {
    width:85%;
    float:right;
    padding:15px;
}

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

<header>
	<h2>应用大全</h2>
</header>

<nav>
	<!-- 
	<table>
	<tr><td><a href="<?php echo $_SERVER['PHP_SELF'];?>?category='影音'" style="text-decoration:none;">影音</a></td></tr>
	<tr><td><a href="<?php echo $_SERVER['PHP_SELF'];?>?category='社交'" style="text-decoration:none;">社交</a></td></tr>
	</table>
	 -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>">
	<input type="radio" name="category" value="影音">影音<br>
	<input type="radio" name="category" value="社交">社交<br>
	<input type="radio" name="category" value="工具">工具<br>
	<input type="radio" name="category" value="通讯">通讯<br>
	<input type="radio" name="category" value="阅读">阅读<br>
	<input type="radio" name="category" value="资讯">资讯<br>
	<input type="radio" name="category" value="安全">安全<br>
	<input type="radio" name="category" value="效率">效率<br>
	<input type="radio" name="category" value="输入法">输入法<br>
	<input type="radio" name="category" value="生活">生活<br>
	<input type="radio" name="category" value="理财">理财<br>
	<input type="radio" name="category" value="出行">出行<br>
	<input type="radio" name="category" value="购物">购物<br>
	<input type="radio" name="category" value="教育">教育<br>
	<input type="radio" name="category" value="健康">健康<br>
	<input type="radio" name="category" value="浏览器">浏览器<br>
	<input type="radio" name="category" value="个性化">个性化<br>
	<input type="radio" name="category" value="拍照">拍照<br>
	<input type="submit" value="分个类吧">
</form>
</nav>

<section>
<table id="customers">
<!-- 
  <tr>
    <th>Logo</th>
    <th>应用名称</th>
    <th>类别</th>
    <th>评分</th>
  </tr>
 -->
  <?php 
  	require 'dbCon.php';
  	if (!array_key_exists('category', $_GET)) {
  		echo "<h3 style = 'font-family: Microsoft YaHei, Arial, Helvetica, sans-serif;text-align: center;'>
		请在左侧选择类别╮(￣▽￣)╭</h3>";
  	}
  	else {
  		$dbcon = new dbCon();
	  	$dbcon->appClassify($_GET['category']);
	  	$apps = $dbcon->getApps();
	  	if (count($apps) == 0) {
	  		echo "<h3 style = 'font-family: Microsoft YaHei, Arial, Helvetica, sans-serif;text-align: center;'>
		找不到这个类别的应用(●￣(ｴ)￣●)</h3>";
	  	}
	  	else {
	  		echo "<tr><th>Logo</th><th>应用名称</th><th>类别</th><th>评分</th></tr>";
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
	  	}

  	}
  	
  ?>

</table>
<h3 style = "font-family: Microsoft YaHei, Arial, Helvetica, sans-serif;text-align: center;"><a href="index.php" style="text-decoration:none;">返回首页</a></h3>
</section>

</body>

</html>