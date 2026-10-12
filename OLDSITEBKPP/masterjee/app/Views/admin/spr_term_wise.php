<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

        <div class="row pt-4 mg-top-90">
        </div>
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/spr_term_wise'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <select class="form-control" name="batch_id" onchange="reportFilterFunction(this.value)">
                        <option value="">Students</option>
                        <?php foreach ($all_student_info as $student) { ?>
                            <option value="<?= $student->student_id; ?>" <?php if (!empty($sid) && $sid == $student->student_id) { echo 'selected'; } ?>><?= $student->admission_no.' - '.$student->firstname.' '.$student->lastname; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                </div>
            </div>
        </div>
        </form>
        
        <hr>
        <?php 
        if (!empty($sid)) { ?>
        <div class="row pt-4">
        <?php
        
        $date           = date("Y-m-d");
        $db             = db_connect();
        $terms          = array();
        
        
        $si             = 0;
        foreach ($all_cbse_terms_info as $term) {
        $si ++;
        $terms[]        = "'".$term->name."'";;
        $allTerms       = implode(",", $terms) ;
           
           $student_exams = $StaffModel->all_cbse_term_students_exams_info($term->id, $ss_info->ssid);
           $student_observ = $StaffModel->all_cbse_term_observation_info($term->id);
        ?>
        
        
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan" style="text-align: center;">
                    <label class="form-check-label"><?= $term->name; ?></label>
                    <hr>
                    <?php 
                    $exams      = array();
                    $scoreGrp   = [];
                    
                   
                    foreach ($student_exams as $sexams) {
                    
                    $exams[]        = $sexams->name;
                    $allExams       = implode(",", $exams) ;
                    
                    $exam_subjects = $StaffModel->all_cbse_term_exam_subjects_info($sexams->cbse_exam_id);
                    ?>
                        <label class="form-check-label"><?= $sexams->name; ?></label>
                        
                        <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                            <thead>
                                <tr>
                                    <th style="width:40%"></th>
                                    <th style="width:40%"></th>
                                    <th style="width:20%"></th>
                                </tr>
                            </thead>
                            <?php 
                            $subjects = array();
                            $scores   = array();
                            $colors   = array();
                            $exmMax = 0;
                            $exmObt = 0;
                            foreach ($exam_subjects as $esubjects) {
                            $subjects[]     = "'".$esubjects->code."'";
                            $allSubjects    = implode(",", $subjects) ;
                            
                            $r = rand(0,255); $g = rand(0,255); $b = rand(0,255); $opacity = 0.8;
                            $colors[]       = "'rgba(".$r.",".$g.",".$b.",".$opacity.")'";
                            $allColors      = implode(",", $colors) ;
                    
                            $subject_assessments = $StaffModel->all_cbse_term_exam_subject_assessments_info($esubjects->ttid);
                            ?>
                            <tbody>
                            <tr>
                                <td><?= ucfirst($esubjects->name); ?></td>
                                <td>
                                    <table class="display" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th style="width:100%"></th>
                                            </tr>
                                        </thead>
                                        <?php foreach ($subject_assessments as $sassessments) { ?>
                                        <tr>
                                            <td><?= $sassessments->name ; ?></td>
                                        </tr>
                                        <?php } ?>
                                    </table>
                                </td>
                                <td>
                                    <table class="display cell-border" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th style="width:50%"></th>
                                                <th style="width:50%"></th>
                                            </tr>
                                        </thead>
                                        <?php 
                                        $subScore = 0;
                                        $subMaxim = 0;
                                        foreach ($subject_assessments as $sassessments) { 
                                        
                                            $score = $db->query("SELECT * FROM `cbse_student_subject_marks` WHERE cbse_exam_timetable_assessment_type_id = '".$sassessments->atid."' AND cbse_exam_timetable_id = '".$esubjects->ttid."' AND cbse_exam_student_id = '".$sexams->ceid."' AND cbse_exam_assessment_type_id = '".$sassessments->id."'  ")->getRow();
                                            
                                            if (empty($score->marks)) {
                                                $marks  = 'N/A';
                                                $gMarks = '0';
                                            } else {
                                                $marks  = $score->marks;
                                                $gMarks = $score->marks;
                                            }
                                            
                                            $subScore += $gMarks;
                                            $subMaxim += $sassessments->maximum_marks;
                                        ?>
                                        <tr>
                                            <td><?= $gMarks; ?></td>
                                            <td><?= $sassessments->maximum_marks ; ?></td>
                                        </tr>
                                        <?php } ?>
                                    </table>
                                </td>
                                
                            </tr>
                            </tbody>
                            <?php 
                            $scores[]       = $subScore;
                            $allScores      = implode(",", $scores) ;
                            
                            $exmMax += $subMaxim;
                            $exmObt += $subScore;
                            
                            }
                            $stuExmTotPrc = number_format((float)(($exmObt/$exmMax)*(100)), 2, '.', '');
                            
                            
                            $grades = $db->query("SELECT * FROM `cbse_exam_grades_range` WHERE cbse_exam_grade_id = '".$sexams->cbse_exam_grade_id."' AND maximum_percentage >= '".$stuExmTotPrc."' AND minimum_percentage <= '".$stuExmTotPrc."'  ")->getRow();
                            $ranks = $db->query("SELECT * FROM `cbse_student_exam_ranks` WHERE cbse_exam_id = '".$sexams->cbse_exam_id."' AND student_session_id = '".$ss_info->ssid."' ")->getRow();
                            
                            
                            ?>
                            
                            <thead>
                                <tr>
                                    <th style="width:40%; text-align:center">Total Marks:<hr><?php echo $exmMax . "/" . $exmObt; ?></th>
                                    <th style="width:40%; text-align:center">Percentage:<hr><?php echo $stuExmTotPrc; ?></th>
                                    <th style="width:20%; text-align:center">Grade:<hr><?php echo $grades->name; ?></th>
                                </tr>
                                <tr>
                                    <th colspan="3" style="width:20%; text-align:center">Rank: <?php echo $ranks->rank; ?></th>
                                </tr>
                            </thead>
                             

                        </table>
                        
                        
<canvas id="myChart<?= $si; ?>" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = [<?= $allSubjects ?>];
var yValues = [<?= $allScores ?>];
var barColors = [<?= $allColors?>];

var $chartCanvas = $('myChart<?= $si; ?>');
var barChart = new Chart(myChart<?= $si; ?>, {
    type: 'bar',
    data: {
        labels: xValues,
        datasets:[{
            label: '',
            data: yValues,
            backgroundColor: barColors,
            minBarLength: 1,    // This is the important line!
        }]
    },
    options: {
        title: {
            display: false,
            text: 'Chart'
        },
        legend: {
            display: false
        }
    }
});
</script>                   
                    
                    
                    <?php } ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <hr>
                    
                    <?php foreach ($student_observ as $observ) { 
                        $parameters = $StaffModel->all_cbse_term_observation_parameters_info($observ->cbse_exam_observation_id);
                    ?>
                        <label class="form-check-label"><?= $observ->name; ?></label>
                        
                        <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                            <thead>
                                <tr>
                                    <th style="width:60%"></th>
                                    <th style="width:20%"></th>
                                    <th style="width:20%"></th>
                                </tr>
                            </thead>
                            <?php foreach ($parameters as $parameter) { 
                                $score = $db->query("SELECT * FROM `cbse_observation_term_student_subparameter` WHERE cbse_ovservation_term_id = '".$observ->cotid."' AND cbse_observation_subparameter_id = '".$parameter->cospid."' AND student_session_id = '".$ss_info->ssid."'  ")->getRow();   
                                
                                if (empty($score->obtain_marks)) {
                                    $marks = 'N/A';
                                } else {
                                    $marks = $score->obtain_marks;
                                }
                                
                                if ($marks > $parameter->maximum_marks) {
                                    $marks = $parameter->maximum_marks;
                                }
                                
                            ?>
                            <tbody>
                            <tr>
                                <td><?= ucfirst($parameter->name); ?></td>
                                <td><?= $marks ?></td>
                                <td><?= $parameter->maximum_marks; ?></td>
                                
                            </tr>
                            </tbody>
                            <?php } ?>
                            

                        </table>
                    
                    
                    
                    <?php } ?>
                    
                </div>
            </div>
        
        
        <?php } ?>
         </div>
         
        <?php $ssubjects = $StaffModel->all_cbse_term_students_exam_subjects_info($ss_info->ssid); ?>
          
         
        
         
         
<div class="row pt-4">
<div class="card" style="background: unset !important; border:unset !important;">
    
    <?php
        //print_r($allScorGrp);
    ?> 
                
<canvas id="myChartComb" style="width:100%;"></canvas>

<script>
var ctx = document.getElementById("myChartComb").getContext("2d");

var data = {
  labels: [<?= $allTerms; ?>],
  datasets: [
    <?php
    foreach ($ssubjects as $ssubjec) { 
    $r      = rand(0,255); $g = rand(0,255); $b = rand(0,255); $opacity = 0.8;
    $colors = "'rgba(".$r.",".$g.",".$b.",".$opacity.")'";  
    
    $ssubjectss = $StaffModel->all_cbse_term_students_exam_subjects_infog($ss_info->ssid, $ssubjec->subject_id);
    
    ?>
    {
        label: "<?= $ssubjec->code ?>",
        backgroundColor: <?= $colors ?>,
        data: [
            <?php
            $percents = array();
            foreach ($ssubjectss as $ssubject) {
                $percent = $ssubject->marks/$ssubject->maximum_marks*100;
                $percents[]        = $percent;
                $allPerc       = implode(",", $percents) ;
            }
            ?>
            
            <?= $allPerc; ?>]
    },
    <?php } ?>
  ]
};

var myBarChart = new Chart(ctx, {
  type: 'bar',
   legend: {
      display: false
    },
  data: data,
  options: {
    barValueSpacing: 20,
    scales: {
      yAxes: [{
        ticks: {
          min: 0,
        }
      }]
    },
    legend: {
    display: false
  }
  }
});

</script>       
</div>
</div>

<?php } ?>

<script>
    function reportFilterFunction(val) {
        var id  = val;
        window.location.href = "<?= base_url() ?>admin/staff/spr_term_wise/"+id ;
    }
</script>
<script>
    //new DataTable('table.display');
</script>
<script>
   $('table').dataTable({searching: false, paging: false, info: false, ordering: false,});
</script>