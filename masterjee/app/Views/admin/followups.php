<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@event-calendar/build@2.6.1/event-calendar.min.css">
<script src="https://cdn.jsdelivr.net/npm/@event-calendar/build@2.6.1/event-calendar.min.js"></script>

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
    
    
        <div id='calendar' style="height: 800px !important; padding-top:20px"></div>
      
<script>

  document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'listWeek',
    initialDate: '<?= date("Y-m-d") ?>',
    headerToolbar: {
      left: 'listWeek, list',
    },
    buttonText : {
        'listWeek':     'Weekly',
        'today':    'Today',
    },
    events: [
    <?php foreach ($followUps as $fw) { 
        $cdate     = date("Y-m-d");
        $date1     = new DateTime($fw->next_followup_date);
        $date2     = new DateTime($cdate);
        $interval  = $date1->diff($date2);
        $daysDifference = $interval->days;
        
        if ($daysDifference > 0) {
            $riCon = '<i class="fa fa-circle text-danger" aria-hidden="true"></i>';
        } else {
            $riCon = '<i class="fa fa-circle text-primary" aria-hidden="true"></i>';
        }
                     
        if ($fw->followup_priority == 'Low') {
            $rBox = '<i class="fa fa-square text-danger" aria-hidden="true"></i></i>';
        } elseif ($fw->followup_priority == 'Medium') {
            $rBox = '<i class="fa fa-square text-warning" aria-hidden="true"></i>';
        } elseif ($fw->followup_priority == 'High') {
            $rBox = '<i class="fa fa-square text-success" aria-hidden="true"></i>';
        }
        
        ?>
      {
        title: <?= json_encode('<strong>' . $fw->l_name . '</strong><br>' . $fw->c_title . '<br>' . $daysDifference . ' days ago<br>' . $fw->followup_remark); ?>,
        url:'<?= base_url() ?>admin/staff/take_lead/<?= $fw->l_id ?>',
        start: '<?= $fw->next_followup_date.'T'.$fw->next_followup_time ?>',
        end: '<?= $fw->next_followup_date.'T'.$fw->next_followup_time ?>',
        borderColor: '<?php if ($fw->next_followup_date < date("Y-m-d") && $fw->followup_status == 0) { echo 'red'; } elseif ($fw->next_followup_date <= date("Y-m-d") && $fw->followup_status == 1) { echo 'blue'; } elseif ($fw->next_followup_date == date("Y-m-d") && $fw->next_followup_time <= date("H:i:s") && $fw->followup_status == 0) { echo 'red'; } else { echo 'green'; } ?>',
      },
      <?php } ?>
    ],
    eventContent: function( info ) {
          return {html: info.event.title};
    },
    eventContent: (arg) => ({
      html: `<a href="${arg.event.url}">${arg.event.title}</a>`
    }),

  });

  calendar.render();
});

</script>
<script>
    $(document).ready(function() {
        document.getElementById("calendar").style.height = '800px';
    });    
    document.getElementById("calendar").addEventListener("click", function(event) {
        document.getElementById("calendar").style.height = '800px';
    });
</script>
