<?php  


if (isset($_POST['name']) && isset($_POST['message'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$message = validate($_POST['message']);

	if (empty($message) || empty($name)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO dash(name, lastname) VALUES('$name', '$message')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your message was sent successfully!";
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: index.html");
}


if (isset($_POST['name_1']) && isset($_POST['message_1'])) {
	include 'db_conn.php';


	$name_1 = validate($_POST['name_1']);
	$message_1 = validate($_POST['message_1']);

	if (empty($message_1) || empty($name_1)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO dash_1(title, lasttitle) VALUES('$name_1', '$message_1')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your message was sent successfully!";
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: index.html");
}

