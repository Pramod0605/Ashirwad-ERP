<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/assigments_list" class="btn btn-sm w-100 category" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Assignments</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/homework" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Homework</a>
            </div>
    </div>
    <br>
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/homework_list" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Upcoming </a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/homework_list_closed" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Closed</a>
            </div>
    </div>
    <div class="row pt-4" id="rating">
    <table id="example" class="display" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Score</th>
                        <th>View</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i = 0;
                    $db             = db_connect();
                    foreach ($homeworks as $uh) { 
                    $i += 1;
                    $evlnfo         = $db->query("SELECT * FROM homework_evaluation WHERE homework_id = '".$uh->homework_id."' AND student_id = '".$uh->student_id."' ")->getRow();
                    if(!empty($evlnfo)) {
                        $score = $evlnfo->marks;
                    } else {
                        $score = null;
                    }
                    ?>
                    <tr>
                        <td><?= $uh->firstname.'('.$uh->admission_no.')'; ?></td>
                        <td><?= $score; ?></td>
                        <td><a href="javascript:void(0);" data-hmessage="<?= $uh->message; ?>" data-hdocs="<?= $uh->docs; ?>" data-hfname="<?= $uh->file_name; ?>" class="btn btn-sm viewhw">View</a></td>
                        <td><a href="javascript:void(0);" data-hwid="<?= $uh->homework_id; ?>" data-hscore="<?= $score; ?>" data-sid="<?= $uh->student_id; ?>" class="btn btn-sm scorehw">Evaluate</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
    </table>

            
</div>


<!-- Modal Structure -->
<div class="modal fade" id="homeworkModal" tabindex="-1" role="dialog" aria-labelledby="homeworkModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="homeworkModalLabel">Homework Details</h5>
            </div>
            <div class="modal-body">
                <p><strong>Message:</strong> <span id="hwMessage"></span></p>
                <p><strong>Files:</strong></p>
                <div id="hwFiles"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Evaluation -->
<div class="modal fade" id="scoreModal" tabindex="-1" role="dialog" aria-labelledby="scoreModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scoreModalLabel">Evaluate Homework</h5>
            </div>
            <div class="modal-body">
                <form id="scoreForm">
                    <input type="hidden" id="hwid" name="homework_id">
                    <input type="hidden" id="sid" name="student_id">
                    <div class="form-group">
                        <label for="score">Enter Score</label>
                        <input type="number" class="form-control" id="score" name="score" required min="0" max="100">
                    </div>
                     <div class="form-group">
                        <label for="score">Enter Note</label>
                        <input type="text" class="form-control" id="note" name="note" required min="0" max="100">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Score</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('.viewhw').on('click', function() {
        var message = $(this).data('hmessage');
        var docs = $(this).data('hdocs');
        var fileName = $(this).data('hfname');
        $('#hwMessage').text(message);
        $('#hwFiles').empty();
        if (docs) {
            var fileUrl = "<?= site_info()['siteUrl']; ?>uploads/homework/assignment/" + docs;
            if (docs.endsWith('.jpg') || docs.endsWith('.jpeg') || docs.endsWith('.png')) {
                $('#hwFiles').append('<img src="' + fileUrl + '" class="img-fluid" alt="Homework Image" />');
            } else {
                $('#hwFiles').append('<a href="' + fileUrl + '" download class="btn btn-sm btn-primary">Download File</a>');
            }
        }

        // Open the modal
        $('#homeworkModal').modal('show');
    });
    
    $('.scorehw').on('click', function() {
        var hwid = $(this).data('hwid');
        var sid = $(this).data('sid');
        var hscore = $(this).data('hscore');
        $('#hwid').val(hwid);
        $('#sid').val(sid);
        $('#score').val(hscore);
        $('#scoreModal').modal('show');
    });
    
    $('#scoreForm').on('submit', function(e) {
        e.preventDefault();

        var hwid = $('#hwid').val();
        var sid = $('#sid').val();
        var score = $('#score').val();
        var note = $('#note').val();
        
        $.ajax({
            url: '<?= base_url("admin/staff/submit_homework_score"); ?>',
            method: 'POST',
            data: {
                homework_id: hwid,
                student_id: sid,
                score: score,
                note: note
            },
            success: function(response) {
                if (response.success) {
                    alert('Score submitted successfully!');
                    $('#scoreModal').modal('hide');
                } else {
                    alert('Failed to submit the score. Please try again.');
                }
            },
            error: function(xhr, status, error) {
                alert('An error occurred: ' + error);
            }
        });
    });
});
</script>
    


<script>
    DataTable.ext.errMode = 'none';
    $('table.display').DataTable({searching: false, paging: false, info: false, ordering: false});
</script> 