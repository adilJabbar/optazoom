
<section class="page-section invoice">
    <div class="container">
    	<?php
			$sale_details = $this->db->get_where('sale',array('sale_id'=>$sale_id))->result_array();
			foreach($sale_details as $row){
		?>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="invoice_body">
                    <div class="invoice-title">
                        <div class="invoice_logo hidden-xs">
                        	<?php
								$home_top_logo = $this->db->get_where('ui_settings',array('type' => 'home_top_logo'))->row()->value;
							?>
							<img src="<?php echo base_url(); ?>uploads/logo_image/logo_<?php echo $home_top_logo; ?>.png" alt="SuperShop" style="max-width: 350px; max-height: 80px;"/>
                        </div>
                    <form action="<?php echo base_url().'/home/review' ?>" method="post">
                    <h3>Leave a Review</h3>
                    <textarea id="w3review" class="form-control" name="w3review" rows="4" cols="50"></textarea> 
                   
                	

                           <input type="hidden" id="rating" name="rating" value="">
                           <input type="" id="rating" name="rating" value="<?php echo $this->session->userdata('user_id')?>">
			    </div>
                            <h3>How would you rate your experience on Optazoom?</h3>
                            
                    <section class='rating-widget'>
                      <!-- Rating Stars Box -->
                      <div class='rating-stars text-center'>
                        <ul id='stars'>
                          <li class='star' title='Poor' data-value='1'>
                            <i class='fa fa-star fa-fw'></i>
                          </li>
                          <li class='star' title='Fair' data-value='2'>
                            <i class='fa fa-star fa-fw'></i>
                          </li>
                          <li class='star' title='Good' data-value='3'>
                            <i class='fa fa-star fa-fw'></i>
                          </li>
                          <li class='star' title='Excellent' data-value='4'>
                            <i class='fa fa-star fa-fw'></i>
                          </li>
                          <li class='star' title='WOW!!!' data-value='5'>
                            <i class='fa fa-star fa-fw'></i>
                          </li>
                        </ul>
                      </div>
                     
                      
                      <div class='success-box'>
                        <div class='clearfix'></div>
                        <img alt='tick image' width='32' src='data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA0MjYuNjY3IDQyNi42NjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQyNi42NjcgNDI2LjY2NzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxwYXRoIHN0eWxlPSJmaWxsOiM2QUMyNTk7IiBkPSJNMjEzLjMzMywwQzk1LjUxOCwwLDAsOTUuNTE0LDAsMjEzLjMzM3M5NS41MTgsMjEzLjMzMywyMTMuMzMzLDIxMy4zMzMgIGMxMTcuODI4LDAsMjEzLjMzMy05NS41MTQsMjEzLjMzMy0yMTMuMzMzUzMzMS4xNTcsMCwyMTMuMzMzLDB6IE0xNzQuMTk5LDMyMi45MThsLTkzLjkzNS05My45MzFsMzEuMzA5LTMxLjMwOWw2Mi42MjYsNjIuNjIyICBsMTQwLjg5NC0xNDAuODk4bDMxLjMwOSwzMS4zMDlMMTc0LjE5OSwzMjIuOTE4eiIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K'/>
                        <div class='text-message'></div>
                        <div class='clearfix'></div>
                      </div>

                      
                    </section>
                    
                
  
  <script>
      $(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    $("#rating").val(ratingValue);
    var msg = "";
    if (ratingValue > 1) {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
    }
    else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    }
    responseMessage(msg);
    
  });
  
  
});


function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
}
  </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1 btn_print hidden-xs" style="margin-top:10px;">
     <!--       	<span class="btn btn-info pull-right" onClick="print_invoice()">-->
					<!--<?php echo translate('print'); ?>-->
               	</span>
                <?php if($invoice != "guest") {?>
                <a class="btn btn-danger pull-right" href="<?=base_url()?>home/profile/part/order_history" style="margin-right: 5px; height:38px;"><?php echo translate('back_to_profile'); ?></a>
                <?php }?>
                <input class="btn btn-success pull-right mr-2 mt-1" style="margin-right: 5px;" type="submit" value="Submit">

            </div>
            </form>
            
        </div>
        <?php
			}
		?>
    </div>
</section>
<script>
function print_invoice(){
	window.print();
}
</script>
<style type="text/css">
    @media print {
        .top-bar{
            display: none !important;
        }
        header{
            display: none !important;
        }
        footer{
            display: none !important;
        }
        .to-top{
            display: none !important;
        }
        .btn_print{
            display: none !important;
        }
        .invoice{
            padding: 0px;
        }
        .table{
            margin:0px;
        }
        address{
            margin-bottom: 0px;
			border:1px solid #fff !important;
        }
    }
</style>

