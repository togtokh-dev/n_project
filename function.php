<?php
  function table_all_user() {
    global $db;
    $query = "SELECT * FROM ajiltan";
    $results = mysqli_query($db, $query);
    $data = array( );
    while($row = mysqli_fetch_assoc($results)) {
      array_push($data,$row);
    }
    return $data;
  }
  function one_user($id) {
    global $db;
    $query = "SELECT * FROM ajiltan where ajiltanCode ='$id'";
    $results = mysqli_query($db, $query);
    return mysqli_fetch_assoc($results);
  }
  function user_insert($user,$email) {
    global $db;
    $id = rand_text(10);
    return $id;
    // $query = "SELECT * FROM users where user_id='$id'";
    // $results = mysqli_query($db, $query);
    // return mysqli_fetch_assoc($results);
  }
  function file_in($file) {
    // global $db;
    // $query = "SELECT * FROM users where user_id='$id'";
    // $results = mysqli_query($db, $query);
    // return mysqli_fetch_assoc($results);
    return "./file/data.zip";
  }
  function ajil() {
    global $db;
    $query = "SELECT * FROM Ajil";
    $results = mysqli_query($db, $query);
    $data = array( );
    while($row = mysqli_fetch_assoc($results)) {
      array_push($data,$row);
    }
    return $data;
  }
  function task($ajilId,$titel,$text,$date,$turul,$unelgee) {
    global $db;
    $id = rand_text(10);
    $query = "INSERT INTO `From` (`idFrom`, `ajilId`, `titel`, `text`, `file`, `date`, `turul`, `unelgee`) VALUES ('$idFrom', '$ajilId', '$titel', '$text', '$file', '$date', '$turul', '$unelgee');
    ";
    if( mysqli_query($db, $query)){
      return $id;
    }
    return false;
  }

  function Department($id) {
    global $db;
    $query = "SELECT d.depName, p.posNer, a.ajiltanOvog, a.ajiltanNer FROM position p left join `department` d on d.depCode = p.depCode left join `ajiltan` a on a.posCode = p.posCode  where d.depCode = '$id'";
    $results = mysqli_query($db, $query);
    // $data = array( );
    // while($row = mysqli_fetch_assoc($results)) {
    //   array_push($data,$row);
    // }
    return $results;
  }
  function material() {
    global $db;
    $query = "SELECT * FROM bbarimt";
    $query = "INSERT INTO `bbarimt` (`id`, `ajiltanCode`, `3uy`, `diplomm`, `IUnemleh`, `zurag`, `todorhoilol`, `dans`) VALUES ('$id', '$ajiltanCode', '$uy', '$diplomm', '$IUnemleh', '$zurag', '$todorhoilol', '$dans');
    ";
    $results = mysqli_query($db, $query);
    $data = array( );
    while($row = mysqli_fetch_assoc($results)) {
      array_push($data,$row);
    }
    return $data;
  }
  function unelgee_user() {
    global $db;
    $query = "SELECT  l.hutListName, a.ajiltanNer, u.unelgeeniiOnoo FROM unelgee u left join hutulburlist l on l.hutlistCode = u.hutlistCode left join hutulbur h on h.hutCode =u.hutCode left join ajiltan a on a.ajiltanCode = u.ajiltanCode";
    $results = mysqli_query($db, $query);
    $data = array( );
    while($row = mysqli_fetch_assoc($results)) {
      array_push($data,$row);
    }
    return $data;
  }
  function hariutsagch() {
    global $db;
    $query = "SELECT d.depName, p.posNer, a.ajiltanOvog, a.ajiltanNer, t.turulNer FROM ajiltan a left join position p on p.posCode = a.posCode left join department d on d.depCode = p.depCode left join turul t on t.turul = a.turul where a.turul = 'H'";
    $results = mysqli_query($db, $query);
    $data = array( );
    while($row = mysqli_fetch_assoc($results)) {
      array_push($data,$row);
    }
    return $data;
  }
  function new_employee() {
    global $db;
    $query = "SELECT d.depName, p.posNer, a.ajiltanOvog, a.ajiltanNer, t.turulNer FROM ajiltan a left join position p on p.posCode = a.posCode left join department d on d.depCode = p.depCode left join turul t on t.turul = a.turul where a.turul = 'A'";
    $query = "INSERT INTO `ajiltan`  (`ajiltanCode`, `ajiltanOvog`, `ajiltanNer`, `posCode`, `registerNumber`, `degCode`, `startDate`, `turul`, `mail`, `password`, `depCode`, `gurvanUy`, `diplomm`, `IUnemleh`, `zurag`, `todorhoilol`, `dans`) VALUES ('$', '$', '$', '$', '$', '$', '$', '$', '$', '1', '1', '', '', '', '', '', '');";
    $results = mysqli_query($db, $query);
    $data = array( );
    while($row = mysqli_fetch_assoc($results)) {
      array_push($data,$row);
    }
    return $data;
  }
  function task_update() {
    global $db;
    $query = "SELECT d.depName, p.posNer, a.ajiltanOvog, a.ajiltanNer, t.turulNer FROM ajiltan a left join position p on p.posCode = a.posCode left join department d on d.depCode = p.depCode left join turul t on t.turul = a.turul where a.turul = 'A'";
    $results = mysqli_query($db, $query);
    $data = array( );
    while($row = mysqli_fetch_assoc($results)) {
      array_push($data,$row);
    }
    return $data;
  }
  function update($gurvanUy,$diplomm,$IUnemleh,$zurag,$todorhoilol,$dans) {
    global $db;
    $query = "SELECT e.depName, p.posNer, a.ajiltanOvog, a.ajiltanNer, a.registerNumber, d.degNer, t.turulNer, a.mail, a.startDate FROM ajiltan a
    left join `position` p on p.posCode = a.posCode
    left join department e on e.depCode = a.depCode
    left join `degree` d on d.degCode = a.degCode
    left join `turul` t on t.turul = a.turul";
    $query = "UPDATE ajiltan SET gurvanUy = '', diplomm = '', IUnemleh = '', zurag = '', todorhoilol = '', dans = '',  where ajiltanCode = '$id' ;
    ";
    $results = mysqli_query($db, $query);
    $data = array( );
    while($row = mysqli_fetch_assoc($results)) {
      array_push($data,$row);
    }
    return $data;
  }
 ?>
