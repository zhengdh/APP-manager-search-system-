<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2016/11/15
 * Time: 13:13
 */

    $html  = <<<html
<html>
<head>
<style>
.form
{
    box-shadow: 2px 2px 1px #888888;
    border-style:inset;
    width:420px;
    height:70px;
}
input{
    height:12px:
    padding: 0px 0px;
    font-size: 40px;
    font-family:"Microsoft YaHei";
}
.button {
  display: inline-block;
  padding: 20px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #A7C942;
  border: none;
  box-shadow: 0 9px #999;
  font-family:"Microsoft YaHei", Arial, Helvetica, sans-serif;
}
.button:hover {background-color: #3e8e41}
.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button_one {
  display: inline-block;
  background-color: blue;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  height:200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  border-radius: 50%;
  font-family:"Microsoft YaHei";
}
.button_one span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button_one span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button_one:hover span {
  padding-right: 25px;
}
.button_one:hover span:after {
  opacity: 1;
  right: 0;
}
.button_two {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  border-radius: 50%;
  font-family:"Microsoft YaHei";
  height:200px;
}
.button_two span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button_two span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button_two:hover span {
  padding-right: 25px;
}
.button_two:hover span:after {
  opacity: 1;
  right: 0;
}
.button_three {
  display: inline-block;
  border-radius: 4px;
  background-color: pink;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  border-radius: 50%;
  font-family:"Microsoft YaHei";
  height:200px;
}
h1
{
    width: 600px;
    font-size:100px;
    text-shadow: 3px 3px 3px green;
    color:#333333;
    font-family:"Microsoft YaHei";
    transition:font-size 2s;
}
h1:hover
{
    font-size:800px:
}
</style>
</head>
<body>



<div align="center"><h1>APP搜索</h1></div>

<form  action="search.php" method="post">
<div align="center">
<input  class="form" type="text" name="keyword">
<input class="button" type="submit" value="快来问问你的欧德法则吧">
</div>
</form>

<div align="center">
<a href="appClassify.php" ><button class="button_one" style="vertical-align:middle"><span>应用大全</span></button></a>
<a href="allApps.php"><button class="button_two" style="vertical-align:middle"><span>APP推荐</span></button></a>
<button class="button_three" style="vertical-align:middle">更多功能</button>
</div>
</body>

</html>



html;

    echo $html;

?>