<html>
<head>
<title>Logo</title>
<meta charset="utf-8">
	<title>Logo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>admin_assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>admin_assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>ckeditor/ckeditor.js"></script>
</head>
<body>
	<div class="container">
		<h2>Upload Image</h2><br>
		<!-- Displaying error -->
		<?php echo $error; ?>

		<?php echo form_open_multipart('logo_ctrl/do_upload');?>

		<input type="file" name="userfile" size="20" />

		<br /><br />

		<input type="submit" value="upload" name="upload" />

		</form>


	</div>
		


</body>
</html>