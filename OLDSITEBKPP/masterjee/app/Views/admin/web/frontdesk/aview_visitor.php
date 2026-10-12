<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

<div class="balance-area mg-top-90"></div>

    <br>    
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/approve_visit" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Approve Visitor</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/visitors" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Visitors</a>
            </div>
            
    </div>
  
        <div class="row pt-4">
            <?php
            
            if ($vinfo->meeting_approval == 1) {
                $approval = 'Approved';
            }
            if ($vinfo->meeting_approval == 0) {
                $approval = 'Pending';
            }
            if ($vinfo->meeting_approval == 2) {
                $approval = 'Rejected';
            }
            
            ?>
            <table class="table" class="display cell-border" style="width:100%; text-align:left !important">
                <tbody>
                    <tr>
                        <td colspan="6" style="width:100%"><img src="<?= $vinfo->visitor_image;?>" style="width:250%; height:250px;"></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="width:30%; text-align:left">Visitor name</td>
                        <td colspan="3" style="width:70%; text-align:left"><?= $vinfo->name; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="width:30%; text-align:left">Visitor number</td>
                        <td colspan="3" style="width:70%; text-align:left"><?= $vinfo->contact; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="width:30%; text-align:left">Number of person</td>
                        <td colspan="3" style="width:70%; text-align:left"><?= $vinfo->no_of_people; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="width:30%; text-align:left">ID proof</td>
                        <td colspan="3" style="width:70%; text-align:left"><?= $vinfo->id_proof; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="width:30%; text-align:left">Purpose</td>
                        <td colspan="3" style="width:70%; text-align:left"><?= $vinfo->purpose; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="width:30%; text-align:left">Note</td>
                        <td colspan="3" style="width:70%; text-align:left"><?= $vinfo->note; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="width:30%; text-align:left">Time</td>
                        <td colspan="3" style="width:70%; text-align:left"><?= $vinfo->in_time.' '.$vinfo->out_time; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="width:30%; text-align:left">Approval</td>
                        <td colspan="3" style="width:70%; text-align:left"><?= $approval; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
<script>
   $('table').dataTable({searching: true, paging: true, info: false, ordering: true,});
</script>     