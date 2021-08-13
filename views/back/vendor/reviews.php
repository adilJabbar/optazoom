  <div id="content-container">
	<div id="page-title">
		<h1 class="page-header text-overflow" >Customer Reviews</h1>
	</div>
	<div class="tab-base">
		<div class="panel">
			<div class="panel-body">
                <!-- LIST -->
                   <div class="table-responsive">
                    <div class="col-md-12 pull-right">
                            <!--<button type="button" class="pull-right btn btn-lg btn-info btn-xs btn-labeled fa fa-question-circle"  data-toggle="modal" data-target="#questionModal" style="margin-bottom:15px;font-size:20px">-->
                            <!--        Ask question-->
                            <!--</button>-->
                    </div>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                <tr>
                                    <th class="text-center"><?php echo translate('no');?></th>
                                    <th class="text-center"><?php echo translate('Customer Name');?></th>
                                    <th class="text-center"><?php echo translate('Review');?></th>
                                    <th class="text-center"><?php echo translate('Rating');?></th>
                                    <th class="text-center"><?php echo translate('date');?></th>
                                    </tr>
                            </thead>
                            <tbody >
                            <?php
                                $i = 0;
                                foreach($contact_messages as $row){
                                    $i++;
                                    
                            ?>
                            <tr>
                                <td class="text-center" ><?php echo $i; ?></td>
                                <td class="text-center" ><?php echo $row->vendorEmail; ?></td>
                                <td class="text-center" ><?php echo $row->review; ?></td>
                                <td class="text-center" >
                                    <section class='rating-widget'>
                                      <!-- Rating Stars Box -->
                                      <div class='rating-stars text-center'>
                                        <ul id='stars' style="display:flex">
                                          <?php 
                                          if($row->rating==0){
                                              echo "<p class='text-muted'>Not Rated! </p>";
                                          }else{
                                                for($i = 1; $i <= $row->rating; $i++){ ?>
                                            <li class='star' style="list-style:none">
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <?php }?>
                                            <?php } ?>
                                        </ul>
                                      </div>
                                     </section>
                                </td>
                                <td class="text-center" ><?php echo date('d-m-Y',strtotime($row->timestamp)); ?></td>
                             
                            </tr>
                            <?php
                                }
                            ?>
                            </tbody>
                        </table>
                        </div>
                        
			</div>
        </div>
	</div>
</div>
          
          
 <!--This modal is use for show answers-->
            <?php
                $i = 0;
                foreach($contact_messages as $row){
                    $i++;
                }
            ?>   
  


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



