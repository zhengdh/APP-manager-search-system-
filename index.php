<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2016/11/15
 * Time: 13:13
 */
SESSION_START();
    $htmlone  = <<<html
<html>
<head>
<style>
.form
{

    border-style:inset;
    width:420px;
    height:70px;
    float: left;
    border: 1px solid #A7C942;
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
.button_three span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button_three span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button_three:hover span {
  padding-right: 25px;
}
.button_three:hover span:after {
  opacity: 1;
  right: 0;
}
h1
{
    width: 600px;
    font-size:100px;
    color:#333333;
    font-family:"Microsoft YaHei";
    transition:font-size 2s;
}

.con {
        position: relative;
        float: left;
        left: 30%;

}
.text{

       font-family:"Microsoft YaHei";
       font-size: 40px;
       color:  #3e8e41;
}
.textone{

       font-family:"Microsoft YaHei";
       font-size: 20px;
       color:  #3e8e41;
}
</style>
</head>
<body>


<div align="center"><h1>APP搜索</h1></div>

<form  action="search.php" method="post">
    <div class="con">
        <input  class="form" type="text" name="keyword">
        <input class="button" type="submit" value="快来问问神奇海螺吧">
    </div>
</form>


<table>
<tr>
<td style="width:100%;height:100px;font-size:100px;border:0">
</td>
</tr>
</table>

<div align="center">
<a href="appClassify.php" ><button class="button_one" style="vertical-align:middle"><span>应用大全</span></button></a>
<a href="allApps.php"><button class="button_two" style="vertical-align:middle"><span>APP推荐</span></button></a>
<a href="javascript:openLogin();"><button class="button_three" style="vertical-align:middle"><span>登录/注册</span></button></a>
</div>

<script>
function openLogin(){
   document.getElementById("win").style.display="";
   document.getElementById("back").style.display="";
}
function closeLogin(){
   document.getElementById("win").style.display="none";
   document.getElementById("back").style.display="none";
}
function on_click(){
      if (LoginForm.username.value == "")
      {
          alert("请填写用户名！");
          LoginForm.username.focus();
          return false;
      }
      if (LoginForm.password.value == "")
      {
          alert("请填写密码！");
          LoginForm.password.focus();
          return false;
      }

    closeLogin();


}

</script>



<div id=back style="display:none; POSITION:absolute; left:0; top:0; width:100%; height:100%;background-color:ghostwhite;opacity:0.1;filter:alpha(opacity=10);"></div>
<div id=win style="display:none; POSITION:absolute; left:50%; top:50%; width:600px; height:400px; margin-left:-300px; margin-top:-200px; border:1px solid #3e8e41; background-color:#fafafa;text-align:center;">
<div class="text" >欢迎登录</div>

<form name="LoginForm" method="post" action="login.php" onSubmit="return on_click();" >
<p><label for="username" class="textone">用户名:</label>
<input id="username" name="username" type="text" class="input" /></p>
<p><label for="password" class="textone">密 码:  </label>
<input id="password" name="password" type="password" class="input" /></p>
<input type="submit" name="submit" value="  确 定  " class="left" />
</form>
<a style="text-decoration:none"href="register.php">注册新用户</a>
<a style="text-decoration:none"href="javascript:closeLogin();">关闭登录框</a></div>



</body>

</html>



html;



$htmltwo  = <<<html
<html>
<head>
<style>
.form
{

    border-style:inset;
    width:420px;
    height:70px;
    float: left;
    border: 1px solid #A7C942;
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
.button_three span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button_three span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button_three:hover span {
  padding-right: 25px;
}
.button_three:hover span:after {
  opacity: 1;
  right: 0;
}
h1
{
    width: 600px;
    font-size:100px;
    color:#333333;
    font-family:"Microsoft YaHei";
    transition:font-size 2s;
}
h1:hover
{
    font-size:800px:
}
.con {
        position: relative;
        float: left;
        left: 32%;

}
.text{

       font-family:"Microsoft YaHei";
       font-size: 40px;
       color:  #3e8e41;
}

</style>
</head>
<body>


<div align="center"><h1>APP搜索</h1></div>

<form  action="search.php" method="post">
    <div class="con">
        <input  class="form" type="text" name="keyword">
        <input class="button" type="submit" value="快来问问神奇海螺吧">
    </div>
</form>


<table>
<tr>
<td style="width:100%;height:100px;font-size:100px;border:0">
</td>
</tr>
</table>

<div align="center">
<a href="appClassify.php" ><button class="button_one" style="vertical-align:middle"><span>应用大全</span></button></a>
<a href="allApps.php"><button class="button_two" style="vertical-align:middle"><span>APP推荐</span></button></a>
<a href="my.php"><button class="button_three" style="vertical-align:middle"><span>用户中心</span></button></a>
</div>







</body>
</html>
html;

if(! isset($_SESSION['username'])){
    echo $htmlone;
}




if(isset($_SESSION['username'])){
    $name = $_SESSION['username'];
    $htmlthree = <<<html
    <a style="text-decoration:none ;font-family:Microsoft YaHei;font-size:20px;"href="my.php" >个人中心</a>
    <a style="text-decoration:none;font-family:Microsoft YaHei;font-size:20px;"href="index.php?action=logout">退出</a>
html;

    echo'<a style="font-family:Microsoft YaHei;font-size:20px;">欢迎:'.$name.'</a>';
    echo $htmlthree;
    if(isset($_GET['action']) and  $_GET['action'] == "logout"){
        unset($_SESSION['userid']);
        unset($_SESSION['username']);
        header('Location:index.php');
       //echo '注销登录成功！点击此处 <a style="text-decoration:none"href="index.php">登录</a>';
        //exit;
    }
    echo $htmltwo;

}





?>