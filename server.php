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
  if(isset($_POST['insert_data'])){
    insert($_POST['id'],$_POST['title'],$_POST['title_en'],$_POST['body'],$_POST['body_en']);
      header('location: ./admin.php');
  }
  function insert($id,$title,$title_en,$body,$body_en){
    GLOBAL $db;
    mysqli_query($db, "INSERT INTO datas (`id`, `title`, `title_en`, `body`, `body_en`) VALUES ('$id', '$title', '$title_en', '$body', '$body_en');");
  }
?>
