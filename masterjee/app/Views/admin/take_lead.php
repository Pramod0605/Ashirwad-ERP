<script src="https://cdn.tiny.cloud/1/bqeswt7khurrtgyg4kcadonsec1iq5r48tcew3g7x0y8sbx7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#editor',
    });
</script>
        <div class="row pt-4 mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem">
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/leads" class="btn btn-sm w-100 exam" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>All</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/campaigns" class="btn btn-sm w-100 exam" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Campaign</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/taken_leads" class="btn btn-sm w-100 terms" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Leads</a>
            </div>
    </div>
    <div class="row" style="margin:0.1rem; padding-top:10px">
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/followups" class="btn btn-sm w-100" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Followups</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/walkin_leads" class="btn btn-sm w-100" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Walk-in</a>
            </div>
            <div class="col-4 text-center">
                <a href="<?= base_url(); ?>admin/staff/missed" class="btn btn-sm w-100" style="text-decoration: none; font-size:13px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br>Missed</a>
            </div>
    </div>
    
    <div class="row" style="margin:0.1rem; padding-top:20px">
        <div class="col-6 text-center">
            <a class="btn-sm btn-primary" style="width:100%; display: inline-block" href="#history">History</a>
        </div>
        <div class="col-6 text-center">
            <a class="btn-sm btn-primary" style="width:100%; display: inline-block" href="#transfer">Transfer</a>
        </div>
    </div>
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_followup'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        
        
        <div class="row pt-4" id="camp" style="padding-left:25px; padding-right:25px">
            <table class="table">
                <tbody>
                   <?php 
                     $db        = db_connect();
                     $cdate     = date("Y-m-d");
                     $dMsg      = urlencode($leadsInfo->default_share_message);
                     ?>
                     <tr style="border-bottom:hidden;">
                        <td colspan="1" style="width:50%; text-align:lett"><?= '<strong>'.$leadsInfo->l_name.'</strong><br>'.$leadsInfo->l_father_name.'/'.$leadsInfo->l_mother_name.'<br>'.$leadsInfo->l_address.'<br>'.$leadsInfo->l_email; ?></td>
                        <td colspan="1" style="width:50%; text-align:right; border-bottom-color: gainsboro;"><?= 'P: '.$leadsInfo->l_phone_number.'<br>A: '.$leadsInfo->l_alternative_phone; ?></td>
                    </tr>
                    <tr style="border-bottom:hidden;">
                        <td colspan="1" style="width:50%; text-align:lett">
                            <a class="text-danger" data-c_id="<?= $leadsInfo->c_id; ?>" data-l_id="<?= $leadsInfo->l_id; ?>"data-tel="<?= $leadsInfo->l_phone_number; ?>" href="tel:<?= $leadsInfo->l_phone_number; ?>"><span class="fa-stack fa-lg"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-phone fa-stack-1x fa-inverse"></i></span></a>
                            <a class="text-success" href="https://api.whatsapp.com/send?phone=<?= $leadsInfo->l_phone_number; ?>&text=<?= $dMsg; ?>"><span class="fa-stack fa-lg"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i></span></a>
                            <a class="text-warning" href="mailto:<?= $leadsInfo->l_email; ?>"><span class="fa-stack fa-lg"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></a>
                        </td>
                        <td colspan="1" style="width:50%; text-align:right; border-bottom-color: gainsboro;">
                            <a class="text-danger" href="<?= base_url(); ?>admin/staff/add_lead/<?= $leadsInfo->l_id; ?>"><span class="fa-stack fa-lg"><i class="fa fa-square fa-stack-2x"></i><i class="fa fa-pencil fa-stack-1x fa-inverse"></i></span></a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            <?php
                $ccTim          = $db->query("SELECT * FROM `cyc_campaign_time` WHERE c_id  = '".$leadsInfo->c_id."' AND staff_id  = '".session('userid')."' AND type = 'start' ORDER BY ct_id DESC LIMIT 1 ")->getRow();
                if (!empty($ccTim)) {
                    $datetime   = date("Y-m-d H:i:s");
                    $from_time  = strtotime($ccTim->date.' '.$ccTim->time);
                    $to_time    = strtotime($datetime);
                    $duration   = round(abs($to_time - $from_time) / 60,2);
                } else {
                    $duration   = 0;
                }
            ?>
            <div class="lms_card-body lms_text-center" id="time" style="text-align:center">
                <span class="digit" id="hr">00</span>
                <span class="txt">Hr</span>
                <span class="digit" id="min">00</span> 
                <span class="txt">Min</span>
                <span class="digit" id="sec">00</span>
                <span class="txt">Sec</span>
                <span class="digit" id="count">00</span><br>
                <a href="javascript:void(0);" id="stopBtn" class="btn btn-sm btn-danger stopBtn" style="text-decoration: none; font-size:15px; background-color: #189C07 !important; color:#ffffff; line-height:1"><br><i class="fa fa-clock-o" aria-hidden="true"></i>Stop</a>
            </div>
            
        </div>
        
<script>
    $(document).ready(function() {
        toggleConvertDiv();
        $('#cs').change(function() {
            toggleConvertDiv();
        });
        
        function toggleConvertDiv() {
            var selectedOption = $('#cs option:selected');
            var campaignType = selectedOption.data('title');
            if (campaignType === 'Converted' || campaignType === 'Success') {
                $('#convert').show();
            } else {
                 $('#convert').val('').hide();
            }
        }
    });
</script>       

        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <input type="hidden" class="form-control" name="lid" value="<?= $leadsInfo->l_id; ?>" readonly>
                    <input type="hidden" class="form-control" name="cid" value="<?= $leadsInfo->c_id; ?>" readonly>
                    <br>
                    <br>
                    <label>Follow-up</label>
                    <br>
                    <label>Level</label>
                    <select class="form-control" name="level" id="level" required>
                        <option value="1" <?php if ($leadsInfo->l_name == 1) { echo 'selected'; } ?>>Level 1</option>
                        <option value="2" <?php if ($leadsInfo->l_name == 2) { echo 'selected'; } ?>>Level 2</option>
                        
                    </select>
                    <br>
                    <select class="form-control" name="cs" id="cs" required>
                        <option value="">Select Call Status</option>
                        <?php foreach ($followStatus as $fs) { ?>
                        <option data-title="<?= $fs->title; ?>" value="<?= $fs->title; ?>"><?= $fs->title; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <div id="convert" style="display:none">
                    <select class="form-control" name="class_id" id="class_id" required>
                        <option value="">Select Class</option>
                        <?php foreach ($allClsInfo as $cls) { ?>
                        <option data-title="<?= $cls->id; ?>" value="<?= $cls->id; ?>"><?= $cls->class; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    </div>
                    <label>Feedback Content</label>
                    <select class="form-control" name="content" id="content" required>
                        <option value="">Select Content</option>
                        <?php foreach ($followContent as $fc) { ?>
                        <option value="<?= $fc->content; ?>"><?= $fc->content; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <textarea  class="form-control" name="fr" id="fr" required></textarea>
                    <br>
                    <button type="button" id="speak" style="border-radius: 10px; background:#189C07 !important" class="btn btn-sm btn-primary"><i class="fa fa-microphone" aria-hidden="true"></i> Speak</button>
                    <br>
                    <br>
                    <label>Next Follow-up Date</label>
                    <input type="date" class="form-control" value="" name="nfd">
                    <br>
                    <label>Next Follow-up Time</label>
                    <input type="time" class="form-control" value="" name="nft">
                    <br>
                    
                    <button type="submit" id="submit" class="btn-large btn-primary w-100" style="width:100%">Save</button>
                </div>
            </div>
        </div>
        <hr>
        
        
      
                    
        </form>
        
        
        
        
        <form name="myForm" id="myForm" action="<?= base_url('admin/staff/save_lead_transfer'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">   
        
        <div class="row pt-4" id="transfer">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <label>Transfer this lead</label>
                    <input type="hidden" class="form-control" name="tlid" value="<?= $leadsInfo->l_id; ?>" readonly>
                    <input type="hidden" class="form-control" name="tcid" value="<?= $leadsInfo->c_id; ?>" readonly>
                    <select name="transfer_to" class="form-control">
                        <option value=""></option>
                        <?php foreach ($staffInfo as $sinfo) { ?>
                            <option value="<?= $sinfo->id; ?>"><?= $sinfo->employee_id.' - '.$sinfo->name.' '.$sinfo->surname; ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <label>Level</label>
                    <select class="form-control" name="level" id="level" required>
                        <option value="1" <?php if ($leadsInfo->l_name == 1) { echo 'selected'; } ?>>Level 1</option>
                        <option value="2" <?php if ($leadsInfo->l_name == 2) { echo 'selected'; } ?>>Level 2</option>
                        
                    </select>
                    <br>
                    <br>
                    <button type="submit" id="submit" class="btn-large btn-primary w-100" style="width:100%">Transfer</button>
                </div>
            </div>
        </div>
                    
        </form>
        
        <div class="row pt-4" id="history">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <label>Follow-up history</label>
                    <br>
                    <?php foreach ($followUp as $fup) { ?>
                    <label style="font-size:10px;">Next Follow-up : <b><?= date('d F Y', strtotime($fup->next_followup_date)) . ' ' . date('h:i A', strtotime($fup->next_followup_time)); ?></b></label><br>
                    <label style="font-size:10px;">Feedback Date : <b><?= date('d F Y', strtotime($fup->followup_date)) . ' ' . date('h:i A', strtotime($fup->followup_time)); ?></b></label>
                    <textarea type="text" class="form-control" readonly><?= $fup->followup_remark; ?></textarea>
                    
                    <hr>
                    <?php } ?>
                </div>
            </div>
        </div>
        

      <div class="alert alert-primary alert-dismissible fade" role="alert" id="success_alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <span id="success_message"></span>
      </div>

      <div class="alert alert-danger alert-dismissible fade" role="alert" id="error_alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <span id="error_message"></span>
      </div>

<script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
    event.preventDefault();
    var formval = $('#myForm')[0];
    var data = new FormData(formval);
    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: "<?php echo base_url(); ?>admin/staff/save_followup",
        dataType: 'json',
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function(response) {
            if (response.status == 'success') {
                $('#success_message').html(response.message);
                $('#success_alert').addClass('show');
                window.setTimeout(function() {location.reload();}, 3000);
            } else {
                $('#error_message').html(response.message);
                $('#error_alert').addClass('show');
                window.setTimeout(function() {location.reload();}, 3000);
            }
        }
    });
});

$('#content').change(function(){
    content = document.getElementById('content').value;
    document.getElementById('fr').value = content;
});


});

$(document).ready(function () {
    $('.text-danger[data-l_id]').on('click', function (e) {
        e.preventDefault();
        var leadId  = $(this).data('l_id');
        var campId  = $(this).data('c_id');
        var tel     = $(this).data('tel');
        var timestamp = new Date().toISOString();
        $.ajax({
            url: '<?= base_url(); ?>admin/staff/save_call_time',
            type: 'POST',
            async : true,
            dataType : 'json',
            data: {
                l_id: leadId,
                c_id: campId,
                tel: tel,
                call_time: timestamp
            },
            success: function (response) {
                window.location.href = 'tel:' + $(e.target).closest('a').attr('href').replace('tel:', '');
            }
        });
    });
});
</script>
<script>
    let stopBtn = document.getElementById('stopBtn');
    let hour = <?= '0'; ?>;
    let minute = <?= $duration; ?>;;
    let second = <?= '0'; ?>;;
    let count = 0;
    let timer;
    function startTimer(){
        if (!timer) {
            timer = setInterval(stopWatch, 10);
        }
    }
    function stopWatch() {
        count++;
        if (count == 100) {
            second++;
            count = 0;
        }
        if (second == 60) {
            minute++;
            second = 0;
        }
        if (minute == 60) {
            hour++;
            minute = 0;
            second = 0;
        }
        updateDisplay();
    }
    function updateDisplay() {
        document.getElementById('hr').textContent = hour.toString().padStart(2, '0');
        document.getElementById('min').textContent = minute.toString().padStart(2, '0');
        document.getElementById('sec').textContent = second.toString().padStart(2, '0');
        document.getElementById('count').textContent = count.toString().padStart(2, '0');
    }
    stopBtn.addEventListener('click', function () {
			clearInterval(timer);
			timer = null; // Reset timer variable
			$.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url(); ?>admin/staff/start_campaign_json/<?= $leadsInfo->c_id; ?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var url = '<?php echo base_url(); ?>admin/staff/camp_leads';
                    //location.replace(url);
                }
            });
    });
	
</script>

<script>
    var speak = document.getElementById('speak');
    var textarea = document.getElementById('fr');
    var SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    var recognition = new SpeechRecognition();
    speak.addEventListener('click', function () {
        recognition.start();
    })
    recognition.onresult = function (e) {
        var transcript = e.results[0][0].transcript;
        document.getElementById("fr").value += ' ' + transcript;
        
    }

</script>