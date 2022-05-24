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

  function isA()
  {
    if (isset($_SESSION['user']) && $_SESSION['user']['turul'] == 'A' ) {
      return true;
    }else{
      return false;
    }
  }
  function isH()
  {
    if (isset($_SESSION['user']) && $_SESSION['user']['turul'] == 'H' ) {
      return true;
    }else{
      return false;
    }
  }
  function isM()
  {
    if (isset($_SESSION['user']) && $_SESSION['user']['turul'] == 'M' ) {
      return true;
    }else{
      return false;
    }
  }
  function rand_number($length) {
			return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
	}
  function rand_text($length) {
			return substr(str_shuffle(str_repeat($x='0123456789QWERTYUIOPLKJHGFDSAZXCVBNM', ceil($length/strlen($x)) )),1,$length);
	}
  include('function.php');
?>
