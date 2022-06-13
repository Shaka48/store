<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
	</head>
	<body>
		<form action="login.php?voila='shaka'&now='yebo'" method="get" enctype="multipart/form-data">
			<label for="name">Username: </label>
			<input type="text" name="name"></input><br>
			<label for="pword">Password: </label>
			<input type="password" name="pword"></input><br>
			
			<label for="image">Upload you profile picture</label>
			<input type="file" name="pp" id="pp"></input><br>
			<input type="submit" value="login"></input>
		</form>
		<a href="login.php?name=jakalazi&lname=myeni&house=section+11">see name</a>
	</body>
</html>
