

    <div class="balance-area mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/add_assessment" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Assessment</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/exam" class="btn btn-sm w-100 exam" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><br>Exam</a>
            </div>
    </div>
        
        <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
            <table class="table">
                <tbody>
                    <?php 
                    $i = 0;
                    foreach ($cbseAsses as $assess) { 
                    $i += 1;
                    $types  = $StaffModel->all_cbse_exam_assessments_type($assess->id);
                    ?>
                    <tr style="border-bottom:hidden;">
                        <td colspan="4" style="width:100%; text-align:lett"><span class="badge" style="background-color: #6c757d;"><?= $assess->name; ?></span></td>
                    </tr>
                    <tr style="border-top:hidden;">
                        <td colspan="4" style="width:100%"><?= $assess->description; ?></td>
                    </tr>
                    <?php foreach ($types as $type) { ?>
                    <tr style="">
                        <td><?= $type->name; ?></td>
                        <td><?= $type->code; ?></td>
                        <td><?= $type->maximum_marks; ?></td>
                        <td><?= $type->pass_percentage; ?></td>
                    </tr>
                    <?php } ?>
                    <tr style="border-top:hidden">
                        <td colspan="4" style="width:50%; text-align:center"><a href="<?= base_url(); ?>admin/web/add_assessment/<?= $assess->id; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            
        </div>