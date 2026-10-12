<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1><i class="fa fa-bus"></i> <?php //echo $this->lang->line('transport'); ?></h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <?php $this->load->view('financereports/_finance'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box removeboxmius">
                    <div class="box-header ptbnull"></div>
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> <?php echo $this->lang->line('select_criteria'); ?></h3>
                    </div>
                    <form role="form" action="<?php echo site_url('financereports/searchByDate') ?>" method="post" class="" id="reportform" >
                        <div class="box-body row">

                            <?php echo $this->customlib->getCSRF(); ?>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>Date From</label>
                                    <input name="date_from" placeholder="" type="date" class="form-control" value="<?= date("Y-m-d"); ?>" autocomplete="off">
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>Date From</label>
                                    <input name="date_to" placeholder="" type="date" class="form-control" value="<?= date("Y-m-d"); ?>" autocomplete="off">
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="search" value="search_filter" class="btn btn-primary btn-sm checkbox-toggle pull-right"><i class="fa fa-search"></i> <?php echo $this->lang->line('search'); ?></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="">
                        <div class="box-header ptbnull"></div>
                        <div class="box-header ptbnull">
                            <h3 class="box-title titlefix"><i class="fa fa-money"></i> Vehicle Fuel Report</h3>
                        </div>
                        <div class="box-body table-responsive">                         
                            <table class="table table-striped table-bordered table-hover income-list" data-export-title="<?php echo 'Vehicle Fuel Report';  $this->customlib->get_postmessage();   ?>">
                                        <thead>
                                            <tr>
                                                <th>Vehicle</th>
                                                <th>Driver</th>
                                                <th>Base Average</th>
                                                <th>Route Covered (K.m)</th>
                                                <th>Estimated Fuel (Ltr.)</th>
                                                <th>Issued Fuel (Ltr.)</th>
                                                <th>Difference (Ltr.)</th>
                                                <th>Reported Average (km per ltr)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
</div>  
</section>
</div>

<script>
<?php
if ($search_type == 'period') {
    ?>

        $(document).ready(function () {
            showdate('period');
        });

    <?php
}
?>

</script>
<script>
$(document).ready(function() {
     emptyDatatable('income-list','data');
});
</script>  
<script>
$(document).ready(function() {
     initDatatable('income-list','financereports/getVehicleFuelReport',[],[],100);
});
</script>

<script type="text/javascript">
$(document).ready(function(){ 
$(document).on('submit','#reportform',function(e){
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var $this = $(this).find("button[type=submit]:focus");  
    var form = $(this);
    var url = form.attr('action');
    var form_data = form.serializeArray();
    $.ajax({
           url: url,
           type: "POST",
           dataType:'JSON',
           data: form_data, // serializes the form's elements.
              beforeSend: function () {
                $('[id^=error]').html("");
                $this.button('loading');
                
               },
                success: function(response) { // your success handler
                
                if(!response.status){
                    $.each(response.error, function(key, value) {
                    $('#error_' + key).html(value);
                    });
                }else{
                 
                   initDatatable('income-list','financereports/getVehicleFuelReport',response.params,[],100);
                }
              },
             error: function() { // your error handler
                 $this.button('reset');
             },
             complete: function() {
             $this.button('reset');
             }
         });
});

    });    
</script>