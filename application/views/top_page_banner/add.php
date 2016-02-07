<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>About</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>admin_assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>admin_assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>ckeditor/ckeditor.js"></script>

	
</head>
<body>

<div id="container">
	

	<form action="<?php echo site_url() ?>top_page_banner_ctrl/add_banner" method="post" style="align:center">
        <div class="col-lg-offset-2 col-lg-8">
        	<h2>Add About</h2>
			<div class="form-group" >
		        <label for="InputMessage">Banner Title</label>
		        <div class="input-group">
		            <textarea name="banner_title" id="InputMessage" class="form-control" rows="3" required></textarea>
		            	<script type="text/javascript">
		            		CKEDITOR.replace('banner_title');
		            	</script>
		            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="InputMessage">Banner Description</label>
		        <div class="input-group">
		            <textarea name="banner_description" id="InputMessage" class="form-control" rows="5" required></textarea>
		            	<script type="text/javascript">
		            		CKEDITOR.replace('banner_description');
		            	</script>
		            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
		        </div>
		    </div>
		    <div class="form-group" >
		        <label for="InputMessage">Banner Description</label>
		        <div class="input-group">
		            <textarea name="banner_description1" id="InputMessage" class="form-control" rows="3" required></textarea>
		            	<script type="text/javascript">
		            		CKEDITOR.replace('banner_description1');
		            	</script>
		            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
		        </div>
		    </div>
		    <input type="submit" name="submit" id="submit" value="Add" class="btn btn-info pull-right">
		    <a href="<?php echo site_url() ?>admin_ctrl" class="btn btn-info pull-left">Dashboard</a>
		    
		</div>


	</form>
</div>

	

</body>
</html>