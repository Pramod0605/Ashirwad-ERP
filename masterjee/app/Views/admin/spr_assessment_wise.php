<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

        <div class="row pt-4 mg-top-90">
        </div>
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/spr_assessment_wise'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        
        
        
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
        <?php  if (!empty($sid)) { 
        
        $assess          = array();
        $assessments = $StaffModel->all_cbse_assessment_info_by_sid($ss_info->ssid); 
        foreach ($assessments as $assessment) {
        $assess[]        = "'".$assessment->aname."'";;
        $allAssess       = implode(",", $assess) ; 
        
        }
         
        ?>
         
         
<div class="row pt-4">
<div class="card" style="background: unset !important; border:unset !important;">
    
    <?php
        //print_r($allScorGrp);
    ?> 
                
<canvas id="myChartComb" style="width:100%;"></canvas>

<script>
var ctx = document.getElementById("myChartComb").getContext("2d");

var data = {
  labels: ['Assessment'],
  datasets: [
    <?php
    foreach ($assessments as $assessment) { 
    $r      = rand(0,255); $g = rand(0,255); $b = rand(0,255); $opacity = 0.8;
    $colors = "'rgba(".$r.",".$g.",".$b.",".$opacity.")'"; 
    $percent = $assessment->marks/$assessment->maximum_marks*100;
    
    ?>
    {
        label: '<?= $assessment->aname ?>',
        backgroundColor: <?= $colors ?>,
        data: [<?= $percent ?>]
    },
    <?php } ?>
  ]
};

var myBarChart = new Chart(ctx, {
  type: 'pie',
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


<div class="row pt-4">
<div class="card" style="background: unset !important; border:unset !important;">
    
    <?php
        //print_r($allScorGrp);
    ?> 
                
<canvas id="myChartComb1" style="width:100%;"></canvas>

<script>
var ctx = document.getElementById("myChartComb1").getContext("2d");

var data = {
  labels: [<?= $allAssess ?>],
  datasets: [
    {
        label: 'Assessment',
        backgroundColor: 'rgb(75, 192, 192)',
        data: [
    <?php
    $percents = array();
    foreach ($assessments as $assessment) { 
    $percent = $assessment->marks/$assessment->maximum_marks*100;
    $percents[]         = $percent;
    $allPerc            = implode(",", $percents) ;
    
    }
    
    ?>
            <?= $allPerc; ?>]
    },
  ]
};

var myBarChart = new Chart(ctx, {
  type: 'line',
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
        window.location.href = "<?= base_url() ?>admin/staff/spr_assessment_wise/"+id ;
    }
</script>
<script>
    //new DataTable('table.display');
</script>
<script>
   $('table').dataTable({searching: false, paging: false, info: false, ordering: false,});
</script>