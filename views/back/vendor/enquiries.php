  <div id="content-container">
	<div id="page-title">
		<h1 class="page-header text-overflow" >Enquiries</h1>
	</div>
	<div class="tab-base">
		<div class="panel">
			<div class="panel-body">
                <!-- LIST -->
                   <div class="table-responsive">
                    <div class="col-md-12 pull-right">
                            <button type="button" class="pull-right btn btn-lg btn-info btn-xs btn-labeled fa fa-question-circle"  data-toggle="modal" data-target="#questionModal" style="margin-bottom:15px;font-size:20px">
                                    Ask question
                            </button>
                    </div>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                <tr>
                                    <th><?php echo translate('no');?></th>
                                    <th><?php echo translate('Customer Email');?></th>
                                    <th><?php echo translate('Question');?></th>
                                    <th><?php echo translate('Anwser');?></th>
                                    <th><?php echo translate('date');?></th>
                                    <th class="text-right"><?php echo translate('options');?></th>
                                </tr>
                            </thead>
                            <tbody >
                            <?php
                                $i = 0;
                                foreach($contact_messages as $row){
                                    $i++;
                                    
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row->vendorEmail; ?></td>
                                <td><?php echo $row->question; ?></td>
                                <td><?php if($row->answer){
                                            echo $row->answer;
                                            }else{ ?>
                                             <p class="text-muted">This Question has not been answered Yet!</p>   
                                        <?php    }
                                ?></td>
                                <td><?php echo $row->timestamp; ?></td>
                                <td class="text-right">
                                    <!--<a class="btn btn-info btn-xs btn-labeled fa fa-location-arrow" data-toggle="tooltip" -->
                                    <!--    onclick="ajax_set_full('view','<?php echo translate('view_contact_message'); ?>','<?php echo translate('successfully_viewed!'); ?>','contact_message_view','<?php echo $row->id; ?>');"-->
                                    <!--        data-original-title="Edit" data-container="body">-->
                                    <!--            <?php echo translate('view_message');?>-->
                                    <!--</a>-->
                                    <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success btn-xs btn-labeled fa fa-eye" value="<?php echo $row->id; ?>" data-toggle="modal" data-target="#exampleModal-<?php echo $row->id;?>">
                                          View Message
                                        </button>
                                    <!--<a onclick="delete_confirm('<?php echo $row->id; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip" -->
                                    <!--    data-original-title="Delete" data-container="body">-->
                                    <!--        <?php echo translate('delete');?>-->
                                    </a>
                                </td>
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
                    
            ?>   
   <div class="modal fade" id="exampleModal-<?php echo $row->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Answer of Enquiry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form >
              <div class="modal-body">
                        
                        <input name="id" type="hidden" value="<?php echo $row->id; ?> ">
                        <div class="form-group">
                          <b><label for="comment">Question:</label>  </b>
                            <input name="question" class="form-control" type="text" readonly value="<?php echo $row->question; ?> ">
                        </div>
                        <div class="form-group">
                          <b><label for="comment">Answer:</label></b>
                          <textarea class="form-control" rows="5" readonly name="answer" value="" id="comment"><?php if($row->answer){
                                            echo $row->answer;
                                            }else{ ?>
                                            This Question has not been answered Yet!  
                                        <?php    }
                                ?></textarea>
                        </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
            </form>
      </div>
      
    </div>
  </div>
</div>     
<?php
    }
?>

<!--This modal is use for post question-->

   <div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="questionModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="questionModal">Post an enquiry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="POST" action="<?php echo base_url('vendor/question')?>">
              <div class="modal-body">
                        
                        <input name="id" type="hidden" value="<?php echo $this->session->userdata['vendor_id']; ?> ">
                        
                        <div class="form-group">
                          <b><label for="comment">Question:</label></b>
                          <textarea class="form-control" rows="5" name="query" value="" id="comment"></textarea>
                        </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button  type="submit"  class="btn btn-success">Send Enquiry</button>
              </div>
            </form>
      </div>
      
    </div>
  </div>
</div>     
<script>
    
</script>