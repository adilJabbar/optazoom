<?php
$random= $_SESSION['random'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="300">
	<title><?php echo translate('login');?> | <?php echo $this->db->get_where('general_settings',array('type' => 'system_name'))->row()->value;?></title>

	<!--STYLESHEET-->
	<!--Roboto Font [ OPTIONAL ]-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300,500" rel="stylesheet" type="text/css">
	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="<?php echo base_url(); ?>template/back/css/bootstrap.min.css" rel="stylesheet">
	<!--Activeit Stylesheet [ REQUIRED ]-->
	<link href="<?php echo base_url(); ?>template/back/css/activeit.min.css" rel="stylesheet">	
	<!--Font Awesome [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!--Demo [ DEMONSTRATION ]-->
	<link href="<?php echo base_url(); ?>template/back/css/demo/activeit-demo.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>template/back/js/jquery-2.1.1.min.js"></script>

	<!--SCRIPT-->
	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/pace/pace.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>template/back/plugins/pace/pace.min.js"></script>
	<?php $ext =  $this->db->get_where('ui_settings',array('type' => 'fav_ext'))->row()->value; $this->benchmark->mark_time();?>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/others/favicon.<?php echo $ext; ?>">
</head>

<body>
	<div id="container" class="cls-container" 
    style="background:url('https://project8.solutionsplayers.com/uploads/category_image/login-bg.jpg'); background-size:cover;">
		<!-- BACKGROUND IMAGE -->
		<div id="bg-overlay"></div>
		<!-- LOGIN FORM -->
		<div class="cls-content">
			<div class="cls-content-sm panel panel-colorful panel-login" style="margin-top: 50px !important;">
				<div class="panel-body">
                	<a class="box-inline" href="<?php echo base_url(); ?><?php echo $this->session->userdata('title'); ?>">
						<img src="<?php echo $this->crud_model->logo('admin_login_logo'); ?>" class="log_icon">
					</a>
                    <hr class="hr-log">
					<p class="pad-btm">Enter Verification Code</p>
					
					
					<form action="<?php echo base_url(); ?>vendor/verifyit/" method="post">
					
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-key" style="color:#FFF !important"></i></div>
								<input type="text" name="code" class="form-control pass" placeholder="Verification Code">
								<input type="hidden" name="random" class="form-control pass" value="<?php echo $random;?>"placeholder="Verification Code">
							</div>
						</div>
						<div class="row">
							
							<div class="col-xs-12">
								<div class="form-group text-right main_login">
									
                                    <button type="submit" class="btn btn-login btn-labeled btn-block fa fa-unlock-alt snbtn">Verify</button>
                                    
								</div>
							</div>
							
						</div>
					</form>
				</div>
			</div>
		</div>
       
	</div>
	<!--jQuery [ REQUIRED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/jquery-2.1.1.min.js"></script>
    
	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/bootstrap.min.js"></script>
    
	<!--Activeit Admin [ RECOMMENDED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/activeit.min.js"></script>

	<!--Background Image [ DEMONSTRATION ]-->
	<script src="<?php echo base_url(); ?>template/back/js/demo/bg-images.js"></script>
    
	<!--Bootbox Modals [ OPTIONAL ]-->
	<script src="<?php echo base_url(); ?>template/back/plugins/bootbox/bootbox.min.js"></script>

	<!--Demo script [ DEMONSTRATION ]-->
	<script src="<?php echo base_url(); ?>template/back/js/ajax_login.js"></script>
	

    <!--Activeit Admin [ RECOMMENDED ]-->
    <script src="<?php echo base_url(); ?>template/back/js/activeit.min.js"></script>
</body>
</html>
