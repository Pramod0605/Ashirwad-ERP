

    <div class="balance-area mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-3 text-center">
                <a href="javascript:void(0);" class="btn btn-sm w-100 exam" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Exam</a>
            </div>
            <div class="col-3 text-center">
                <a href="javascript:void(0);" class="btn btn-sm w-100 terms" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Terms</a>
            </div>
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/web/assessment" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Assessment</a>
            </div>
            <div class="col-3 text-center">
                <a href="<?= base_url(); ?>admin/web/grades" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Grades</a>
            </div>
    </div>
    <div class="row py-2" style="margin:0.1rem">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/ex_observation" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Observation</a>
            </div>
            
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/ex_schedule" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Schedule</a>
            </div>
    </div>
        
<div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
                        <div class="col-md-12">             
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Schedule</h3>  
                                   
                    </div>
                    <div class="box-body">                        
                     
                    <?php
                    $i=0;
                                if (!empty($exams)) {

                                    
                                    foreach ($exams as $exam_key => $exam_value) {
                                        ?>
                                        
                                    <a class="btn btn-default btn-xs pull-right mt8 mr-1" id="print" onclick="printDiv('print_<?php echo $i;?>')"><i class="fa fa-print"></i></a>
                                    
                                <div id="print_<?php echo $i;?>">
                                    
                                    
                                        <h4 class="pagetitleh2 border-b-none">
                                            <?php echo $exam_value->name; ?>
                                        </h4>
                                        <?php

                                        if (!empty($exam_value->time_table)) {
                                            ?>
                                           
                                        <div class="table-responsive">    
                                            <table class="table table-hover table-bordered table-stripped table-b">
                                                <thead>
                                                    <tr>
                                                        <th>Subject</th>
                                                        <th class="text text-center">Date</th>
                                                        <th class="text text-center">Start Time</th>
                                                        <th class="text text-center">Duration</th>
                                                        <th class="text text-center">Room No.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($exam_value->time_table as $time_table_key => $time_table_value) {

                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?php 
                                                            $time_table_subject_code = ($time_table_value->subject_code != "") ? " (" . $time_table_value->subject_code . ")" : "";
                                                            
                                                            echo $time_table_value->subject_name . $time_table_subject_code ?>
                                                            </td>
                                                            <td class="text text-center">
                                                                <?php echo $time_table_value->date; ?>
                                                            </td>
                                                            <td class="text text-center">
                                                                <?php echo $time_table_value->time_from; ?>
                                                            </td>
                                                            <td class="text text-center">
                                                                <?php echo $time_table_value->duration; ?>
                                                            </td>
                                                            <td class="text text-center">
                                                                <?php echo $time_table_value->room_no; ?>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>    
                                            <?php


                                        }
?></div><?php
$i++;
                                    }

                                }else{
                                    ?>
                                    <div class="alert alert-danger">
                                        No Records
                                    </div>
                                    <?php
                                }

                                ?>

                    </div>
                </div>
            </div> 
</div>