<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

<style>
#fixedbutton {
    position: fixed;
    bottom: 20px;
    right: 5%; 
    font-size:25px;
    color: #189c07;
}    
</style>
        <div class="row pt-4 mg-top-90">
        </div> 
        
    <div id="action">

        
        <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
            <thead>
                <tr>
                    <th style="width:25%">Type</th>
                    <th style="width:25%">Alloted</th>
                    <th style="width:25%">Taken</th>
                    <th style="width:25%">Remain</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $db                 = db_connect();
                foreach($staff_leave_info as $sla) { 
                
                    $stlInfo        = $db->query("SELECT SUM(leave_days) as ld FROM staff_leave_request WHERE  staff_id = '".$sla->staff_id."' AND leave_type_id = '".$sla->leave_type_id."' ")->getRow();
                    
                    if (!empty($stlInfo->ld)) {
                        $tknLeave   = $stlInfo->ld;
                    } else {
                        $tknLeave   = 0;
                    }
                    $altLeave       = (int)$sla->alloted_leave;
                
                ?>
                <tr>
                    <td><?= $sla->type; ?></td>
                    <td><?= $altLeave; ?></td>
                    <td><?= $tknLeave; ?></td>
                    <td><?= $altLeave - $tknLeave; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
        
        
    </div>
    
    <!--<a href="javascript:void(0);" id="fixedbutton">-->
    <!--    <span class="fa-stack fa-lg applyLeave">-->
    <!--        <i class="fa fa-circle fa-stack-2x"></i>-->
    <!--        <i class="fa fa-id-badge fa-stack-1x fa-inverse"></i>-->
    <!--    </span>-->
    <!--</a>-->
<?php
    $db         = db_connect();
    $builder    = $db->table('staff_leave_details');
    $lType      = $builder->select('*')
                    ->select('leave_types.id as ltid')
                    ->join('leave_types', 'leave_types.id = staff_leave_details.leave_type_id', 'left')
                    ->where('staff_leave_details.staff_id', session('userid'))
                    ->get();
	$allLevType = $lType->getResult();
		
	?>
    
    
<script>
   $('table').dataTable({searching: false, paging: false, info: false, ordering: false,});
</script>               