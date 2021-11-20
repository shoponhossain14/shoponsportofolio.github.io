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
    <form method="post" action="dash-send.php">
    	<label>Years Of Experience:</label>
    	<input type="text" 
    	       name="name">
    
    	<label>Happy Clients:</label>
    	<textarea name="message"></textarea>

		<label>Project Completed:</label>
    	<input type="text" 
    	       name="name_1">
    
    	<label>Awards Won:</label>
    	<textarea name="message_1"></textarea>

    	<input type="submit" 
    	       name="btn">
    </form>
</body>
</html>