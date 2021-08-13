
<!-- PAGE -->
<br><br>
<div class="container-fluid" id="prof">
                    <div class="row">
                        <div class="text-center optical">
                            <p>OPTICAL PROFESSIONALS LOVE OPTAZOOM</p>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="text-center">
                                <img src="https://project8.solutionsplayers.com/uploads/product_image/jeff_tarranto_review.jpg">
                                <div class="content_para">
                                    <p>I highly recommend this website because instead of having to order different types of eye-care supplies from various companies I can simply go on the Optazoom site and get everything I need at one time.</p>
                                </div>
                                <hr class="lin">
                                <p class="content_heading">DR. JEFF TARANTO</p>
                                <p class="post">OPTOMETRIST</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="text-center">
                                <img src="https://project8.solutionsplayers.com/uploads/product_image/filler-rev.jpg">
                                <div class="content_para">
                                    <p>It makes my life so much easier. I wish I had this when I first started my business! That vision was brought into fruition and OptaZoom can be used to order frames, cases and accessories of various vendors all in one place.</p>
                                </div>
                                <hr class="lin">
                                <p class="content_heading">DR. SERGE ARROYO</p>
                                <p class="post">OPTOMETRIST</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="text-center">
                                <img src="https://project8.solutionsplayers.com/uploads/product_image/susan_nutgrass_review.jpg">
                                <div class="content_para">
                                    <p>Optazoom is super convenient. I find whatever I need for our Lab on here. Customer service extremely helpful and I found this amazing and best in this industry . I will continue to use Optazoom without a doubt.</p>
                                </div>
                                <hr class="lin">
                                <p class="content_heading">SUSAN NUTGRASS</p>
                                <p class="post">OPERATIONS MANAGER</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="text-center">
                                <button class="btn butn"> Create Your Free Account</button>
                            </div>
                        </div>
                    </div>
</div>
<div  id="deal">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="b2b text-center">
                    <p>OPTADEALS - EXCLUSIVE SPECIALS</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="text-center">
                    <p class="add">Additional savings with OptaDeals</p>
                    <hr class="hr">
                    <p>Save money and save time with OptaDeals! All OptaDeals are shipped same day* with one-day delivery on all California orders!</p>
                    <p class="font-weight-light text-muted">* on orders placed before 2pm pst</p>
                    <h5 class="wee">New OptaDeals added weekly!</h5>
                </div>
            </div>
            <div class="col-lg-5"> 
                
                <div class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php
            					$limit =  $this->db->get_where('ui_settings',array('ui_settings_id' => 60))->row()->value;
                                $this->db->limit($limit);
                                $this->db->order_by("brand_id", "desc");
                                $brands=$this->db->get('brand')->result_array();
                                foreach($brands as $row){
                            ?>
                           <li class="splide__slide" style="display:flex; justify-content-center; align-itmes-center;"> 
                                <a class="brand_slider" href="<?php echo base_url(); ?>home/category/0/0-<?php echo $row['brand_id']; ?>">
                                    <?php
                                    if(file_exists('uploads/brand_image/'.$row['logo'])){
                                    ?>
                                    <img class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo base_url();?>uploads/brand_image/<?php echo $row['logo']; ?>" style=" padding:6px;" alt=""/> 
                                    <?php
                                        } else {
                                    ?>
                                    <img  class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo base_url(); ?>uploads/brand_image/default.jpg" style=" padding:6px;" />
                                    <?php
                                        }
                                    ?>
                                </a>
                            </li>
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
<section class="page-section mb-0 pb-0" id="cat_pro">
    <div class="container-fluid">
        <div class="row mx-0 d-lg-flex">
        	<!--<div class="col-md-3 px-0">-->
        	<!--	<div class="home-3-category d-flex align-items-center h-100" style="background-image: url('<?php echo $this->crud_model->file_view('category',$row['category'],'','','no','src','',''); ?>');">-->
        	<!--		<div>-->
	        <!--			<h2><?php echo $this->crud_model->get_type_name_by_id('category',$row['category'],'category_name'); ?></h2>-->
	        <!--			<a href="<?php echo base_url(); ?>home/category/<?php echo $row['category']; ?>" class="btn"><?php echo translate('browse_all');?></a>-->
        	<!--		</div>-->
        	<!--	</div>-->
        	<!--</div>-->
            <div class="col-md-12 px-0">
                <div class="tabs-wrapper content-tabs home3_category_box">
                    <ul class="nav nav-tabs d-none">
                        <?php
						if(!empty($row['sub_category'])){
							$i=0;
                        	$sub_categories=$row['sub_category'];
							foreach($sub_categories as $row1){
						?>
                        <li class="<?php if($i==0){ echo 'active';}?>">
                            <a href="#tab<?php echo $row1; ?>" data-toggle="tab">
                                <?php echo $this->crud_model->get_type_name_by_id('sub_category',$row1,'sub_category_name'); ?>
                            </a>
                        </li>
                        <?php
                        	$i++;
							}
						}
						?>
                    </ul>
                    <div class="tab-content">
                    	<?php
						if(!empty($row['sub_category'])){
							$j=0;
							foreach($sub_categories as $row2){
						?>
						
                        <div class="tab-pane fade <?php if($j==0){ echo 'in active';}?>" id="tab<?php echo $row2; ?>">
                            <div id="category-carousel-<?php echo $row2; ?>" class="category-carousel owl-theme carousel-arrow-alt">
                                
                            	<?php
									$box_style =  $this->db->get_where('ui_settings',array('ui_settings_id' => 34))->row()->value;
									$products= $this->crud_model->product_list_set('sub_category',6,$row2);
									foreach($products as $row3){
								?>
                                    
                                	<?php echo $this->html_model->product_box($row3,'grid', $box_style); ?>

                                <?php
									}
								?>
                            </div>
                        </div>
                        <?php
							$j++;
							}
						}
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /PAGE -->
<section class="page-section brands-2 d-none" id="brnd">
    <div class="container">
        <h2 class="section-title section-title-2">
            <span><?php echo translate('our_available_brands');?></span>
        </h2>
        <div class="partners-carousel">
            <div class="brand-carousel carousel-arrow">
                <?php
					$limit =  $this->db->get_where('ui_settings',array('ui_settings_id' => 22))->row()->value;
                    $this->db->limit($limit);
                    $this->db->order_by("brand_id", "desc");
                    $brands=$this->db->get('brand')->result_array();
                    foreach($brands as $row){
                ?>
                <div class="p-item">
                    <a href="<?php echo base_url(); ?>home/category/0/0-<?php echo $row['brand_id']; ?>">
                        <?php
                        if(file_exists('uploads/brand_image/'.$row['logo'])){
                        ?>
                        <img class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo base_url();?>uploads/brand_image/<?php echo $row['logo']; ?>" alt=""/> 
                        <?php
                            } else {
                        ?>
                        <img  class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo base_url(); ?>uploads/brand_image/default.jpg" />
                        <?php
                            }
                        ?>
                    </a>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- /PAGE -->

<script>
$(document).ready(function(){
    $(".brand-carousel").owlCarousel({
        autoplay: false,
        autoplayHoverPause: true,
        loop: true,
        margin: 0,
        dots: false,
        nav: true,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        responsive: {
            0: {items: 3},
            479: {items: 3},
            768: {items: 5},
            991: {items: 6},
            1024: {items: 6},
            1280: {items: 8}
        }
    });
    
});
</script>
