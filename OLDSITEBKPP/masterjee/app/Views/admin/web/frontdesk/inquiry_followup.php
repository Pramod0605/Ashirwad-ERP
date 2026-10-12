<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

<div class="balance-area mg-top-90"></div>

    <br>    
    <div class="row" style="margin:0.1rem" id="actionTop">
             <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/add_inquiry" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Inquiry</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/inquiry" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Inquiries</a>
            </div>
            
    </div>
    <br>
    <div class="row" style="margin:0.1rem">
            <div class="col-12 text-center">
                <a class="btn-sm btn-primary" style="width:100%; display: inline-block" href="#history">History Followup</a>
            </div>
            
    </div>
    
                <?php 
                    $db         = db_connect();
                    $inqFinfo   = $db->query("SELECT * FROM follow_up WHERE enquiry_id = '".$iinfo->iid."' ORDER BY id DESC LIMIT 1 ")->getRow();
                    
                    if (!empty($inqFinfo)) {
                        $lfuDate = $inqFinfo->date;
                        $nfuDate = $inqFinfo->next_date;
                    } else {
                        $lfuDate = '';
                        $nfuDate = $iinfo->follow_up_date;
                    }
                    
                ?>
  
        <div class="row pt-4" style="padding-left:25px; padding-right:25px">
            <table class="table" class="display cell-border" style="width:100%; text-align:left !important">
                <tbody>
                    <tr>
                        <td style="width:48%; text-align:left"><i class="fa fa-calendar"></i> Enquiry Date</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $iinfo->date; ?></td>
                    </tr>
                    <tr>
                        <td style="width:48%; text-align:left"><i class="fa fa-calendar"></i> Last Follow Up Date</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $lfuDate; ?></td>
                    </tr>
                    <tr>
                        <td style="width:48%; text-align:left"><i class="fa fa-calendar"></i> Next Follow Up Date</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $nfuDate; ?></td>
                    </tr>
                    
                    
                    <tr>
                        <td style="width:48%; text-align:left">Phone</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $iinfo->name; ?></td>
                    </tr>
                    <tr>
                        <td style="width:48%; text-align:left">Reference</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $iinfo->reference; ?></td>
                    </tr>
                    <tr>
                        <td style="width:48%; text-align:left">Referral</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $iinfo->referral_staff; ?></td>
                    </tr>
                    <tr>
                        <td style="width:48%; text-align:left">Source</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $iinfo->source; ?></td>
                    </tr>
                    <tr>
                        <td style="width:48%; text-align:left">Address</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $iinfo->address; ?></td>
                    </tr>
                    <tr>
                        <td style="width:48%; text-align:left">Class</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $iinfo->cname; ?></td>
                    </tr>
                    <tr>
                        <td style="width:48%; text-align:left">Number Of Child</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $iinfo->no_of_child; ?></td>
                    </tr>
                    <tr>
                        <td style="width:48%; text-align:left">Description</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $iinfo->description; ?></td>
                    </tr>
                    <tr>
                        <td style="width:48%; text-align:left">Note</td>
                        <td style="width:2%;">:</td>
                        <td style="width:50%; text-align:left"><?= $iinfo->note; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <form role="form" action="<?= base_url(); ?>admin/web/save_inquiry_followup"  id="add_assess" method="post" enctype="multipart/form-data">
        <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
                    
                    
                    
                    <div class="col-12 px-1 py-2">
                        <label>Follow Up Date</label>
                        <input type="hidden" name="iid" class="form-control" value="<?= $iinfo->iid; ?>" >
                        <input type="date" name="date" class="form-control" value="" placeholder="Date">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Next Follow Up Date</label>
                        <input type="date" name="next_date" class="form-control" value="" placeholder="Next Follow Up Date">
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Response</label>
                        <textarea name="response" class="form-control" placeholder="Response"></textarea>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Note</label>
                        <textarea name="note" class="form-control" placeholder="Note"></textarea>
                    </div>
                    <div class="col-12 px-1 py-2">
                        <label>Class</label>
                        <select class="form-control" name="status" id="status" required style="width: 100%">
                            <option value="active">Active</option>
                            <option value="passive">Passive</option>
                            <option value="dead">Dead</option>
                            <option value="won">Won</option>
                            <option value="lost">Lost</option>
                        </select>
                    </div>
                    
                    
                    <div class="col-12 px-1 py-2">
                        <button type="button" type="submit" name="btn_save_assess" id="btn_save_assess" class="btn btn-sm w-100" style="background-color: #189C07 !important; color:#fff">Add</button>
                    </div>
        </div>
    </form>
    
    <div class="row pt-4" id="history">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <label>Follow-up</label>
                    <br>
                    <?php foreach ($finfos as $finfo) { ?>
                    <label style="font-size:10px;"><?= $finfo->date; ?></label>
                    <p style="text-align:justify"><?= $finfo->response; ?></p>
                    <p style="text-align:justify"><?= $finfo->note; ?></p>
                    
                    <hr>
                    <?php } ?>
                </div>
            </div>
    </div>
        
<script>
   $('table').dataTable({searching: true, paging: true, info: false, ordering: true,});
</script>     