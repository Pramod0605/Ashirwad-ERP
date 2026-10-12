    <div class="mg-top-90">
    </div>
    
    <form name="myForm" id="myForm" action="<?= base_url('admin/staff/routes'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <select class="form-control" name="batch_id" onchange="reportFilterFunction(this.value)">
                        <option value="">Select Vehicle...</option>
                        <?php foreach ($all_vehicles_info as $vehicle) { ?>
                            <option value="<?= $vehicle->id ?>"><?= $vehicle->vehicle_no.' - '.$vehicle->driver_name; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                </div>
            </div>
        </div>
        </form>
        
    <hr>
        <?php 
        if (!empty($vid)) { ?>
    
    <?php 
            foreach ($all_routes_info as $route) {
                
                $all_students = $StaffModel->all_student_info_route($route->id, site_info()['active_session']);
                $i = 1;
                foreach ($all_students as $stu) {
                $i += 1;
                }
    ?>
<div class="row pt-4">
            <div class="card card-primary" style="padding-left:0px !important; padding-right:0px !important; margin-left:0px !important; margin-right:0px !important">
                <div class="card-header bg-primary text-center">
                    <span class="float-left text-sm"><b><?= $route->route_title; ?></b></span>
                    <span class="float-right text-sm text-right" style="float: right;">&nbsp;</span>
                    <hr>
                 </div>
                 <div class="card-header">
                    <span class="float-left text-sm">Route Distance</span>
                    <span class="float-right text-sm text-left" style="float: right;"><b><?= $route->route_distance; ?></b></span>
                    <hr>
                    <?php if ($viInfo->vehicle_base_average > 0 && $route->route_distance) { ?>
                    <span class="float-left text-sm">Fuel Consumption</span>
                    <span class="float-right text-sm text-left" style="float: right;"><b><?= round((1/$viInfo->vehicle_base_average)*$route->route_distance); ?> Ltr. / Daily</b></span>
                    <?php } else { ?>
                    <span class="float-left text-sm">Fuel Consumption : <b>Base average or distance is not set</b></span>
                    <?php } ?>
                    <hr>
                    <span class="float-left text-sm">Seating Capacity </span>
                    <span class="float-right text-sm text-left" style="float: right;"> <b><?= $viInfo->max_seating_capacity; ?></b></span>
                    <hr>
                    <span class="float-left text-sm">Student Strength </span>
                    <span class="float-right text-sm text-left" style="float: right;"> <b><?= $i; ?></b></span>
                </div>
            </div>
        </div>

<?php } ?>
<?php } ?>
<script>
    function reportFilterFunction(val) {
        var id  = val;
        window.location.href = "<?= base_url() ?>admin/staff/routes/"+id ;
    }
</script>
