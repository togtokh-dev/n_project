<?php include('db.php') ?>
<?php
	$inputJSON = file_get_contents('php://input');
	$input = json_decode($inputJSON, TRUE);
	array_push($_POST,$input);
	print_r($_POST);
	if (isset($_POST['us_id_1'])) {
		$user_a=$_POST['us_id_1'];
		$user_b=$_POST['us_id_2'];
		$date=$_POST['date'];
		$type=$_POST['type'];
		$query = "INSERT INTO `projects`
		( `project_a_user`, `project_b_user`, `project_type`, `project_ex_date`, `project_type_id`)
		 VALUES ( '$user_a', '$user_b', 'start', '$date', '$type')";
		if(mysqli_query($db, $query)){
			header('location: ./add-file.php');
		}else{
			header('location: ./add-file.php');
		}
	}
	if (isset($_POST['ajiltanCode'])) {
		$ajiltanCode=$_POST['ajiltanCode'];
		$ajiltanOvog=$_POST['ajiltanOvog'];
		$ajiltanNer=$_POST['ajiltanNer'];
		$registerNumber=$_POST['registerNumber'];
		$mail=$_POST['mail'];
		$password=$_POST['password'];
		$query = "INSERT INTO `ajiltan`
		( `ajiltanCode`, `ajiltanOvog`, `ajiltanNer`, `registerNumber`, `mail`,`password`,`posCode`,`degCode`,`depCode`)
		 VALUES ( '$ajiltanCode', '$ajiltanOvog', '$ajiltanNer', '$registerNumber', '$mail','$password','gHOG','M','GM')";
		 echo $query;
		if(mysqli_query($db, $query)){
			header('location: ./user-add.php');
		}else{
			header('location: ./user-add.php');
		}
	}
?>
