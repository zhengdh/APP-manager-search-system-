<?php

$html=<<<html
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

    padding: 0px 0px;
    font-size: 20px;
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
  font-family:"Microsoft YaHei", Arial, Helvetica, sans-serif;

}
.button:hover
{
  background-color: #3e8e41
}

h1{
    width: 600px;
    font-size:50px;
    color:black;
    font-family:"Microsoft YaHei";
}
.text{
    width: 100px;
    font-size:20px;
    color:#A7C942;
    font-family:"Microsoft YaHei";
}

</style>

    <div align="center">
    <h1>欢迎注册</h1>
    </div>


    <script>
      function on_click(){
      if (reForm.username.value == "")
      {
          alert("请填写用户名！");
          reForm.username.focus();
          return false;
      }
      if (reForm.password.value == "")
      {
          alert("请填写密码！");
          reForm.password.focus();
          return false;
      }
       if (reForm.confirm.value == "")
      {
          alert("请填写确认密码！");
          reForm.confirm.focus();
          return false;
      }
      if (reForm.confirm.value !== reForm.password.value)
      {
          alert("两次输入的密码不一致！");
          reForm.confirm.focus();
          reForm.password.focus();
          return false;
      }
      if (reForm.email.value == "")
      {
          alert("请填写电子邮箱！");
          reForm.email.focus();
          return false;
      }
      if (reForm.qq.value == "")
      {
          alert("请填写qq账号！");
          reForm.qq.focus();
          return false;
      }
    }
    </script>
    <div align="center">
    <form action="regcheck.php" method="post" name="reForm" onsubmit="return on_click();">
        <p><label class="text" >用户名： </label><input type="text" name="username"/></p>
        <p><label class="text" >密　码: <input type="password" name="password"/></p>
        <p><label class="text" >确认密码： <input type="password" name="confirm"/></p>
        <p><label class="text" >电子邮箱: <input type="text" name="email"/></p>
        <p><label class="text" >qq: <input type="text" name="qq"/></p>
        <br>
         <input class="button"type="Submit" name="Submit" value="注册"/>
         &nbsp;&nbsp;
         <a href="index.php"><input  class="button"type="button" name="back" value="返回"/></a>

    </form>
    </div>

html;

    echo $html;

?>