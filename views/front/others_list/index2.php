
<section class="page-section breadcrumbs">
    <div class="container">
        <div class="page-header">
            <h2 class="section-title section-title-lg">
                <span>
                    <?php echo translate($product_type);?>  
                    <span class="thin"> <?php echo translate('products');?></span>
                </span>
            </h2>
         </div>
    </div>
</section>
<!-- /BREADCRUMBS -->
<!-- PAGE WITH SIDEBAR -->
<input type="hidden" value="<?php echo $product_type; ?>" id="type" />
<section class="page-section with-sidebar">
    <div class="container">
        <div class="row">
            <!-- SIDEBAR -->
            <?php 
                include 'sidebar.php';
            ?>
            <!-- /SIDEBAR -->
            <!-- CONTENT -->
            <div class="col-md-9 content" id="content">
                
                <div id="page_content">
                    <div class="col-md-4 content" id="content">
                
                <div id="page_content" class="mt-3">
<!--===================================== Product_box ===================================================-->
<div class="thumbnail box-style-1 no-padding" itemscope itemtype="http://schema.org/Product">
    <div class="media">
    	<div class="cover"></div>
        <div class="media-link image_delay" data-src="<?php echo $this->crud_model->file_view('product',$product_id,'','','thumb','src','multi','one'); ?>" style="background-image:url('<?php echo img_loading(); ?>');background-size:cover;">
        	<?php
                if($this->crud_model->get_type_name_by_id('product',$product_id,'current_stock') <=0 && !$this->crud_model->is_digital($product_id)){ 
            ?>
                <div class="sticker red">
                    <?php echo translate('out_of_stock'); ?>
                </div>
            <?php
                }
            ?>
            <?php 
                $discount= $this->db->get_where('product',array('product_id'=>$product_id))->row()->discount ;           
                if($discount > 0){ 
            ?>
            <div class="sticker green">
                <?php echo translate('discount');?> 
				<?php 
                     $type = $this->db->get_where('product',array('product_id'=>$product_id))->row()->discount_type ; 
                     if($type =='amount'){
                          echo currency($discount); 
                          } else if($type == 'percent'){
                               echo $discount; 
                ?> 
                    % 
                <?php 
                    }
                ?>
            </div>
            <?php } ?>
            <div class="quick-view-sm hidden-xs hidden-sm">
                <span data-toggle="modal" data-target="#exampleModal">
                    <span class="icon-view" data-toggle="modal" data-target="#exampleModal" data-original-title="<?php  echo translate('quick_view'); ?>">
                        <strong><i class="fa fa-eye"></i></strong>
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="caption text-center">
        <h4 itemprop="name" class="caption-title">
        	<a itemprop="url" href="<?php echo $this->crud_model->product_link($product_id); ?>">
				<span itemprop="name"><?php echo $title; ?></span>
            </a>
        </h4>
        <?php $rating = $this->crud_model->rating($product_id); ?>
        <?php $rating_count = $this->crud_model->rating_count($product_id); ?>
        <span style="display: none" itemprop="ratingValue"><?= $rating?></span>
        <span style="display: none" itemprop="reviewCount"><?= $rating_count?></span>
        <div class="rateit" data-rateit-value="<?= $rating ?>" data-rateit-ispreset="true" data-rateit-readonly="true" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"></div>
       
        <?php if ($this->db->get_where('general_settings', array('general_settings_id' => '58'))->row()->value == 'ok' and $this->db->get_where('general_settings', array('general_settings_id' => '81'))->row()->value == 'ok'): ?>
        <div class="vendor">
            <?php echo $this->crud_model->product_by($product_id,'with_link'); ?>
        </div>
        <?php endif ?>
        <div class="button">
            <span class="icon-view left" onclick="do_compare(<?php echo $product_id; ?>,event)" data-toggle="tooltip" 
            	data-original-title="<?php if($this->crud_model->is_compared($product_id)=="yes"){ echo translate('compared'); } else { echo translate('compare'); } ?>">
                <strong><i class="fa fa-exchange"></i></strong>
            </span>
            <span class="icon-view middle" onclick="to_wishlist(<?php echo $product_id; ?>,event)" data-toggle="tooltip" 
            	data-original-title="<?php if($this->crud_model->is_wished($product_id)=="yes"){ echo translate('added_to_wishlist'); } else { echo translate('add_to_wishlist'); } ?>">
                <strong><i class="fa fa-heart"></i></strong>
            </span>
            <span class="icon-view right " onclick="to_cart(<?php echo $product_id; ?>,event)" data-toggle="tooltip" 
            	data-original-title="<?php if($this->crud_model->is_added_to_cart($product_id)){ echo translate('added_to_cart'); } else { echo translate('add_to_cart'); } ?>">
                <strong><i class="fa fa-shopping-cart"></i></strong>
            </span>
        </div>
    </div>
</div>
</div>
</div>
<!--------------modal----------------->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


                </div>
            </div>
            <!-- /CONTENT -->
        </div>
    </div>
</section>
<!-- /PAGE WITH SIDEBAR -->