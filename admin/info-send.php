<?php  


if (isset($_POST['Full_Name'])
 && isset($_POST['Age']) 
 && isset($_POST['Email']) 
 && isset($_POST['Phone']) 
 && isset($_POST['Experience']) 
 && isset($_POST['Address']) 
 && isset($_POST['Language']) 
 && isset($_POST['Freelance'])) 
 {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Full_Name = validate($_POST['Full_Name']);
	$Age = validate($_POST['Age']);
    $Email = validate($_POST['Email']);
    $Phone = validate($_POST['Phone']);
    $Experience = validate($_POST['Experience']);
    $Address = validate($_POST['Address']);
    $Language = validate($_POST['Language']);
    $Freelance = validate($_POST['Freelance']);

    
	if (empty($Full_Name) || empty($Age) || empty($Email) || empty($Phone) || empty($Experience) || empty($Address) || empty($Language) || empty($Freelance)) {
		header("Location: index.php");
	}else {

		$sql = "INSERT INTO info(Full_Name, Age, Email, Phone, Experience, Address, Language, Freelance) VALUES('$Full_Name', '$Age', '$Email', '$Phone', '$Experience', '$Address', '$Language', '$Freelance')";
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