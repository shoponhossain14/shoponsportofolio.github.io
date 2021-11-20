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
    <form method="post" action="project-send.php" enctype="multipart/form-data">
    	<label>Name:</label>
    	<input type="text"
    	       name="name">
						 <input type="file"
							name="my_image">

    	<label>Message:</label>
    	<textarea name="message"></textarea>



    	<input type="submit"
    	       name="btn"
						 value="Upload">
    </form>
</body>
</html>
