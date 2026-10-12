<style>
html {
    font-family: sans-serif;
    line-height: 1.15;
    height: 100%;
}

body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #1a1a1a;
    text-align: left;
    height: 100%;
    background-color: #fff;
}

.container {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.map {
    flex: 1;
    background: #f0f0f0;
}

.info {
    padding: 1rem;
    margin: 0;
}

.info.error {
    color: #fff;
    background: #dc3545;
}
</style>
    <div class="mg-top-90">
    </div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=init"></script>
    
    
    <form name="myForm" id="myForm" action="<?= base_url('admin/staff/live_tracking'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <select class="form-control" name="vehicle_id" id="vehicle_id" onchange="reportFilterFunction(this.value)">
                        <option value="">Select Vehicle...</option>
                        <?php foreach ($all_vehicles_info as $vehicle) { ?>
                            <option value="<?= $vehicle->id ?>" <?php if ($vehicle_id == $vehicle->id) { echo 'selected'; } ?>><?= $vehicle->vehicle_no.' - '.$vehicle->driver_name; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                </div>
            </div>
        </div>
        </form>
        <hr>
        
        <?php  if (!empty($flag) && !empty($vehicle_id)) { ?>
        
        <main class="container" style="width:100% !important; padding:0px; max-width: 100% !important;">
            <div id="map" class="map" style="width:100% !important; padding:0px"></div>
            <p id="info" class="info"></p>
        </main>  
           
        <?php } ?> 

<script>
    function reportFilterFunction(val) {
        var id  = val;
        window.location.href = "<?= base_url() ?>admin/staff/live_tracking/"+id ;
    }
</script>    
<script>
    /**
 * Create google maps Map instance.
 * @param {number} lat
 * @param {number} lng
 * @return {Object}
 */
const createMap = ({ lat, lng }) => {
  return new google.maps.Map(document.getElementById('map'), {
    center: { lat, lng },
    zoom: 15
  });
};

const createIcon = "https://one2.in/cycode/ctransport/public/style/img/icon/busicon.png";
  

/**
 * Create google maps Marker instance.
 * @param {Object} map
 * @param {Object} position
 * @return {Object}
 */
const createMarker = ({ map, position, icon }) => {
  return new google.maps.Marker({ map, position, icon });
};

/**
 * Track the user location.
 * @param {Object} onSuccess
 * @param {Object} [onError]
 * @return {number}
 */
const trackLocation = ({ onSuccess, onError = () => { } }) => {
  if ('geolocation' in navigator === false) {
    return onError(new Error('Geolocation is not supported by your browser.'));
  }

  return navigator.geolocation.watchPosition(onSuccess, onError, {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
  });
};

/**
 * Get position error message from the given error code.
 * @param {number} code
 * @return {String}
 */
const getPositionErrorMessage = code => {
  switch (code) {
    case 1:
      return 'Permission denied.';
    case 2:
      return 'Position unavailable.';
    case 3:
      return 'Timeout reached.';
  }
}

/**
 * Initialize the application.
 * Automatically called by the google maps API once it's loaded.
*/
function init() {
  const initialPosition = { lat: <?= $latitude; ?>, lng: <?= $longitude; ?> };
  const map = createMap(initialPosition);
  const icon = createIcon;
  const marker = createMarker({ map, position: initialPosition, icon });
  const $info = document.getElementById('info');

  let watchId = trackLocation({
    onSuccess: ({ coords: { <?= $latitude; ?>: lat, <?= $longitude; ?>: lng } }) => {
      marker.setPosition({ lat, lng });
      map.panTo({ lat, lng });
      $info.textContent = `Lat: ${lat.toFixed(5)} Lng: ${lng.toFixed(5)}`;
      $info.classList.remove('error');
    },
    onError: err => {
      console.log($info);
      $info.textContent = `Error: ${err.message || getPositionErrorMessage(err.code)}`;
      $info.classList.add('error');
    }
  });
}

</script>   
    