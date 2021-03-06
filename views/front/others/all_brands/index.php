<!-- BREADCRUMBS -->
<section class="page-section breadcrumbs">
    <div class="container">
        <div class="page-header">
            <h2 class="section-title section-title-lg">
                <span>
                    <?php echo translate('all_brands');?>
                </span>
            </h2>
        </div>
    </div>
</section>
<!-- /BREADCRUMBS -->

<!-- PAGE -->
<section class="page-section" id="brands_page">
    <div class="container-fluid">
        <div class="row">
            <?php
				$this->db->where('digital',NULL);
                $categories=$this->db->get('category')->result_array();
                foreach($categories as $row){
            ?>
            
            <div class="col-md-12">
                <div class="">
                    <div class="brands-list-heading d-none">
                        <div class="heading-text">
                        	<a href="<?php echo base_url(); ?>home/category/<?php echo $row['category_id']; ?>">
                            	<?php echo $row['category_name'];?>
                            </a>
                        </div>
                    </div>
                    <div class="brands-list-body">
                        <div class="container-fluid">
                            <div class="row">
        					<?php 
                            $sub_categories = $this->db->get_where('sub_category', array('category'=> $row['category_id']))->result_array();
                            $result= array();
        						foreach($sub_categories as $row1){
        							$brands = json_decode($row1['brand'],TRUE);
        							foreach($brands as $row2){
        								if(!in_array($row2,$result)){
        									array_push($result,$row2);
        								}
        							}
        						}
        						foreach($result as $row3){
                            ?>
                        
                                <div class="col-md-4 col-sm-6" style="padding:30px;">
                                    <div class="brands-show" itemscope itemtype="http://schema.org/Brand">
                                        
                                                <div class="brand-image d-flex justify-content-center align-items-center">
                                                    <?php
            										if(file_exists('uploads/brand_image/'.$this->crud_model->get_type_name_by_id('brand',$row3,'logo'))){
            										?>
            										<img style="width:70%;  " class="image_delay" itemprop="image" src="<?php echo img_loading(); ?>" data-src="<?php echo base_url();?>uploads/brand_image/<?php echo $this->crud_model->get_type_name_by_id('brand',$row3,'logo'); ?>" alt=""/>
            										<?php
            											} else {
            										?>
            										<img style="width:70%; height:200px "  class="image_delay" itemprop="image" src="<?php echo img_loading(); ?>" data-src="<?php echo base_url(); ?>uploads/brand_image/default.jpg" />
            										<?php
            											}
            										?>
                                                </div>
                                                <div class="brand-name">
                                                    <a itemprop="name" href="<?php echo base_url(); ?>home/category/<?php echo $row['category_id']; ?>/0-<?php echo $row3; ?>">
            											<?php echo $this->crud_model->get_type_name_by_id('brand',$row3,'name');?>
                                                    </a>
                                                </div>
                                           
                                    </div>   
                                </div>
                            
                             <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<!-- /PAGE -->

}

