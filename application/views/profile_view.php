<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo site_url() ?>admin_assets/bootstrap/css/bootstrap.min.css">

<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
         <div class="well profile">
            <div class="col-sm-12">
                <?php foreach ($profile as $row) { ?>

                        <div class="col-xs-12 col-sm-8">
                            <h2><?php echo $row->firstname. ' '. $row->lastname; ?></h2>
                            <p><strong>Email: </strong><?php echo $row->email ?></p>
                        </div>             
                        <div class="col-xs-12 col-sm-4 text-center">
                            <figure>
                                <img src="<?=base_url().'images/profile_img/'.$row->profile_img  ?>" alt="" class="img-circle img-responsive">
                                
                            </figure>
                        </div>
                <?php } ?>

            </div>            
         </div>                 
        </div>
    </div>
</div>
</body>
</html>