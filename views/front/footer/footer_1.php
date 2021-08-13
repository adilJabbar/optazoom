
<?php 
	$contact_address =  $this->db->get_where('general_settings',array('type' => 'contact_address'))->row()->value;
	$contact_phone =  $this->db->get_where('general_settings',array('type' => 'contact_phone'))->row()->value;
	$contact_email =  $this->db->get_where('general_settings',array('type' => 'contact_email'))->row()->value;
	$contact_website =  $this->db->get_where('general_settings',array('type' => 'contact_website'))->row()->value;
	$contact_about =  $this->db->get_where('general_settings',array('type' => 'contact_about'))->row()->value;
	
	$facebook =  $this->db->get_where('social_links',array('type' => 'facebook'))->row()->value;
	$googleplus =  $this->db->get_where('social_links',array('type' => 'google-plus'))->row()->value;
	$twitter =  $this->db->get_where('social_links',array('type' => 'twitter'))->row()->value;
	$skype =  $this->db->get_where('social_links',array('type' => 'skype'))->row()->value;
	$youtube =  $this->db->get_where('social_links',array('type' => 'youtube'))->row()->value;
	$pinterest =  $this->db->get_where('social_links',array('type' => 'pinterest'))->row()->value;
	
	$footer_text =  $this->db->get_where('general_settings',array('type' => 'footer_text'))->row()->value;
	$footer_category =  json_decode($this->db->get_where('general_settings',array('type' => 'footer_category'))->row()->value);
?>
<div id="foot_1">
    
<footer class="footer1">
	<div class="footer1-widgets">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-sm col-xs-12">
					<div class="widget">
						<a class="" href="<?php echo base_url(); ?>">
                          	<img class="pb-4 img-responsive" src="https://www.optazoom.com/images/logo.png" alt="">
						</a>
						<p><?php echo $footer_text ;?></p>
						<?php
							echo form_open(base_url() . 'home/subscribe', array(
								'class' => '',
								'method' => 'post'
							));
						?>    
							<div class="form-group row">
                            	<div class="col-md-12">
									<input type="text" class="form-control col-md-8" name="email" id="subscr" placeholder="<?php echo translate('email_address'); ?>">
                                	<span class="btn btn-subcribe subscriber enterer"><?php echo translate('subscribe'); ?></span>
                                </div>
							</div>                
					   </form> 
					</div>
				</div>
				
				<div class="col-md-4  col-sm-12 hidden-xs">
					<div class="widget widget-categories">
						<h4 class="widget-title"><?php echo translate('useful_links');?></h4>
						<ul>
							<li>
								<a href="<?php echo base_url(); ?>home/"><?php echo translate('home');?>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>home/category/0/0-0"><?php echo translate('all_products');?>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>home/others_product/featured"><?php echo translate('featured_products');?>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>home/contact/"><?php echo translate('contact');?>
								</a>
							</li>
                           
                            <li>
                                <a href="<?php echo base_url(); ?>home/news/<?php echo $row['parmalink']; ?>">
                                   Opta News
                                </a>
                            </li>
                           
						</ul>
					</div>
				</div>
				<div class="col-md-3 hidden-xs hidden-sm">
					<div class="widget contact">
						<h4 class="widget-title"><?php echo translate('contact_us');?></h4>
						<div class="media-list">
							<div class="media">
								<i class="pull-left fa fa-home"></i>
								<div class="media-body">
									<strong><?php echo translate('address');?>:</strong>
                                    <br>
									<?php echo $contact_address;?>
								</div>
							</div>
							<div class="media">
								<i class="pull-left fa fa-phone"></i>
								<div class="media-body">
									<strong><?php echo translate('phone');?>:</strong>
                                    <br>
									<?php echo $contact_phone;?>
								</div>
							</div>
							<div class="media">
								<i class="pull-left fa fa-globe"></i>
								<div class="media-body">
									<strong><?php echo translate('website');?>:</strong>
                                    <br>
									<a href="https://<?php echo $contact_website;?>"><?php echo $contact_website;?></a>
								</div>
							</div>
							<div class="media">
								<i class="pull-left fa fa-envelope-o"></i>
								<div class="media-body">
									<strong><?php echo translate('email');?>:</strong>
                                    <br>
									<a href="mailto:<?php echo $contact_email;?>">
										<?php echo $contact_email;?>
									</a>
								</div>
							</div>
							<ul class="social-nav model-2 d-none" style="float: left;margin-top: 10px">
								<?php
								if ($facebook != '') {
								?>
								<li style="border-top: none;"><a href="<?php echo $facebook;?>" class="facebook social_a"><i class="fa fa-facebook"></i></a></li>
								<?php
								} if ($twitter != '') {
								?>
								<li style="border-top: none;"><a href="<?php echo $twitter;?>" class="twitter social_a"><i class="fa fa-twitter"></i></a></li>
								<?php
								} if ($googleplus != '') {
								?>
								<li style="border-top: none;"><a href="<?php echo $googleplus;?>" class="google-plus social_a"><i class="fa fa-google-plus"></i></a></li>
								<?php
								} if ($pinterest != '') {
								?>
								<li style="border-top: none;"><a href="<?php echo $pinterest;?>" class="pinterest social_a"><i class="fa fa-pinterest"></i></a></li>
								<?php
								} if ($youtube != '') {
								?>
								<li style="border-top: none;"><a href="<?php echo $youtube;?>" class="youtube social_a"><i class="fa fa-youtube"></i></a></li>
								<?php
								} if ($skype != '') {
								?>
								<li style="border-top: none;"><a href="<?php echo $skype;?>" class="skype social_a"><i class="fa fa-skype"></i></a></li>
								<?php
								}
								?>
							</ul>
						</div>
					</div>
				</div>
                
			</div>
		</div>
	</div>
	<div  id="mark">
	    <marquee width="100%" direction="left" height="30%" class="py-3" onmouseover="this.stop();" onmouseout="this.start();">
            <span class="pr-5"><span class="opti">Optical News:</span> The Vision Council Releases Results of January 2021 Eyecare Provider Insights Survey.</span>
             <span class="pr-5"><span class="opti">Optical News:</span> The Vision Council Releases Results of January 2021 Eyecare Provider Insights Survey.</span>
            <span><span class="opti">Optical News:</span> The Vision Council Releases Results of January 2021 Eyecare Provider Insights Survey.</span>
        </marquee>
	</div>
	<div class="footer1-meta">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-xs-12">
					<div class="copyright" version="Currently <?= demo()?'demo':''?> v<?php echo $this->db->get_where('general_settings',array('type'=>'version'))->row()->value; ?>">
						<?php echo date('Y'); ?> &copy; 
						<?php echo translate('all_rights_reserved'); ?> @ 
						<a href="<?php echo base_url(); ?>">
							<?php echo $system_title; ?>
						</a> 
							| 
						<a href="<?php echo base_url(); ?>home/legal/terms_conditions" class="link">
							<?php echo translate('terms_&_condition'); ?>
						</a> 
							| 
						<a href="<?php echo base_url(); ?>home/legal/privacy_policy" class="link">
							<?php echo translate('privacy_policy'); ?>
						</a>
					</div>
				</div>
				
				<div class="col-md-4 hidden-xs hidden-sm">
					<div class="payments" style="font-size: 30px;">
						<ul>
							<li><img src="<?php echo base_url(); ?>uploads/others/payment.png"></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
</footer>

</div>
<style>
.link:hover{
	text-decoration:underline;
}
.model-2 a {
	margin: 0px 1px;
	height: 32px;
	width: 32px;
	line-height: 32px;
}
</style>