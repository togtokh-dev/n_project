<?php
  session_start();
  $db = mysqli_connect("ls-3cafb89f8997e4de71cc96223bc939e463dd3be7.c34z5emfo7ly.ap-northeast-1.rds.amazonaws.com", "basic_user", "1234", "n_project");
  $db->set_charset("utf8");
  $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  date_default_timezone_set("Asia/Ulaanbaatar");
  $time=(new DateTime())->format("Y-m-d G:i:s");
  $time_short=(new DateTime())->format("Y-m-d");
  $host_url="http://localhost/n_project";
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header('location: '.$host_url);
  }
  $head_form ='<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>';
  $secret_key = '6LfqLuEZAAAAABUQ22qlA7d-V4xB9LBZrb1Hl2z6';
  $sitekey="6LfqLuEZAAAAAMf7Cce4UaHJxcCdMtN8xnRvUrGi";
  if(isset($_SESSION['user'])){
    $user_id =$_SESSION['user']['ajiltanCode'];
  }
 ?>
