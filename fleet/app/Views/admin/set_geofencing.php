<div class="balance-area mg-top-90"></div>

<div class="card-header">
<div style="display: none" id="color-palette"></div>
	    <div class="row">
              <div class="col-12">
                <h3 class="card-title">
                  <div class="form-group row">
                    <div class="form-group col-sm-7">
                      <input id="pac-input" class="form-control" type="text" placeholder="Enter Address">
                    </div>
                  </div>
                </h3>
              </div>
        </div>
        
        <div class="row pt-4">
            
            <div class="col-6 text-center">
                <button class="btn btn-danger btn-sm" id="delete-button">Delete Geofence</button>
            </div>
            
            <div class="col-6 text-center">
                <button class="btn btn-success btn-sm" id="showgeofencemodel">Save Geofence</button>
            </div>
            
        </div>

</div>

<div id="map" style="width: 100%; height: 600px"></div>
  <style>
  	#map > div > div > div:nth-child(11) > div:nth-child(2) > div,#map > div > div > div:nth-child(11) > div:nth-child(3) > div,#map > div > div > div:nth-child(11) > div:nth-child(4) > div,#map > div > div > div:nth-child(11) > div:nth-child(5) > div {
    	display: none;
	}
	#map > div > div > div:nth-child(10) > div:nth-child(2) > div,#map > div > div > div:nth-child(10) > div:nth-child(3) > div,#map > div > div > div:nth-child(10) > div:nth-child(4) > div,#map > div > div > div:nth-child(10) > div:nth-child(5) > div {
    	display: none;
	}
  </style>
  <div class="modal fade show" id="modal-geofence" aria-modal="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Save Selected Geofence</h4>
            </div> 
            <div class="modal-body"> 
              <form id="geofencesave" method="post" action="<?php echo base_url(); ?>admin/staff/save_geofencing">
              <div class="card-body">
                  <div class="form-group row">
                    <label for="geo_name" class="col-sm-4 col-form-label">Name</label>
                    <div class="form-group col-sm-8">
                      <input type="text" class="form-control" name="geo_name" id="geo_name" required="true" placeholder="Geofence Name">
                    </div>
                  </div>
                 <div class="form-group row">
                    <label for="geo_description" class="col-sm-4 col-form-label">Description</label>
                    <div class="form-group col-sm-8">
                      <input type="text" class="form-control" name="geo_description" id="geo_description" required="true" placeholder="Geofence Description">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="Cateogry" class="col-sm-4 col-form-label">Vehicle</label>
                    <div class="form-group col-sm-8">
                      <div class="form-group" >
                        <select class="form-control" id="geo_vehicles" required="true" name="geo_vehicles[]" multiple="" data-placeholder="Select vehicles" style="width: 100%;"  tabindex="-1" aria-hidden="true">
                          <?php if(!empty($all_vehicles_info)) { foreach($all_vehicles_info as $vehicle) { ?>
                          <option value="<?= $vehicle->id; ?>"><?= $vehicle->vehicle_no.' - '.$vehicle->driver_name; ?></option>
                         <?php }} ?>
                        </select>
                      </div>
                    </div>
                </div>
               	<input type="hidden" class="form-control" name="geo_area" id="geo_area">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="submit" id="geofenvaluesave" class="btn btn-primary">Save</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      
      
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=&sensor=false&v=3.21.5a&libraries=drawing&signed_in=true&libraries=places,drawing"></script>
<script src="<?= base_url(); ?>public/style/distance_calculator.js"></script>
<script src="<?= base_url(); ?>public/style/custom.js?v=1120853317"></script>
<script src="<?= base_url(); ?>public/style/geofence.js"></script>