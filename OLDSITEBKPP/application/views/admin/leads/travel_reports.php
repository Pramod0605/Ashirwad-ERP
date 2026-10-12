<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=&sensor=false&v=3.21.5a&libraries=drawing&signed_in=true&libraries=places,drawing"></script>
<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>
<div class="content-wrapper">
    <section class="content-header">
         
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> <?php echo $this->lang->line('select_criteria'); ?></h3>
                    </div>
                    <div class="box-body">
                       
                        <?php if ($this->session->flashdata('msg')) {?> <div class="alert alert-success">  <?php echo $this->session->flashdata('msg'); $this->session->unset_userdata('msg'); ?> </div> <?php }?>
                        <div class="row">
                            <form role="form"  id="myForm" action="<?php echo site_url('admin/leads/travel_reports') ?>" method="post" class="class_search_form">
                            <div class="col-md-12">
                                <div class="row">
                                        <?php echo $this->customlib->getCSRF(); ?>
                                        
                                        
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>From</label>
                                                <input type="date" class="form-control" value="<?= $fdate; ?>" name="fdate">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>To</label>
                                                <input type="date" class="form-control" value="<?= $tdate; ?>" name="tdate">
                                            </div>
                                        </div>
                                    
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Counsellor</label>
                                                <select autofocus="" id="by" name="by" class="form-control" >
                                                    <option value="">Select Counsellor</option>
                                                    <?php
$count = 0;
foreach ($stafflist as $sl) {
    ?>
                                                        <option value="<?php echo $sl->staff_id ?>" <?php if (set_value('by') == $sl->staff_id) {
        echo "selected=selected";
    }
    ?>><?php echo $sl->name.' '.$sl->surname ?></option>
                                                        <?php
$count++;
}
?>
                                                </select>
                                                  <span class="text-danger" id="error_class_id"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <button type="submit" name="submit" value="1" class="btn btn-primary btn-sm pull-right checkbox-toggle"><i class="fa fa-search"></i> <?php echo $this->lang->line('search'); ?></button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                       </form>
                        </div><!--./row-->
                    </div>
                
                    <div class="nav-tabs-custom border0 navnoshadow">
                      <div class="box-header ptbnull"></div>
        
        <input type="hidden" name="base" id="base" class="form-control" value="<?= base_url(); ?>">
        <?php  if (!empty($staff_id)) { ?>
            <script type="text/javascript" src="https://www.google.com/jsapi"></script>
		    <script src="<?php echo base_url(); ?>backend/custom/map.js?4"></script>
		    <script src="<?php echo base_url(); ?>backend/custom/custom.js"></script>
		    <script src="<?php echo base_url(); ?>backend/custom/distance_calculator.js"></script>
			<div class="col-lg-12 col-md-12" id="map_canvas" style="width: 100%; height: 475px"></div>
        <?php } ?>
                                                            </div>
                                                          </div>
                                                           
                                                        </div>
                                                        </div>
                                                        </section>
                                                        </div>
