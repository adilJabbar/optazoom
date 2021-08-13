  <div id="content-container">
	<div id="page-title" id="demo_s">
		<h1 class="page-header text-overflow" >Manage Enquiries</h1>
	</div>
	<div class="tab-base">
		<div class="panel">
			<div class="panel-body">
                <!-- LIST -->
                    <h3 class="text-center">Customer Questions</h3>
                   <div class="table-responsive">
                                <table id="datatables" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true">
                                    <thead>
                                <tr>
                                    <th><?php echo translate('no');?></th>
                                    <th><?php echo translate('Customer Email');?></th>
                                    <th><?php echo translate('Product Name');?></th>
                                    <th><?php echo translate('Question');?></th>
                                    <th><?php echo translate('Anwser');?></th>
                                    <th><?php echo translate('date');?></th>
                                    <th class="text-right"><?php echo translate('options');?></th>
                                </tr>
                            </thead>
                            <tbody >
                            <?php
                                $i = 0;
                                foreach($customer_query as $row){
                                    $i++;
                                    
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row->customerEmail; ?></td>
                                <td><?php echo $row->productName; ?></td>
                                <td><?php echo $row->question; ?></td>
                                <td><?php echo $row->answer; ?></td>
                                <td><?php echo $row->timestamp; ?></td>
                                <td class="text-right">
                                    <!--<a class="btn btn-info btn-xs btn-labeled fa fa-location-arrow" data-toggle="tooltip" -->
                                    <!--    onclick="ajax_set_full('view','<?php echo translate('view_contact_message'); ?>','<?php echo translate('successfully_viewed!'); ?>','contact_message_view','<?php echo $row->id; ?>');"-->
                                    <!--        data-original-title="Edit" data-container="body">-->
                                    <!--            <?php echo translate('view_message');?>-->
                                    <!--</a>-->
                                    <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success btn-xs btn-labeled fa fa-reply" value="<?php echo $row->id; ?>" data-toggle="modal" data-target="#exampleModal-<?php echo $row->id;?>">
                                          Replay
                                        </button>
                                    <!--<a onclick="delete_confirm('<?php echo $row->id; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip" -->
                                    <!--    data-original-title="Delete" data-container="body">-->
                                    <!--        <?php echo translate('delete');?>-->
                                    <!--</a>-->
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                            </tbody>
                        </table>
                        </div>
                    <h3 class="text-center">Vendor Questions</h3>                   
                   <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                <tr>
                                    <th><?php echo translate('no');?></th>
                                    <th><?php echo translate('Vendor Email');?></th>
                                    <th><?php echo translate('Vendor Company');?></th>
                                    <th><?php echo translate('Question');?></th>
                                    <th><?php echo translate('Anwser');?></th>
                                    <th><?php echo translate('date');?></th>
                                    <th class="text-right"><?php echo translate('options');?></th>
                                </tr>
                            </thead>
                            <tbody >
                            <?php
                                $i = 0;
                                foreach($vendor_query as $row){
                                    $i++;
                                    
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row->vendorEmail; ?></td>
                                <td><?php echo $row->vendorCompany; ?></td>
                                <td><?php echo $row->question; ?></td>
                                <td><?php echo $row->answer; ?></td>
                                <td><?php echo $row->timestamp; ?></td>
                                <td class="text-right">
                                    <!--<a class="btn btn-info btn-xs btn-labeled fa fa-location-arrow" data-toggle="tooltip" -->
                                    <!--    onclick="ajax_set_full('view','<?php echo translate('view_contact_message'); ?>','<?php echo translate('successfully_viewed!'); ?>','contact_message_view','<?php echo $row->id; ?>');"-->
                                    <!--        data-original-title="Edit" data-container="body">-->
                                    <!--            <?php echo translate('view_message');?>-->
                                    <!--</a>-->
                                    <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success btn-xs btn-labeled fa fa-reply" value="<?php echo $row->id; ?>" data-toggle="modal" data-target="#exampleModal-<?php echo $row->id;?>">
                                          Replay
                                        </button>
                                    <!--<a onclick="delete_confirm('<?php echo $row->id; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" class="btn btn-danger btn-xs btn-labeled fa fa-trash" data-toggle="tooltip" -->
                                    <!--    data-original-title="Delete" data-container="body">-->
                                    <!--        <?php echo translate('delete');?>-->
                                    <!--</a>-->
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

<!--This modal is use for Customer quiries-->
                   
            <?php
                $i = 0;
                foreach($customer_query as $row){
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
         <form method="POST" action="<?php echo base_url('admin/answer')?>">
              <div class="modal-body">
                        
                        <input name="id" type="hidden" value="<?php echo $row->id; ?> ">
                        <div class="form-group">
                          <b><h4 for="comment">Question:</h4>  </b>
                          <br>
                          <blockquote>
                              <q><?php echo $row->question; ?></q>
                          </blockquote>
                        </div>
                        <div class="form-group">
                          <b><h4 for="comment">Answer:</h4></b>
                          <textarea class="form-control" rows="5" name="answer" value="" id="comment"><?php echo $row->answer;?></textarea>
                        </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
                <button  type="submit"  class="btn btn-success">Submit</button>
              </div>
            </form>
      </div>
      
<!--This modal is use for Customer quiries-->
    </div>
  </div>
</div>     
<?php
    }
?>





<?php
                $i = 0;
                foreach($vendor_query as $row){
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
         <form method="POST" action="<?php echo base_url('admin/answer')?>">
              <div class="modal-body">
                        
                        <input name="id" type="hidden" value="<?php echo $row->id; ?> ">
                        <div class="form-group">
                          <b><h4 for="comment">Question:</h4>  </b>
                            <blockquote>
                              <q><?php echo $row->question; ?></q>
                          </blockquote>
                        </div>
                        <div class="form-group">
                          <b><h4 for="comment">Answer:</h4></b>
                          <textarea class="form-control" rows="5" name="answer" value="" id="comment"><?php echo $row->answer;?></textarea>
                        </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button  type="submit"  class="btn btn-success">Submit</button>
              </div>
            </form>
      </div>
      
    </div>
  </div>
</div>     
<?php
    }
?>

<script>
    
</script>

 <!-- Datatables -->
    <!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>-->
    <!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>-->
    <!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>-->
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>-->
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>-->
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>-->
    <!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>-->
    <!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>-->
    
    
    <!--<script type="text/javascript">-->
    <!--$(document).ready(function() {-->
    <!--    $('#datatables').DataTable({-->
    <!--        "pagingType": "full_numbers",-->
    <!--        "lengthMenu": [-->
    <!--            [10, 25, 50, -1],-->
    <!--            [10, 25, 50, "All"]-->
    <!--        ],-->
    <!--         dom: 'Bfrtip',-->
    <!--        buttons: [-->
    <!--            'copy', 'csv', 'excel', 'pdf', 'print'-->
    <!--        ],-->
            
    <!--    });-->
    <!--});-->
    <!--    </script><div>-->