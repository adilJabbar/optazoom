<!-- Header top bar -->

<style>
    .btn-store {
      color: #777777;
      min-width: 254px;
      padding: 12px 20px !important;
      border-color: #dddddd !important;
    }
    
    .btn-store:focus, 
    .btn-store:hover {
      color: #ffffff !important;
      background-color: #168eea;
      border-color: #168eea !important;
    }
    
    .btn-store .btn-label, 
    .btn-store .btn-caption {
      display: block;
      text-align: left;
      line-height: 1;
    }
    
    .btn-store .btn-caption {
      font-size: 24px;
    }
    @media screen and (min-width: 600px) {
      .modal-wi{
        width:80%;  
      }
    }
    @media screen and (min-width: 400px) {
      .modal-wi{
        width:80%;  
      }
    }
</style>
<div id="head" >
    <div class="top-bar" style="color:#515b6f;">
        <div class="container-fluid">
            
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="top-bar-left">
                    <ul class="list-inline">
                        <li class="icon_num" >
                            <div class="d-flex align-items-center">
                                <i class="fa fa-phone phone_ico"></i><span>Customer Support: 844-700-9666</span>
                            </div>
                        </li>
                        <li class="dropdown flags d-none">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php
                                    if($set_lang = $this->session->userdata('language')){} else {
                                        $set_lang = $this->db->get_where('general_settings',array('type'=>'language'))->row()->value;
                                    }
                                    $lid = $this->db->get_where('language_list',array('db_field'=>$set_lang))->row()->language_list_id;
                                    $lnm = $this->db->get_where('language_list',array('db_field'=>$set_lang))->row()->name;
                                ?>
                                <img src="<?php echo $this->crud_model->file_view('language_list',$lid,'','','no','src','','','.jpg') ?>" width="20px;" alt=""/> <span class="hidden-xs"><?php echo $lnm; ?></span><i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="dropdown-menu">
                                    <?php
                                        $langs = $this->db->get_where('language_list',array('status'=>'ok'))->result_array();
                                        foreach ($langs as $row)
                                        {
                                    ?>
                                        <li <?php if($set_lang == $row['db_field']){ ?>class="active"<?php } ?> >
                                            <a class="set_langs" data-href="<?php echo base_url(); ?>home/set_language/<?php echo $row['db_field']; ?>">
                                                <img src="<?php echo $this->crud_model->file_view('language_list',$row['language_list_id'],'','','no','src','','','.jpg') ?>" width="20px;" alt=""/>
                                                <?php echo $row['name']; ?>
                                                <?php if($set_lang == $row['db_field']){ ?>
                                                    <i class="fa fa-check"></i>
                                                <?php } ?>
                                            </a>
                                        </li>
                                    <?php
                                        }
                                    ?>
                            </ul>
                        </li>
                        <li class="dropdown flags d-none" style="z-index: 1001;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php                                            
                                    if($currency_id = $this->session->userdata('currency')){} else {
                                        $currency_id = $this->db->get_where('business_settings', array('type' => 'currency'))->row()->value;
                                    }
                                    $symbol = $this->db->get_where('currency_settings',array('currency_settings_id'=>$currency_id))->row()->symbol;
                                    $c_name = $this->db->get_where('currency_settings',array('currency_settings_id'=>$currency_id))->row()->name;
                                ?>
                                <span class="hidden-xs"><?php echo $c_name; ?></span> (<?php echo $symbol; ?>)
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul role="menu" class="dropdown-menu">
                                <?php
                                    $currencies = $this->db->get_where('currency_settings',array('status'=>'ok'))->result_array();
                                    foreach ($currencies as $row)
                                    {
                                ?>
                                    <li <?php if($currency_id == $row['currency_settings_id']){ ?>class="active"<?php } ?> >
                                        <a class="set_langs" data-href="<?php echo base_url(); ?>home/set_currency/<?php echo $row['currency_settings_id']; ?>">
                                            <?php echo $row['name']; ?> (<?php echo $row['symbol']; ?>)
                                            <?php if($currency_id == $row['currency_settings_id']){ ?>
                                                <i class="fa fa-check"></i>
                                            <?php } ?>
                                        </a>
                                    </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </li>
                        <?php if($this->crud_model->get_type_name_by_id('general_settings','83','value') == 'ok'){ ?>
                            <li class="dropdown flags d-none" style="z-index: 1001;">
                                <a href="<?=base_url()?>home/premium_package" class="" >
                                    <i class="fa fa-gift"></i> <?php echo translate('premium_packages');?>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if(demo()) { ?>
                            <li class="dropdown flags d-none" style="z-index: 1001;">
                                <i class="text-danger blink_me fa fa-exclamation-triangle" style="font-size: 16px"></i>
                                For demo purpose many operations including deletion,emailing,file uploading are <strong>DISABLED</strong>
                            </li>
                        <?php } ?>
                    </ul>
                    
                </div>    
            </div> 
            <!--<div class="col-md-6 col-sm-6 col-xs-12 text-right" style="clip-path: polygon(15% 0, 100% 0%, 100% 100%, 0% 100%); background-color:#636c7e;">-->
            <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                <div class="top-bar-right">
                    ----- ----- -----
                </div>  
            </div>
        </div>
    </div>
    <!-- /Header top bar -->
    
    <!-- HEADER -->
    <header class="header header-logo-left">
        <div class="navigation-wrapper px-3">
            <div class="container-fluid">
                <!-- Navigation -->
                <div class="row">
                    <div class="col-md-3 py-4 col-sm-12 pr-md-5 pr-xs-4 d-flex">
                        <?php
                                $home_top_logo = $this->db->get_where('ui_settings',array('type' => 'home_top_logo'))->row()->value;
                        ?>
                        <div class="">
                            
                            <a href="<?php echo base_url();?>">
    
                                <img src="<?php echo $this->crud_model->logo('home_top_logo'); ?>" alt="<?php echo $system_name;?>" class="brand-icon" style="padding:8px; width:200px;">
                            </a>
                            
                        </div> 
                        <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                    </div>
                    <div class="col-md-9  py-lg-5 py-md-0 col-sm-12">
                        <?php
                        	$others_list=$this->uri->segment(3);
            			?>
                        <nav class="navigation closed clearfix">
                            <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                            <ul class="nav sf-menu">
                                <?php if($this->db->get_where('ui_settings',array('type'=>'header_homepage_status'))->row()->value == 'yes'){?>
                                <li <?php if($asset_page=='home'){ ?>class="active"<?php } ?>>
                                    <a href="<?php echo base_url(); ?>home">
                                        <?php echo translate('homepage');?>
                                    </a>
                                </li>
                                <?php } if($this->db->get_where('ui_settings',array('type'=>'header_all_categories_status'))->row()->value == 'yes'){?>
                                <li class="hidden-sm hidden-xs <?php if($asset_page=='all_category'){ echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>home/all_category">
            							<?php echo translate('all_categories');?>
                                    </a>
                                    <ul style="width: 860px; background:#fff; left:-100px;">
                                    	<?php
            								$all_category = $this->db->get('category')->result_array();
            								foreach($all_category as $row)
            								{
            									if($this->crud_model->if_publishable_category($row['category_id'])){
            							?>
                                        <li style="float:left">
                                            
                                            <a href="<?php echo base_url(); ?>home/category/<?php echo $row['category_id']; ?>">
                                                <div class="p-3 m-2" style="border:1px solid gray;  text-align:center;">
                                                    <div style="width:150px; height:150px;">
                                                        <!--<img src="https://rendat.com/uploads/category_image/" width="100px">-->
                                                        <img src="<?php echo base_url(); ?>uploads/category_image/<?php echo $row['banner']; ?>" width="100px"> 
                                                        <br><br>
                                                        <?php echo $row['category_name']; ?> 
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <?php
            									}
            								}
            							?>
                                    </ul>
                                </li>
                                <?php } ?>
                                <li class="hidden-lg hidden-md <?php if($asset_page=='all_category'){ echo 'active'; } ?>">
                                    <a href="#">
            							<?php echo translate('all_categories');?>
                                    </a>
                                    <ul>
                                    	<?php
            								$all_category = $this->db->get('category')->result_array();
            								foreach($all_category as $row)
            								{
            									if($this->crud_model->if_publishable_category($row['category_id'])){
            							?>
                                        <li>
                                            <a href="<?php echo base_url(); ?>home/category/<?php echo $row['category_id']; ?>">
                                                <?php echo $row['category_name']; ?>
                                            </a>
                                        </li>
                                        <?php
            									}
            								}
            							?>
                                    </ul>
                                </li>
                                <li class="hidden-lg hidden-md <?php if($asset_page=='all_category'){ echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>home/all_category">
                                        <?php echo translate('all_sub_categories');?>
                                    </a>
                                </li>
                                <?php if($this->db->get_where('ui_settings',array('type'=>'header_featured_products_status'))->row()->value == 'yes'){?>
                                <li class="<?php if($others_list=='featured'){ echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>home/others_product/featured">
                                        <?php echo translate('featured_products');?>
                                    </a>
                                </li>
                                <?php } if($this->db->get_where('ui_settings',array('type'=>'header_todays_deal_status'))->row()->value == 'yes'){?>
                                <li class="<?php if($others_list=='todays_deal'){ echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>home/others_product/todays_deal">
                                        <?php echo translate('todays_deal');?>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if($this->crud_model->get_type_name_by_id('general_settings','82','value') == 'ok'){
                                        if($this->db->get_where('ui_settings',array('type'=>'header_bundled_product_status'))->row()->value == 'yes'){ ?>
                                <li <?php if($page_name=='bundled_product'){ ?>class="active"<?php } ?>>
                                    <a href="<?php echo base_url(); ?>home/bundled_product">
                                        <?php echo translate('bundled_product');?>
                                    </a>
                                </li>
                                 <?php } }?>
                                <?php if(0){
                                        if(1){ ?>
                                <li <?php if($page_name=='customer_product_bulk_upload'){ ?>class="active"<?php } ?>>
                                    <a href="<?php echo base_url(); ?>home/customer_product_bulk_upload">
                                        <?php echo translate('Bulk upload');?>
                                    </a>
                                </li>
                                <?php }} if($this->crud_model->get_type_name_by_id('general_settings','83','value') == 'ok'){
                                            if($this->db->get_where('ui_settings',array('type'=>'header_classifieds_status'))->row()->value == 'yes'){?>
                                <li <?php if($page_name=='customer_products'){ ?>class="active"<?php } ?>>
                                    <a href="<?php echo base_url(); ?>home/customer_products">
                                        <?php echo translate('classifieds');?>
                                    </a>
                                </li>
                                <?php }} if ($this->crud_model->get_type_name_by_id('general_settings','58','value') !== 'ok') {
                                            if($this->db->get_where('ui_settings',array('type'=>'header_latest_products_status'))->row()->value == 'yes'){
            					?>
                                <li class="<?php if($others_list=='latest'){ echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>home/others_product/latest">
                                        <?php echo translate('latest_products');?>
                                    </a>
                                </li>
                                <?php
            						}}
            					?>
                                <?php
                                	if ($this->crud_model->get_type_name_by_id('general_settings','68','value') == 'ok') {
                                        if($this->db->get_where('ui_settings',array('type'=>'header_all_brands_status'))->row()->value == 'yes') {
            					?>
                                <li <?php if($asset_page=='all_brands'){ ?>class="active"<?php } ?>>
                                    <a href="<?php echo base_url(); ?>home/brands">
                                        <?php echo translate('all_brands');?>
                                    </a>
                                </li>
                                <?php
            						}
                                }
            					?>
                                <?php
                                	if ($this->crud_model->get_type_name_by_id('general_settings','58','value') == 'ok') {
                                        if ($this->crud_model->get_type_name_by_id('general_settings','81','value') == 'ok'){
                                            if($this->db->get_where('ui_settings',array('type'=>'header_all_vendors_status'))->row()->value == 'yes') {
            					?>
                                <li style="display:none;" <?php if($asset_page=='all_vendor'){ ?>class="active"<?php } ?>>
                                    <a href="<?php echo base_url(); ?>home/all_vendor/">
                                        <?php echo translate('all_vendors');?>
                                    </a>
                                </li>
                                <?php
                                            }
            						    } 
                                    }
            					?>
                                <?php if($this->db->get_where('ui_settings',array('type'=>'header_blogs_status'))->row()->value == 'yes') {?>
                                <li style="display:none;" class="hidden-sm hidden-xs <?php if($asset_page=='blog'){ echo 'active'; } ?>">
                                    <a href="<?php echo base_url(); ?>home/blog">
                                        <?php echo translate('blogs');?>
                                    </a>
                                    <ul>
                                    	<?php
            								$blogs=$this->db->get('blog_category')->result_array();
            								foreach($blogs as $row){
            							?>
                                        <li>
                                            <a href="<?php echo base_url(); ?>home/blog/<?php echo $row['blog_category_id']; ?>">
                                                <?php echo $row['name']; ?>
                                            </a>
                                        </li>
                                        <?php
            								}
            							?>
                                    </ul>
                                </li>
                                <?php }?>
                                <li style="display:none;" class="hidden-lg hidden-md <?php if($asset_page=='blog'){ echo 'active'; } ?>">
                                    <a href="#">
                                        <?php echo translate('blogs');?>
                                    </a>
                                    <ul>
                                    	<?php
            								$blogs=$this->db->get('blog_category')->result_array();
            								foreach($blogs as $row){
            							?>
                                        <li>
                                            <a href="<?php echo base_url(); ?>home/blog/<?php echo $row['blog_category_id']; ?>">
                                                <?php echo $row['name']; ?>
                                            </a>
                                        </li>
                                        <?php
            								}
            							?>
                                    </ul>
                                </li>
                                <?php
                                	if ($this->crud_model->get_type_name_by_id('general_settings','58','value') == 'ok' && $this->crud_model->get_type_name_by_id('general_settings','81','value') == 'ok') {
                                        if($this->db->get_where('ui_settings',array('type'=>'header_store_locator_status'))->row()->value == 'yes') {
            					?>
                                <li style="display:none;" <?php if($asset_page=='store_locator'){ ?>class="active"<?php } ?>>
                                    <a href="<?php echo base_url(); ?>home/store_locator">
                                        <?php echo translate('store_locator');?>
                                    </a>
                                </li>
                                <?php
                                        }
            						}
            					?>
                                <?php if($this->db->get_where('ui_settings',array('type'=>'header_contact_status'))->row()->value == 'yes') {?>
                                <li style="display:none;" <?php if($asset_page=='contact'){ ?>class="active"<?php } ?>>
                                    <a href="<?php echo base_url(); ?>home/contact">
                                        <?php echo translate('contact');?>
                                    </a>
                                </li>
                                <?php } if($this->db->get_where('ui_settings',array('type'=>'header_more_status'))->row()->value == 'yes') {?>
                                <li style="display:none;">
                                    <a href="#">
            							<?php echo translate('more');?>
                                    </a>
                                    <ul>
                                        <?php
            								if ($this->crud_model->get_type_name_by_id('general_settings','58','value') == 'ok') {
            							?>
            							<li class="<?php if($others_list=='latest'){ echo 'active'; } ?>">
            								<a href="<?php echo base_url(); ?>home/others_product/latest">
            									<?php echo translate('latest_products');?>
            								</a>
            							</li>
            							<?php
            								}
            							?>
                                        <?php
            							$this->db->where('status','ok');
                                        $all_page = $this->db->get('page')->result_array();
            							foreach($all_page as $row2){
            							?>
                                        <li>
                                            <a href="<?php echo base_url(); ?>home/page/<?php echo $row2['parmalink']; ?>">
                                                <?php echo $row2['page_name']; ?>
                                            </a>
                                        </li>
                                        <?php
            							}
            							?>
                                    </ul>
                                </li>
                                <?php }?>
                            </ul>
                        </nav>    
                    </div> 
                </div>
                
                <!-- /Navigation -->
            </div>
        </div>
        
        <div class="header-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 pr-0">
                        <!-- Header search -->
                        <div class="header-search mt-lg-0 px-xl-4"> 
                            <div class="form-group">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10 px-0">
                                            <div class="" >
                                                <form action="<?php echo base_url() . 'tiktok/search' ?>" method="post">
                                                    <input type="text" id="search_data" class="form-control search-input" name="search-term" placeholder="What are you looking for?" onkeyup="liveSearch()" autocomplete="off">
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 d-xs-none px-0">
                                            <select
                                                class="selectpicker header-search-select cat_select hidden-xs" data-live-search="true" name="category"
                                                onchange="fetchvalue(this)"
                                                data-toggle="tooltip" title="<?php echo translate('select');?>">
                                                <option value="0">Categories</option>
                                                <option value="vendor">Vendor</option>
                                                <?php 
                                                    // $categories = $this->db->get('category')->result_array();
                                                    // foreach ($categories as $row1) {
                                                    //     if($this->crud_model->if_publishable_category($row1['category_id'])){
                                                ?>
                                                <!--<option value="<?php //echo $row1['category_id']; ?>"><?php //echo $row1['category_name']; ?></option>-->
                                                <?php 
                                                    //     }
                                                    // }
                                                ?>
                                            </select>    
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 pl-0">
                                            <button type="submit" class="shrc_btn"><i class="fa fa-search" style="color: #fff;"></i></button>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
                        <!-- Header shopping cart -->
                        <div class="header-cart">
                            <div class="cart-wrapper">
                                <a href="<?php echo base_url(); ?>home/compare" class="d-none btn btn-theme-transparent" id="compare_tooltip" data-toggle="tooltip" data-original-title="<?php echo $this->crud_model->compared_num(); ?>" data-placement="right" >
                                    <i class="fa fa-exchange"></i>
                                    <span class="hidden-md hidden-sm hidden-xs"><?php echo translate('compare'); ?></span>
                                    (
                                    <span id="compare_num">
                                        <?php echo $this->crud_model->compared_num(); ?>
                                    </span>
                                    )
                                </a>
                                <a href="#" class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart">
                                    <i class="fa fa-shopping-cart"></i> 
                                    <span class="hidden-xs"> 
                                        <span class="cart_num"></span> 
                                        <?php echo translate('item(s)'); ?>
                                    
                                    </span>  
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <!-- Mobile menu toggle button -->
                                
                                <!-- /Mobile menu toggle button -->
                            </div>
                        </div>
                        <!-- Header shopping cart -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div id="suggestions">
                <div id="autoSuggestionsList" style="background-color: #f7f7f7;">
                </div>
            </div>
        </div>
    </header>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="border:none !important;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p></p>
                    <div class="container">
                    	<div class="row text-center modal-wi">
                    		<h2>For better experience download mobile app</h2>
                    		<br/>
                            <p>
                                <a href="#" class="btn btn-store">
                                    <span class="fa fa-apple fa-3x pull-left"></span> 
                                    <span class="btn-label">Download on the</span>
                                    <span class="btn-caption">App Store</span>
                                </a>
                                <a href="#" class="btn btn-store">
                                    <span class="fa fa-android fa-3x pull-left"></span> 
                                    <span class="btn-label">Download on the</span>
                                    <span class="btn-caption">Google Play</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- /HEADER -->
            <script type="text/javascript">
                $(document).ready(function(){
                    if(screen.width < 800){
                        $("#myModal").modal();
                    }
                    $('.set_langs').on('click',function(){
                        var lang_url = $(this).data('href');                                    
                        $.ajax({url: lang_url, success: function(result){
                            location.reload();
                        }});
                    });
                    $('.top-bar-right').load('<?php echo base_url(); ?>home/top_bar_right');
                });
            </script>
            <?php
            if ($this->crud_model->get_type_name_by_id('general_settings','58','value') !== 'ok') {
            ?>
            <style>
            .header.header-logo-left .header-search .header-search-select .dropdown-toggle {
                right: 40px !important;
            }
            </style>
            <?php
            }
            ?>
        </div>
            </div>


	


<script>
        

	function load_data(query)
	{
		$.ajax({
			url:"<?php echo base_url(); ?>ajaxsearch/fetch",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#result').html(data);
			}
		})
	}

	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
	});
  
</script>
<script>

function liveSearch() {

                var input_data = $('#search_data').val();
                if (input_data.length === 0) {
                    $('#suggestions').hide();
                } else {


                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>index.php/livesearch/search",
                        data: {search_data: input_data},
                        success: function (data) {
                            // return success
                            if (data.length > 0) {
                                $('#suggestions').show();
                                $('#autoSuggestionsList').addClass('auto_list');
                                $('#autoSuggestionsList').html(data);
                                console.log(data);
                            }
                        }
                    });
                }
            }
            function liveSearch_v() {

                var input_data = $('#search_data').val();
                if (input_data.length === 0) {
                    $('#suggestions').hide();
                } else {


                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>index.php/livesearch/search1",
                        data: {search_data: input_data},
                        success: function (data) {
                            // return success
                            if (data.length > 0) {
                                $('#suggestions').show();
                                $('#autoSuggestionsList').addClass('auto_list');
                                $('#autoSuggestionsList').html(data);
                                console.log(data);
                            }
                        }
                    });
                }
            }
</script>
<script>
    function fetchvalue(x){
        var option = x.value;
        if(option == "vendor"){
            document.querySelector("#search_data").setAttribute("onkeyup", "liveSearch_v()");
        }
        else{
            document.querySelector("#search_data").setAttribute("onkeyup", "liveSearch()");
        }
    }  
</script>
