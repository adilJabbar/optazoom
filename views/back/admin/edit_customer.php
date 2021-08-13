<?php
	foreach($user_data as $row)
	{
?>

<body>
	<div id="container" class="<?php if($page_name=='product' || $page_name=='digital' || $page_name=='display_settings' || $page_name=='product_bundle'){ echo 'effect mainnav-sm'; } else{ echo 'effect mainnav-lg'; } ?>" >
		<!--NAVBAR-->
		<!--END NAVBAR-->
		<div class="boxed" id="fol">
			<!--CONTENT CONTAINER-->
			<div>
		
    <div id="content-container" style="padding-top:0px !important; margin-top:30px !important;">
        <div class="text-center pad-all">
            <div class="pad-ver">
                <img
                    <?php if(file_exists('uploads/user_image/user_'.$row['user_id'].'.jpg')){ ?>
                        src="<?php echo base_url(); ?>uploads/user_image/user_<?php echo $row['user_id']; ?>.jpg"
                    <?php } else if($row['fb_id'] !== NULL){ ?>
                        src="https://graph.facebook.com/<?php echo $row['fb_id']; ?>/picture?type=large"
					<?php } else if($row['g_id'] !== NULL){ ?>
                    	src="<?php echo $row['g_photo']; ?>"
					<?php } else { ?>
                        src="<?php echo base_url(); ?>uploads/user_image/default.jpg"
                    <?php } ?>
                    class="img-md img-border img-circle" alt="Profile Picture">
            </div>
            <div class="pad-ver">
                <?php echo translate('wallet_balance'); ?> : <?php echo currency($this->wallet_model->user_balance($row['user_id']),'def'); ?>
            </div>
            <h4 class="text-lg text-overflow mar-no"><?php echo $row['username']?></h4>
            <p class="text-sm"><?php echo translate('user');?></p>
            <div class="pad-ver btn-group">
                <?php if($row['facebook'] != ''){ ?>
                    <a href="<?php echo $row['facebook'];?>" target="_blank" class="btn btn-icon btn-hover-primary fa fa-facebook icon-lg"></a>
                <?php } if($row['skype'] != ''){ ?>
                    <a href="<?php echo $row['skype'];?>" target="_blank" class="btn btn-icon btn-hover-info fa fa-twitter icon-lg"></a>
                <?php } if($row['google_plus'] != ''){ ?>
                    <a href="<?php echo $row['google_plus'];?>" target="_blank" class="btn btn-icon btn-hover-danger fa fa-google-plus icon-lg"></a>
                <?php } ?>
               
            </div>
            <hr>
        </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="panel-body">
                <table class="table table-striped" style="border-radius:3px;">
                    <form action="<?php echo base_url().'admin/edit_custom/'.$row['user_id'];?>" method="post">
                    <tr>
                        <th class="custom_td">First Name</th>
                        <td class="custom_td">
                        <input type="text" class="form-control"  name=
                        "username" value="<?php echo $row['username'];?>" required/>
                        </td>
                    </tr>
                    
                    <tr>
                        <th class="custom_td">Last Name</th>
                        <td class="custom_td">
                        <input type="text" name=
                        "surname" class="form-control" value="<?php echo $row['surname'];?>" required/>
                        </td>
                    </tr>
                    <tr>
                        <th class="custom_td">Address 1</th>
                        <td class="custom_td">
                            <input type="text" name=
                        "address1" class="form-control" value="<?php echo $row['address1'];?>" required/>
                        </td>
                    </tr>
                    <tr>
                        <th class="custom_td">Address 2</th>
                        <td class="custom_td">
                           <input type="text" name=
                        "address2" class="form-control" value="<?php echo $row['address2'];?>" required/>
                        </td>
                    </tr>
                    <tr>
                        <th class="custom_td">City</th>
                        <td class="custom_td">
                           <input type="text" name=
                        "city" class="form-control" value="<?php echo $row['city'];?>" required/>
                        </td>
                    </tr>
                    
                    <tr>
                        <th class="custom_td">Zip Code</th>
                        <td class="custom_td">
                           <input type="number" name=
                        "zip" class="form-control" value="<?php echo $row['zip'];?>" required/>
                        </td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('email');?></th>
                        <td class="custom_td"> <input type="text" class="form-control" name=
                        "email" value="<?php echo $row['email'];?>" required/> </td>
                    </tr>
                    <tr>
                        <th class="custom_td"><?php echo translate('phone_number');?></th>
                        <td class="custom_td"> <input type="text" class="form-control" name=
                        "phone" value="<?php echo $row['phone'];?>" required/></td>
                    </tr>
                    <tr>
                        <th class="custom_td"></th>
                        <td class="custom_td"> <input type="submit" class="btn btn-info pull-right" value="Update" /></td>
                    </tr>
                    </form>
                </table>
              </div>
            </div>
        </div>
    </div>
<?php
	}
?>

<style>
.custom_td{
border-left: 1px solid #ddd;
border-right: 1px solid #ddd;
border-bottom: 1px solid #ddd;
}
</style>
<script>
$(document).ready(function(e) {
    $('.modal-footer').find('.btn-purple').hide();
});
</script>

</div>
<button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
</div>
