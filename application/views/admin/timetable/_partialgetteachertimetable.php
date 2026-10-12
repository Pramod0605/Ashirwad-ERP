<?php
if (!empty($timetable)) {
    ?>
     <button type="submit" title="<?php echo $this->lang->line('print'); ?>" class="btn btn-primary btn-xs pull-right print_timetable"  data-staff_id="<?php echo $staff_id;?>" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> <?php echo $this->lang->line('please_wait'); ?>"><i class="fa fa-print"></i></button>

    <table class="table table-stripped">
        <thead>
            <tr>
                <?php
                foreach ($timetable as $tm_key => $tm_value) {
                    ?>

                    <th class="text"><?php echo $tm_key; ?></th>
                    <?php
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                foreach ($timetable as $tm_key => $tm_value) {
                    ?>
                    <td class="text" width="14%">

                        <?php
                        if (!$timetable[$tm_key]) {
                            ?>
                            <div class="attachment-block block-b-noraml clearfix">
                                 <b class="text text-danger"><i class="fa fa-times-circle text-danger"></i><?php echo $this->lang->line('not_scheduled'); ?> </b><br>
                            </div>
                            <?php
                        } else {
                            foreach ($timetable[$tm_key] as $tm_k => $tm_kue) {
                                $mergedTt   = $this->subjecttimetable_model->getByStaffandDayTimeSkip($tm_kue->staff_id, $tm_key, $tm_kue->start_time, $tm_kue->end_time, $tm_kue->id);
                                $sgpInfo    = $this->db->query("SELECT * FROM `subject_groups` WHERE id = '".$tm_kue->subject_group_id."'  ")->row();
                                ?>
                                
                            <div class="attachment-block attachment-block-normal clearfix">
                                
                            <?php if (!empty($mergedTt)) { ?>
                                
                                <div class="relative attachment-left-space"><i class="fa fa-book"></i><?php echo $this->lang->line('class') ?>: <?php echo $tm_kue->class . "(" . $tm_kue->section . ")"; ?>
                                   <?php echo $this->lang->line('subject') ?>:  <?= $sgpInfo->name; ?> : <?php
                                        echo $tm_kue->subject_name;
                                        if ($tm_kue->subject_code != '') {
                                            echo " (" . $tm_kue->subject_code . ")";
                                        }
                                        ?>
                                      </div>  
                                      <?php foreach ($mergedTt as $tm_kue1) { 
                                $sgpInfo1    = $this->db->query("SELECT * FROM `subject_groups` WHERE id = '".$tm_kue1->subject_group_id."'  ")->row();
                                ?>
                                    <div class="relative attachment-left-space"> - <?php echo $this->lang->line('class') ?>: <?php echo $tm_kue1->class . "(" . $tm_kue1->section . ")"; ?>
                                   <?php echo $this->lang->line('subject') ?>: <?= $sgpInfo1->name; ?> : <?php
                                        echo $tm_kue1->subject_name;
                                        if ($tm_kue1->subject_code != '') {
                                            echo " (" . $tm_kue1->subject_code . ")";
                                        }
                                        ?>
                                        
                                      </div> 
                                <?php } ?>
                                
                                    <div class="relative attachment-left-space"><i class="fa fa-clock-o"></i><?php echo $tm_kue->time_from ?>
                                    <b class="text text-center">-</b>
                                    <strong><?php echo $tm_kue->time_to; ?></strong>
                                    </div>
                                    <div class="relative attachment-left-space"><i class="fa fa-building"></i><?php echo $this->lang->line('room_no') ?>: <?php echo $tm_kue->room_no; ?></div><br>
                                
                                    
                                    <?php  } else { ?> 
                                    
                                    <div class="relative attachment-left-space"><i class="fa fa-book"></i><?php echo $this->lang->line('class') ?>: <?php echo $tm_kue->class . "(" . $tm_kue->section . ")"; ?>
                                   <?php echo $this->lang->line('subject') ?>: <?= $sgpInfo->name; ?> : <?php
                                        echo $tm_kue->subject_name;
                                        if ($tm_kue->subject_code != '') {
                                            echo " (" . $tm_kue->subject_code . ")";
                                        }
                                        ?>
                                      </div>  
                                      
                                    <div class="relative attachment-left-space"><i class="fa fa-clock-o"></i><?php echo $tm_kue->time_from ?>
                                    <b class="text text-center">-</b>
                                    <strong><?php echo $tm_kue->time_to; ?></strong>
                                    </div>
                                    <div class="relative attachment-left-space"><i class="fa fa-building"></i><?php echo $this->lang->line('room_no') ?>: <?php echo $tm_kue->room_no; ?></div><br>
                                   
                                    <?php } ?>
                                    <a href="<?= base_url() ?>admin/subjectattendence/index/<?= $tm_kue->class_id.'/'.$tm_kue->section_id.'/'.$tm_kue->id; ?>" class="btn btn-primary">Attendance</a>
                                                       
                                                       
                            </div>
                                
                                
                                
                               
                                <?php
                            }
                        }
                        ?>
                    </td>
                    <?php
                }
                ?>
            </tr>
        </tbody>
    </table>
    <?php
} else {
    ?>
    <div class="alert alert-info">
    <?php echo $this->lang->line('no_record_found'); ?>
    </div>
    <?php
}
?>

<script>
    
    $(document).on('click', '.print_timetable', function (e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var $this = $(this);
        var id = $this.data('staff_id');
        $.ajax(
                {
                    url: "<?php echo site_url('admin/timetable/printteachertimetable') ?>",
                    type: "POST",
                    data: {'staff_id': id},
                    dataType: 'Json',
                    beforeSend: function () {
                $this.button('loading');
            },
                    success: function (data, textStatus, jqXHR)
                    {
                        console.log(data.page);
                         Popup(data.page);
                        $this.button('reset');
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        $this.button('reset');
                    }
                });
    });


    function Popup(data, winload = false)
    {
        var frameDoc=window.open('', 'Print-Window');
        frameDoc.document.open();
        //Create a new HTML document.
        frameDoc.document.write('<html>');
        frameDoc.document.write('<head>');
        frameDoc.document.write('<title></title>');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/bootstrap/css/bootstrap.min.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/font-awesome.min.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/ionicons.min.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/AdminLTE.min.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/dist/css/skins/_all-skins.min.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/iCheck/flat/blue.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/morris/morris.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/datepicker/datepicker3.css">');
        frameDoc.document.write('<link rel="stylesheet" href="' + base_url + 'backend/plugins/daterangepicker/daterangepicker-bs3.css">');
        frameDoc.document.write('</head>');
        frameDoc.document.write('<body onload="window.print()">');
        frameDoc.document.write(data);
        frameDoc.document.write('</body>');
        frameDoc.document.write('</html>');
        frameDoc.document.close();
        setTimeout(function () {
            frameDoc.close();      
            if (winload) {
                window.location.reload(true);
            }
        }, 5000);

        return true;
    }
</script>
