<?php


if (isset($_POST['name']) && isset($_POST['message']) && isset($_FILES['my_image'])) {
	include 'db_conn.php';






	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$message = validate($_POST['message']);
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if (empty($message) || empty($name)) {
		header("Location: index.php");


	}else {

		$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
		$img_ex_lc = strtolower($img_ex);

		$allowed_exs = array("jpg", "jpeg", "png");

		if (in_array($img_ex_lc, $allowed_exs)) {
			$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
			$img_upload_path = 'uploads/'.$new_img_name;
			move_uploaded_file($tmp_name, $img_upload_path);

		}else {

					header("Location: index.php");
		}

		$sql = "INSERT INTO test(name, message, image_url) VALUES('$name', '$message', '$new_img_name')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your message was sent successfully!";
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: index.php");
}