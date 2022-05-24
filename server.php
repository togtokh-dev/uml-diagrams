<?php
  include('db.php');
  function isLoggedIn()
  {
    if (isset($_SESSION['user'])) {
      return true;
    }else{
      return false;
    }
  }
  if(isset($_GET['lan'])){
  	if($_GET['lan']=='mon'){
  		$_SESSION['Language']='mon_name';
  	}else if($_GET['lan']=='en'){
  		$_SESSION['Language']='en_name';
  	}else{
  		$_SESSION['Language']='en_name';
  	}
  }else{
    if(!isset($_SESSION['Language'])){
      $_SESSION['Language']='en_name';
    }
  }
  $lan=$_SESSION['Language'];

?>
