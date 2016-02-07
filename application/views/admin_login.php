<?php 
	defined('BASEPATH') or exit('No diect script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	<!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>admin_assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
 -->
    <!-- Custom styles for this template -->
    <!-- <link href="signin.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<div class="container">
  
    <div class="col-lg-offset-3 col-lg-6">
        <form class="form-signin" action="<?php echo base_url(); ?>admin_ctrl/admin_login_validation" method="post">
          <h2 class="form-signin-heading">Please sign in</h2><br>
          <label class="sr-only">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br>
          <label class="sr-only">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" required><br>
         
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>  
  </div> <!-- /container -->

</body>
</html>