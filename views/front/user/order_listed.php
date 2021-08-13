<?php 
	$i = 0;
	foreach ($orders as $row1) {
		$i++;
?>
	<tr>
		<td class="image">
			<?php echo $i; ?>
		</td>
		<td class="quantity">
			<?php echo date('d M Y',$row1['sale_datetime']); ?>
		</td>
		<td class="description">
			<?php echo currency($row1['grand_total']); ?>
		</td>
		<td class="order-id">
			<?php 
				$payment_status = json_decode($row1['payment_status'],true); 
				foreach ($payment_status as $dev) {
			?>

			<span class="label label-<?php if($dev['status'] == 'paid'){ ?>success<?php } else { ?>danger<?php } ?>" style="margin:2px;">
			<?php
					if(isset($dev['vendor'])){
						echo $this->crud_model->get_type_name_by_id('vendor', $dev['vendor'], 'display_name').' ('.translate('vendor').') : '.$dev['status'];
					} else if(isset($dev['admin'])) {
						echo translate('admin').' : '.$dev['status'];
					}
			?>
			</span>
			<br>
			<?php
				}
			?>
		</td>
		<td class="order-id">
			<?php 
				$delivery_status = json_decode($row1['delivery_status'],true); 
				foreach ($delivery_status as $dev) {
			?>

			<span class="label label-<?php if($dev['status'] == 'delivered'){ ?>success<?php } else { ?>danger<?php } ?>" style="margin:2px;">
			<?php
					if(isset($dev['vendor'])){
						echo $this->crud_model->get_type_name_by_id('vendor', $dev['vendor'], 'display_name').' ('.translate('vendor').') : '.$dev['status'];
					} else if(isset($dev['admin'])) {
						echo translate('admin').' : '.$dev['status'];
					}
			?>
			</span>
			<br>
			<?php
				}
			?>
		</td>
		<td class="add">
			<a class="btn btn-theme btn-theme-xs" href="<?php echo base_url(); ?>home/invoice/<?php echo $row1['sale_id']; ?>"><?php echo translate('invoice');?></a>
		</td>
		<td><a class="btn btn-theme btn-theme-xs" data-toggle="modal" data-target="#exampleModal_<?php echo $row1['sale_id']; ?>" >Review</a>
		<!-- Button trigger modal -->
<!--<button type="button" value="href="<?php echo base_url(); ?>home/review/<?php echo $row1['sale_id']; ?>""  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">-->
<!--  Launch demo modal-->
<!--</button>-->

<!-- Modal -->
<div class="modal fade" id="exampleModal_<?php echo $row1['sale_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Post a review</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="invoice_logo hidden-xs text-center mt-3">
                        	<?php
								$home_top_logo = $this->db->get_where('ui_settings',array('type' => 'home_top_logo'))->row()->value;
							?>
							<img src="<?php echo base_url(); ?>uploads/logo_image/logo_<?php echo $home_top_logo; ?>.png" alt="SuperShop" style="max-width: 350px; max-height: 80px;"/>
                        </div>
        <form action="<?php echo base_url().'/home/review_post' ?>" method="post">
            <div class="modal-body">
                
               	<?php 
				$payment_status = json_decode($row1['payment_status'],true); 
				foreach ($payment_status as $dev) {
			?>

			<?php
					if(isset($dev['vendor'])){
						$vendor_id= $this->crud_model->get_type_name_by_id('vendor', $dev['vendor'], 'vendor_id');
					} else if(isset($dev['admin'])) {
						
					}
			?>
			</span>
			<br>
		
			    	<?php
				}
			?>
                <h4 class="text-center">Leave a Review</h4>
                    <textarea id="w3review" required class="form-control" name="review" rows="4" cols="50"></textarea> 
                    <input type="hidden"  name="vendor_id" value="<?php echo $vendor_id;?> ">
                    <input type="hidden"  name="user_id" value="<?php echo $this->session->userdata('user_id')?>">
                    <input type="hidden" id="rating" name="rating" value="">
    			    <h4 class="text-center">How would you rate your experience on Optazoom?</h4>
    			    
    		
                                
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
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Post</button>
              </div>
        </form>
        
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
		</td>
	</tr>                                            
<?php 
	}
?>


<tr class="text-center" style="display:none;" >
	<td id="pagenation_set_links" ><?php echo $this->ajax_pagination->create_links(); ?></td>
</tr>
<!--/end pagination-->


<script>
	$(document).ready(function(){ 
		$('.pagination_box').html($('#pagenation_set_links').html());
	});
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



