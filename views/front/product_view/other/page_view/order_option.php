
<?php
	echo form_open('', array(
		'method' => 'post',
		'class' => 'sky-form',
	));
?>
    <div class="order">
        <div class="buttons">
            <?php
                $all_op = json_decode($row['options'],true);
                $all_c = json_decode($row['color'],true);
                    if($all_c){
            ?>
        
            <?php
				}
			?>
            <?php
                if(!empty($all_op)){
                    foreach($all_op as $i=>$row1){
                        $type = $row1['type'];
                        $name = $row1['name'];
                        $title = $row1['title'];
                        $option = $row1['option'];
            ?>
            <div class="options">
                <h3 class="title"><?php echo $title.' :';?></h3>
                <div class="content">
                <?php
                    if($type == 'radio'){
                ?>
                    <div class="custom_radio">
                    <?php
                        $i=1;
                        foreach ($option as $op) {
                    ?>
                      <input type="radio" class="optional" name="<?php echo $name;?>" value="<?php echo $op;?>" <?php if($this->crud_model->is_added_to_cart($row['product_id'], 'option', $name) == $op){ echo 'checked'; } ?> id="<?php echo 'red_'.$i; ?>">
                      <label class="radio circle" for="<?php echo 'red_'.$i; ?>">
                        <span class="big">
                          <span class="small"></span>
                        </span>
                        <?php echo $op;?>
                      </label>
                    <?php
                        $i++;
                        }
                    ?>
                    </div>
                <?php
                    } else if($type == 'text'){
                ?>
                    <label class="textarea">
                        <textarea class="optional" rows="5" cols="30" name="<?php echo $name;?>"><?php echo $this->crud_model->is_added_to_cart($row['product_id'], 'option', $name); ?></textarea>
                    </label>
                <?php
                    } else if($type == 'single_select'){
                ?>
                    <label class="select">
                        <select name="<?php echo $name; ?>" class="optional selectpicker input-price" data-live-search="true" >
                            <option value=""><?php echo translate('choose_one'); ?></option>
                            <?php
                                foreach ($option as $op) {
                            ?>
                            <option value="<?php echo $op; ?>" <?php if($this->crud_model->is_added_to_cart($row['product_id'], 'option', $name) == $op){ echo 'selected'; } ?> ><?php echo $op; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                        <i></i>
                    </label>
                    <?php
                        } else if($type == 'multi_select') {
                    ?>
                    <div class="checkbox">
                    <?php
                        $j=1;
                        foreach ($option as $op){
                    ?>
                    <label for="<?php echo 'check_'.$j; ?>" onClick="check(this)" >
                        <input type="checkbox" id="<?php echo 'check_'.$j; ?>" class="optional" name="<?php echo $name;?>[]" value="<?php echo $op;?>" <?php if(!is_array($chk = $this->crud_model->is_added_to_cart($row['product_id'], 'option', $name))){ $chk = array(); } if(in_array($op, $chk)){ echo 'checked'; } ?>>
                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                        <?php echo $op;?>
                    </label>
                    <?php
                        $j++;
                        }
                    ?>
                    </div>
                <?php
                    }
                ?>
                </div>
            </div>
            <?php
                    }
                }
            ?>
            
            <div class="item_count">
                <div class="quantity product-quantity">
                    <span class="btn" name='subtract' onclick='decrease_val();'>
                        <i class="fa fa-minus"></i>
                    </span>
                    <input  type="number" class="form-control qty quantity-field cart_quantity" min="1" max="<?php echo $row['current_stock']; ?>" name='qty' value="<?php if($a = $this->crud_model->is_added_to_cart($row['product_id'],'qty')){echo $a;} else {echo '1';} ?>" id='qty'/>
                    <span class="btn" name='add' onclick='increase_val();'>
                        <i class="fa fa-plus">
                    </i></span>
                </div>
                <?php
                    if($row['current_stock'] > 0){
                ?>
                <div class="stock" itemprop="availability" href="http://schema.org/InStock">
                    <?php echo $row['current_stock'].' '.$row['unit'].translate('_available');?>
                </div>
                <?php
                    }else{
                ?>
                <div class="out_of_stock">
                    <?php echo translate('out_of_stock');?>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="buttons" style="display:inline-flex;">
        <span class="btn btn-add-to cart" onclick="to_cart(<?php echo $row['product_id']; ?>,event)">
            <i class="fa fa-shopping-cart"></i>
			<?php if($this->crud_model->is_added_to_cart($row['product_id'])=="yes"){
                echo translate('added_to_cart');
                } else {
                echo translate('add_to_cart');
                }
            ?>
        </span>
        <span class="btn btn-theme-transparent enquiry_modal"  data-toggle="modal" data-target="#enquiry">
          Send Enquiry
        </span>
        
        <?php
            $wish = $this->crud_model->is_wished($row['product_id']);
        ?>
        <span class="btn d-none btn-add-to <?php if($wish == 'yes'){ echo 'wished';} else{ echo 'wishlist';} ?>" onclick="to_wishlist(<?php echo $row['product_id']; ?>,event)">
            <i class="fa fa-heart"></i>
            <span class="hidden-sm hidden-xs">
				<?php if($wish == 'yes'){
                    echo translate('_added_to_wishlist');
                    } else {
                    echo translate('_add_to_wishlist');
                    }
                ?>
            </span>
        </span>
                    
            <button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#exampleModal">
             <i class="fa fa-share-alt-square" aria-hidden="true"></i> Share 
            </button>
            <a href="<?php echo base_url('/chat'); ?>" class="btn btn-info ml-3">
             <i class="fa fa-comment"></i> Chat with Vendor 
            </a>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" style="color:#4ea5ff;" id="exampleModalLabel">Share On</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                <div class="addthis_inline_share_toolbox text-center"></div>
                <h3 class="text-center">or</h3>
                <?php  $_SERVER['REQUEST_URI']; ?>
                
                <div class="d-flex justify-content-between">
                    <input readonly class="form-control" type="text" value="<?php echo base_url().$_SERVER['REQUEST_URI'];?> " id="myInput">
                    <button class="btn btn-primary text-center"  onclick="myFunction()"><i class="fa fa-clone" aria-hidden="true"></i>
                    </button>
                </div>
                 <script>
                function myFunction() {
                  var copyText = document.getElementById("myInput");
                  copyText.select();
                  copyText.setSelectionRange(0, 99999)
                  document.execCommand("copy");
                  alert("Link Copied: " + copyText.value);
                }
                </script>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                  </div>
                </div>
              </div>
            </div>
            
      
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-606d7122f0c9b34c"></script>

        <?php
            $compare = $this->crud_model->is_compared($row['product_id']);
        ?>
        <span class="btn btn-add-to compare btn_compare d-none"  onclick="do_compare(<?php echo $row['product_id']; ?>,event)">
            <i class="fa fa-exchange"></i>
            <span class="hidden-sm hidden-xs">
							<?php if($compare == 'yes'){
                    echo translate('_compared');
                    } else {
                    echo translate('_compare');
                    }
                ?>
            </span>
        </span>
        <?php if($this->crud_model->is_product_affiliation_on($row['product_id']) && $this->session->userdata('user_login') == "yes" && $this->crud_model->get_settings_value('general_settings', 'product_affiliation_set', 'value') == 'ok') { ?>
        <span class="btn btn-add-to btn-warning"
              data-toggle="collapse" data-target="#affiliate_share_collapse" aria-controls="affiliate_share_collapse" role="button" aria-expanded="false">
            <i class="fa fa-share"></i>
            <span class="hidden-sm hidden-xs">
				<?php
                    echo translate('affiliate');
                ?>
            </span>
        </span>
        <?php } ?>
				<?php
					$added_by = json_decode($row['added_by'],true);
					$product_added_by = $added_by['type'] == "admin" ? translate('admin') : translate('seller');
					$send_msg = $added_by['type'] == "admin" ? "ticket" : "message_to_vendor";
					$seller_id = $added_by['id'];
				?>
				<a href="<?php echo base_url(); ?>home/profile/other/<?php echo $send_msg.'/'.$seller_id; ?>" class="btn btn-add-to btn-primary d-none"  role="button" aria-expanded="false">
            <i class="fa fa-paper-plane"></i>
            <span class="hidden-sm hidden-xs">
								<?php echo translate('contact_with')." ".$product_added_by; ?>
            </span>
        </a>
    </div>
    <?php if($this->crud_model->is_product_affiliation_on($row['product_id']) && $this->session->userdata('user_login') == "yes" && $this->crud_model->get_settings_value('general_settings', 'product_affiliation_set', 'value') == 'ok') { ?>
    <div class="collapse pt-5" id="affiliate_share_collapse">
        <div class="panel panel-bordered">
            <div class="panel-body">
                <div class="input-group form-group ">
                    <input readonly type="text" class="form-control" id="affiliation_link_text"
                           placeholder="Click to get shareable link" value="<?= $this->crud_model->get_affiliation_link($row['product_id'], $this->session->userdata('user_id'))?>" aria-label="" aria-describedby="">
                    <div class="input-group-btn">
                        <?php if(empty($this->crud_model->get_affiliation_link($row['product_id'], $this->session->userdata('user_id')))) { ?>
                        <button class="btn btn-primary form_btn" type="button"
                                onclick="affiliate_share(<?php echo $row['product_id']; ?>,event,'affiliation_link_text','<?= translate('getting link') ?>')">
                            <?= translate("Get Link") ?>
                        </button>
                        <?php } ?>
                        <button class="btn btn-outline-secondary form_btn" type="button"
                                onclick="copyText('affiliation_link_text',this,event,'<?= translate('copied') ?>')">
                            <?= translate("copy") ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</form>
<div id="pnopoi"></div>
<div class="buttons">
    <div id="share" class="d-none"></div>
</div>
<hr class="page-divider small"/>
<script>
	$(document).ready(function() {
		$('#share').share({
			networks: ['facebook','googleplus','twitter','linkedin','tumblr','in1','stumbleupon','digg'],
			theme: 'square'
		});
	});
</script>
<script>
$(document).ready(function() {
	check_checkbox();
});
function check_checkbox(){
	$('.checkbox input[type="checkbox"]').each(function(){
        if($(this).prop('checked') == true){
			$(this).closest('label').find('.cr-icon').addClass('add');
		}else{
			$(this).closest('label').find('.cr-icon').addClass('remove');
		}
    });
}
function check(now){
	if($(now).find('input[type="checkbox"]').prop('checked') == true){
		$(now).find('.cr-icon').removeClass('remove');
		$(now).find('.cr-icon').addClass('add');
	}else{
		$(now).find('.cr-icon').removeClass('add');
		$(now).find('.cr-icon').addClass('remove');
	}
}
function decrease_val(){
	var value=$('.quantity-field').val();
	if(value > 1){
		var value=--value;
	}
	$('.quantity-field').val(value);
}
function increase_val(){
	var value=$('.quantity-field').val();
	var max_val =parseInt($('.quantity-field').attr('max'));
	if(value < max_val){
		var value=++value;
	}
	$('.quantity-field').val(value);
}


$('.enquiry_modal').click(function (e) {
    var button = e.relatedTarget;
        var user_id = "<?php echo $this->session->userdata['user_id'] ?>";
        if(!user_id){
            alert("Please Login before post any Query");
                e.stopPropagation();
        }
});
function ifLogin(){
        
}

</script>







<div class="modal fade" id="enquiry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ask anything about this product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <form method="POST" action="<?php echo base_url('home/inquiry')?>">
              <div class="modal-body">
                        
                        <input name="product_id" type="hidden" value="<?php echo $row['product_id']; ?>">
                        <div class="form-group">
                          <label for="comment">Query:</label>
                          <textarea class="form-control" rows="5" name="query" id="comment"></textarea>
                        </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button  type="submit" name="inquiry" class="btn btn-success">Send Enquiry</button>
              </div>
            </form>
    </div>
  </div>
</div>