<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<style>
		body {
			background-color: #cccccc;
  			background-image: url("irissayfasi.png");
			font-family: "Trebuchet MS", sans-serif;
		}
		</style>
	</head>
<body>

	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Login</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-6">
			<form action="ogin.php" method="post">>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" required="required"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" required="required"/>
				</div>
 
				<button name="login">Login</button>
			</form>
		</div>
	</div>
</body>	
</html>
