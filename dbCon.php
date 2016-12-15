<?php
SESSION_START();
class dbCon {
  private $apps;
  
  private function dbConnect() {
  	$con = mysqli_connect("localhost", "root", "qxztxzhyhm");
  	if (!$con) {
  		die ("�޷����ӵ����ݿ�".mysqli_connect_error());
  	}
  	mysqli_query($con, "set names 'utf8' ");
  	mysqli_query($con, "set character_set_client=utf8");
  	mysqli_query($con, "set character_set_results=utf8");
  	return $con;
  }
  
  public function appRecommend() {
  	$con = $this->dbConnect();
  	if (!$con) {
  		die ("�޷���ȡӦ������");
  	}
  	mysqli_select_db($con, "app_db");
  	$result = mysqli_query($con, "select * from app order by score DESC");
  	$i = 0;
  	while ($row = mysqli_fetch_array($result)) {
  		$this->apps[$i] = $row;
  		$i++;
  	}
  	mysqli_close($con);
  }
  
  public function appClassify($category) {
  	$con = $this->dbConnect();
  	if (!$con) {
  		die ("�޷���ȡӦ������");
  	}
  	mysqli_select_db($con, "app_db");
  	$result = mysqli_query($con, "select * from app where category='".$category."' order by score DESC");
  	$i = 0;
  	while ($row = mysqli_fetch_array($result)) {
  		$this->apps[$i] = $row;
  		$i++;
  	}
  	mysqli_close($con);
  }
  
  public function getApps() {
  	return $this->apps;
  }

  public function appcommend() {
      $con = $this->dbConnect();
      if (!$con) {
          die ("�޷���ȡӦ������");
      }
      mysqli_select_db($con, "app_db");
      $result = mysqli_query($con, "select * from app ");
      $i = 0;
      while ($row = mysqli_fetch_array($result)) {
          $this->apps[$i] = $row;
          $i++;
      }
      mysqli_close($con);
   }

  public function  user($username,$password) {
	  $con = $this->dbConnect();
	  if (!$con) {
		  die ("�޷���ȡӦ������");
	  }
	  mysqli_select_db($con, "app_db")or die("数据库访问错误".mysqli_error($con));
	  $result = mysqli_query($con,"select userid from users where username='$username' and password='$password' limit 1");
	  $key = mysqli_fetch_array($result);

	  mysqli_close($con);

	  return  $key;
  }
	public function reg($username,$password,$email,$qq) {
		$con = $this->dbConnect();
		if (!$con) {
			die ("�޷���ȡӦ������");
		}
		mysqli_select_db($con, "app_db")or die("数据库访问错误".mysqli_error($con));

		$check_query = mysqli_query($con,"select username from users where username='$username' limit 1");
		if(mysqli_fetch_array($check_query)){
			echo '错误：用户名 ',$username,' 已存在。</br><a href="javascript:history.back(-1);">返回</a>';
			exit;
		}

		$sql = "insert into users(username,password,eamil,qq)
		values('$username','$password','$email','$qq')";

		if ($con->query($sql) === TRUE) {
			echo "注册成功";
			$_SESSION['username'] = $username;
			echo '<br><a style="text-decoration:none" href="index.php">返回首页</a>';
			echo ' <a style="text-decoration:none" href="my.php">用户中心</a>';
		} else {
			echo '抱歉！添加数据失败：',mysqli_error($con),'<br />';
			echo '点击此处 <a style="text-decoration:none" href="javascript:history.back(-1);">返回</a> 重试';
		}

		mysqli_close($con);
	}
}
?>