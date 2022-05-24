<?php
  session_start();
  $db = mysqli_connect("ls-3cafb89f8997e4de71cc96223bc939e463dd3be7.c34z5emfo7ly.ap-northeast-1.rds.amazonaws.com", "basic_user", "1234", "uml");
  $db->set_charset("utf8");
  $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  date_default_timezone_set("Asia/Ulaanbaatar");
  $time=(new DateTime())->format("Y-m-d G:i:s");
  $time_short=(new DateTime())->format("Y-m-d");
  $host_url="http://localhost/uml-diagrams";
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header('location: '.$host_url);
  }
  $head_form ='<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">';
  if(isset($_SESSION['user'])){
    $user_id =$_SESSION['user']['user_id'];
      $user_SESSION = array(
        'logged' => true,
        'user_data'=>$_SESSION['user'],
       );
    }else {
      $user_SESSION = array(
        'logged' => false,
        'user_data'=>'',
       );
    }
 ?>
