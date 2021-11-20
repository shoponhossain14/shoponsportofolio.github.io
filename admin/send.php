<?php  


if (isset($_POST['Full_name']) && isset($_POST['Experience'])) {
	include 'db_conn.php';



	$name = validate($_POST['Full_name']);
	$message = validate($_POST['Experience']);

	if (empty($message) || empty($name)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO info_1(Full_name, Experience) VALUES('$name', '$message')";
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

if (isset($_POST['Age']) && isset($_POST['Address'])) {
	include 'db_conn.php';



	$name_1 = validate($_POST['Age']);
	$message_1 = validate($_POST['Address']);

	if (empty($message_1) || empty($name_1)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO info_2(Age, Address) VALUES('$name_1', '$message_1')";
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


if (isset($_POST['Email']) && isset($_POST['Language'])) {
	include 'db_conn.php';


	$name_2 = validate($_POST['Email']);
	$message_2 = validate($_POST['Language']);

	if (empty($message_2) || empty($name_2)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO info_3(Email, Language) VALUES('$name_2', '$message_2')";
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

if (isset($_POST['Freelance']) && isset($_POST['Phone'])) {
	include 'db_conn.php';


	$name_3 = validate($_POST['Freelance']);
	$message_3 = validate($_POST['Phone']);

	if (empty($message_3) || empty($name_3)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO info_4(Freelance, Phone) VALUES('$name_3', '$message_3')";
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