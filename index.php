<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/index_style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-center">Welcome</h1>
        </div>
        <form action="logeo.php" method="POST">
        	 <div class="modal-body">
        	    <div class="form-group">
        	        <input type="text" class="form-control input-lg" placeholder="Username" name="usuario" />
        	    </div>
        	
        	    <div class="form-group">
        	        <input type="password" class="form-control input-lg" placeholder="Password" name="clave" />
        	    </div>
        	
        	    <div class="form-group">
        	        <input type="submit" class="btn btn-block btn-lg btn-primary" value="Let me in."/>
        	        <span class="pull-right"><a href="registro.php">Register</a></span><span><a href="#">Forgot Password</a></span>
        	    </div>
        	</div>
        </form>
    </div>
 </div>

</body>
<footer>
	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</footer>
</html>