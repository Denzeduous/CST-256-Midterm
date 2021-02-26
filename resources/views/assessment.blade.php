<html>
	<head>
		<title>Midterm</title>
	</head>
	
	<body>
		<form action="/midterm/public/signupcheck" method="POST">
			@csrf

			<label for="username">Username</label>
			<input name="username" type="text"><br />
			
			<label for="firstname">First Name</label>
			<input name="firstname" type="text"><br />
			
			<label for="lastname">Last Name</label>
			<input name="lastname" type="text"><br />
			
			<label for="code">Class Code</label>
			<input name="code" type="password"><br />
			
			<input type="submit">
		</form>
	</body>
</html>