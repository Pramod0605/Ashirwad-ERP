<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <div class="balance-area mg-top-90"></div>
        <div class="container rounded">
            <a href="javascript:void(0)" class="change_cs" data-toggle="modal" data-target="#change_cs">
            <img src="<?= base_url(); ?>public/style/img/dash-top.jpg" alt="img" class="rounded">
            </a>
        </div>
    </div>
        
        
        <div class="row pt-4">
            <div class="col-3 text-center">
                <a href="<?= base_url() ?>admin/staff/spr_term_wise" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/calendar.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Overall</p>
                </a>
            </div>
            
            
            <div class="col-3 text-center">
                <a href="<?= base_url() ?>admin/staff/spr_assessment_wise" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/assessment.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Assessment wise</p>
                </a>
            </div>
            
            
            
            <div class="col-3 text-center">
                <a href="<?= base_url() ?>admin/staff/spr_subject_wise" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/homework.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Subject wise</p>
                </a>
            </div>
            
            <div class="col-3 text-center">
                <a href="<?= base_url() ?>admin/staff/spr_marksheet" class="text-dark" style="text-decoration: none;">
                <p class="text-center"><img src="<?= base_url(); ?>public/style/img/icon/attendance-2.png" style="width:50px; height:50px;"></p>
                <p class="text-center">Marksheet</p>
                </a>
            </div>
        </div>


    
<form role="form" action="cs_action"  id="cs_action" method="post" enctype="multipart/form-data">    
<div class="modal fade" id="change_cs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align:center">Choose Class & Section</h5>
      </div>
      <div class="modal-body">
            <select class="form-control" name="class_id" id="class_id" required>
                <option value="">Select....</option>
                <?php foreach ($allClsInfo as $cls) { ?>
                <option value="<?= $cls->id ?>"><?= $cls->class?></option>
                <?php } ?>
            </select>
            <hr>
            <select name="section_id" id="section_id" class="form-control" style="width: 100%" required >
            </select>  
      </div>
      <div class="modal-footer">
        <button type="button" type="submit" name="btn_cs_action" id="btn_cs_action" class="btn btn-primary w-100 action">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
<script type="text/javascript">
      $(document).ready(function(){
      $("#class_id").change(function(){
      var class_id = document.getElementById('class_id').value;
        show_product();
        function show_product(){
            $.ajax({
                type  : 'POST',
                url   : '<?php echo base_url(); ?>admin/dashboard/getClassSection/' + class_id,
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].section_id+'">'+data[i].section+'</option>';
                    }
                    $('#section_id').html(html);
                }
 
            });
        }
     });
    });
</script>
<script type="text/javascript">
 $(document).ready(function(){
$("#btn_cs_action").click(function(){
            event.preventDefault();
            var formval = $('#cs_action')[0];
            var data = new FormData(formval);
            $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>admin/dashboard/updateClassSection",
            dataType: 'json',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(response) {
            window.setTimeout(function() {location.reload();}, 100);
            }
        });
      });
    });
</script>