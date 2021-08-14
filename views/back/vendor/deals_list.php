<script src="<?php echo base_url(); ?>template/back/plugins/bootstrap-table/extensions/export/bootstrap-table-export.js"></script>
<div class="panel-body" id="demo_s">
    <table  class="table table-striped" id="responsive_datatable" >
        <thead>
            <tr>
                <th data-field="image" data-align="right" data-sortable="true">
                    
                </th>
                <th data-field="title" data-align="center" data-sortable="true">
                    Sr#
                </th>
                <th data-field="current_stock" data-sortable="true">
                   Deal Type
                </th>
                <th data-field="publish" data-sortable="false">
                    Deals Title
                </th>
                <th data-field="featured" data-sortable="false">
                    Status
                </th>
                <th data-field="options" data-sortable="false" data-align="right">
                    Action  
                </th>
            </tr>
        </thead>
    </table>
</div>

<script type="text/javascript">
     $('#responsive_datatable').DataTable({
        "ajax": {
            url : "<?php echo base_url(); ?>vendor/deals/list_data",
            type : 'GET'
        },
        "processing": true,
        "serverSide": true,
    });
</script>

