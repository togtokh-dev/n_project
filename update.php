<?php include('db.php') ?>
<?php
	$inputJSON = file_get_contents('php://input');
	$input = json_decode($inputJSON, TRUE);
	array_push($_POST,$input);
	if (isset($_POST['user'])) {
		if($_FILES["profile_avatar"]['tmp_name']){
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["profile_avatar"]["name"]);
			$profile_avatar=$host_url.'/'.$target_file;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$check = getimagesize($_FILES["profile_avatar"]["tmp_name"]);
			move_uploaded_file($_FILES["profile_avatar"]["tmp_name"], $target_file);
		}else{
			$profile_avatar = $_POST['profile_avatar'];
		}
		if($_FILES["todorhoilol"]['tmp_name']){
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["todorhoilol"]["name"]);
			$todorhoilol=$host_url.'/'.$target_file;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$check = getimagesize($_FILES["todorhoilol"]["tmp_name"]);
			move_uploaded_file($_FILES["todorhoilol"]["tmp_name"], $target_file);
		}else{
			$todorhoilol = $_POST['todorhoilol'];
		}
		if($_FILES["IUnemleh"]['tmp_name']){
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["IUnemleh"]["name"]);
			$IUnemleh=$host_url.'/'.$target_file;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$check = getimagesize($_FILES["IUnemleh"]["tmp_name"]);
			move_uploaded_file($_FILES["IUnemleh"]["tmp_name"], $target_file);
		}else{
			$IUnemleh = $_POST['IUnemleh'];
		}
		if($_FILES["diplomm"]['tmp_name']){
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["diplomm"]["name"]);
			$diplomm=$host_url.'/'.$target_file;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$check = getimagesize($_FILES["diplomm"]["tmp_name"]);
			move_uploaded_file($_FILES["diplomm"]["tmp_name"], $target_file);
		}else{
			$diplomm = $_POST['diplomm'];
		}
		if($_FILES["gurvanUy"]['tmp_name']){
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["gurvanUy"]["name"]);
			$gurvanUy=$host_url.'/'.$target_file;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$check = getimagesize($_FILES["gurvanUy"]["tmp_name"]);
			move_uploaded_file($_FILES["gurvanUy"]["tmp_name"], $target_file);
		}else{
			$gurvanUy = $_POST['gurvanUy'];
		}
		$address=$_POST['address'];
		$number=$_POST['number'];
		$dans=$_POST['dans'];
		$query = "UPDATE `ajiltan` SET `address` = '$address', `number` = '$number',`dans` = '$dans',
		 `zurag` = '$profile_avatar',`gurvanUy` = '$gurvanUy',`diplomm` = '$diplomm',`IUnemleh` = '$IUnemleh',`todorhoilol` = '$todorhoilol' WHERE (`ajiltanCode` = '$user_id')";
		if(mysqli_query($db, $query)){
			header('location: ./files.php');
		}else{
			header('location: ./files.php');
		}
	}
	function user_id_rand($length) {
			return substr(str_shuffle(str_repeat($x='0123456789qwertyuiopasdfghjklzxcvbnm', ceil($length/strlen($x)) )),1,$length);
	}
?>
