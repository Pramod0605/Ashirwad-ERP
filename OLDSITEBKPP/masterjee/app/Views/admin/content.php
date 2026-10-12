        <div class="row pt-4 mg-top-90">
        </div>
        
        <?php 
        
        $date = date("Y-m-d");
        $db = db_connect();
        foreach ($all_uploaded_contents as $contents) { 
            
            if (!empty($contents->vid_url)) {
                $media = '<iframe width="420" height="315" src="'.$contents->vid_url.'"></iframe>';
            } else {
                $media = '<a href="'.site_info()['siteUrl'].$contents->dir_path.'" class="btn btn-primary btn-sm">View</a> ';
            }
                  
        ?>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    
                        <?= $contents->real_name; ?><hr>
                        <?= $media ?>
                </div>
            </div>
        </div>
        
        <?php } ?>
        
    
      
       

