<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
        <div class="row pt-4 mg-top-90">
        </div> 
        
        
        <table id="example" class="display stripe compact " style="width:100%; text-align:left !important">
            <thead>
                <tr>
                    <th style="width:20%">Vehicle</th>
                    <th style="width:60%">Issue</th>
                    <th style="width:20%">Action</th>
                </tr>
            </thead>
            <tbody id="action">
                <?php foreach($all_ticekts_info as $tkt) { ?>
                <tr>
                    <td><?= $tkt->vehicle_no; ?></td>
                    <td><?= $tkt->ticket_type; ?></td>
                    <td><a href="javascript:void(0);"  data-ticket_id="<?= $tkt->vt_id  ?>" class="btn btn-primary tinfo">View</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
               

      <div class="alert alert-primary alert-dismissible fade" role="alert" id="success_alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <span id="success_message"></span>
      </div>

      <div class="alert alert-danger alert-dismissible fade" role="alert" id="error_alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <span id="error_message"></span>
      </div>

<!--MODAL UPDATE-->
         <form role="form" action="ticket_action"  id="ticket_action" method="post" enctype="multipart/form-data">
            <div class="modal fade" id="Modal_Tkt_Action" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top:25% !important">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <br />
                    <div class="col-12 px-4 py-4" id="show_data_value"></div>
                    <div class="col-12 px-4 py-4">
                        <textarea class="form-control" name="ticket_update"></textarea>
                        <br>
                        <div class="custom-control custom-radio">
                            <input type="radio" name="ticket_action" id="ticket_action_approve" class="custom-control-input custom-control-input-info custom-control-input-outline" value="Open">
                            <label for="ticket_action_approve" class="custom-control-label">Open Again</label>
                        </div>
                        <div class="custom-control custom-radio"> 
                            <input type="radio" name="ticket_action" id="ticket_action_approve" class="custom-control-input custom-control-input-info custom-control-input-outline" value="Close">
                            <label for="ticket_action_approve" class="custom-control-label">Close</label>
                        </div>
                    </div> 
                    <div class="col-12" style="margin-bottom:10px; padding: 10px;">
                        <div class="custom-control custom-radio">
                            <button type="button" type="submit" name="btn_approve" id="btn_approve" class="btn btn-primary w-100 action">Submit</button>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            </form>
<!--END MODAL UPDATE-->

<script type="text/javascript">
        $('#action').on('click','.tinfo',function(){
        var ticket_id = $(this).data('ticket_id');
        
        show_ticket(); //call function show all product
        function show_ticket(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url(); ?>admin/staff/ticket_info/' + ticket_id,
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                        html += '<span class="text-align:justify">'+data.tInfo.ticket_description+'</span><br>'+
                                '<span class="text-align:justify">'+data.tInfo.ticket_updates+'</span>'+
                                '<input type="hidden" class="form-control" value="'+ticket_id+'" id="ticket_id" name="ticket_id">';
                        $('#show_data_value').html(html);
                        $('#Modal_Tkt_Action').modal('show');  
                }
 
            });
        }
        });
</script>

<script type="text/javascript">
 $(document).ready(function(){
$("#btn_approve").click(function(){
            event.preventDefault();
            var formval = $('#ticket_action')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/staff/update_ticket",
            dataType: 'json',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(response) {
            if (response.status == 'success') {
                $('#success_message').html(response.message);
                $('#success_alert').addClass('show');
                window.setTimeout(function() {location.reload();}, 2000);
            } else {
                $('#error_message').html(response.message);
                $('#error_alert').addClass('show');
                window.setTimeout(function() {location.reload();}, 2000);
            }
        }
        });
      });
    });
</script>
<script>
   $('table').dataTable({searching: true, paging: false, info: false, ordering: false,});
</script>  