<?php  


if (isset($_POST['name']) && isset($_POST['message']) && isset($_POST['year'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$message = validate($_POST['message']);
    $year = validate($_POST['year']);

    
	if (empty($message) || empty($name) || empty($year)) {
		header("Location: index.php");
	}else {

		$sql = "INSERT INTO education(year, name_1, content) VALUES('$year', '$name', '$message')";
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