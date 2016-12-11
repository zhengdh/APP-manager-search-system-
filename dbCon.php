<?php
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
}
?>