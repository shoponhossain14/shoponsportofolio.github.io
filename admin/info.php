<!DOCTYPE html>
<html>
<head>
	<title>Example</title>
	<style>
		body {
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			font-family: arial, sans-serif;
		}
		input, textarea {
			display: block;
			width: 300px;
			font-size: 18px;
			margin: 7px 0px;
		}
		label {
			display: block;
			padding: 2px 0px;
		}
	</style>
</head>
<body>
    <form method="post" action="info-send.php">
    <label>Full Name:</label>
    	<input type="text" 
    	       name="Full_Name">	
    
    
    <label>Age:</label>
    	<input type="text" 
    	       name="Age">
    
    	<label>Email:</label>
    	<textarea name="Email"></textarea>

        <label>Phone:</label>
    	<input type="text" 
    	       name="Phone">

               <label>Experiace:</label>
    	<input type="text" 
    	       name="Experience">

               <label>Adress:</label>
    	<input type="text" 
    	       name="Address">

               <label>Language:</label>
    	<input type="text" 
    	       name="Language">

               <label>Freelance:</label>
    	<input type="text" 
    	       name="Freelance">

    	<input type="submit" 
    	       name="btn">
    </form>
</body>
</html>