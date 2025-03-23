<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
?>
<head>
		
		<link rel="stylesheet" href="addmin.css">

	</head>

<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
	
<div class="login-box">
  	<div class="login-logo">
  	<h2><p style="color:red">	<b>Voter login </b></p></h2>
  	</div>
  
  	<div class="login-box-body">
	  <h5><p style="color:blue" class="login-box-msg">Sign in to start your session</p></h5>

    	<form action="login.php" method="POST">
	
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="voter" placeholder="Voter's ID" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
				<div class="form-group">
						<a href="addmin.css">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
	
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
					  </a>
						</div>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>    
		<script src="js/bootstrap.min.js"></script> 
</body>
</html>