<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
        
    <div class="row" style="margin:0.1rem" id="actionTop">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/homework_list" class="btn btn-sm w-100 category" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Homework List</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/staff/homework" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Homework</a>
            </div>
    </div>
    <br>
    <form name="myForm" id="myForm" action="<?= base_url('admin/staff/assigments_list'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4">
            <div class="col-6 text-center">
                <input type="date" class="form-control" name="fdate" value="<?= $fdate; ?>" placeholder="From">
            </div>
            <div class="col-6 text-center">
                <button type="submit" id="submit" class="btn btn-primary w-100" style="width:100%; height: 37px;">Submit</button>
            </div>
        </div>
    </form>
    
<?php if (!empty($flag)) { ?>    
    <div class="row pt-4" id="rating">
    <table id="example" class="display" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Title</th>
                        <th>SubmitDate</th>
                        <th>EvaluationDate</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  foreach ($students as $stu) {
                        $daily_assignment = $StaffModel->all_daily_assignment($stu->student_id, $fdate);
                        foreach ($daily_assignment as $da) {
                    ?>
                    
                    <tr>
                        <td><?= $da->name; ?></td>
                        <td><?= $da->title; ?></td>
                        <td><?= $da->date; ?></td>
                        <td><?= $da->evaluation_date; ?></td>
                        <td>
                            <a href="javascript:void(0);" data-hdocs="<?= $da->attachment; ?>" class="btn btn-sm viewhw">View</a></br>
                            <a href="javascript:void(0);" data-hwid="<?= $da->aid; ?>" data-sid="<?= $stu->student_id; ?>" class="btn btn-sm scorehw">Evaluate</a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5"><?= $da->description; ?></td>
                    </tr>
                    <tr>
                        <td colspan="5"><?= $da->remark; ?></td>
                    </tr>
                    <?php } } ?>
                </tbody>
    </table>  
    </div>
<?php } ?>

<!-- Modal Structure -->
<div class="modal fade" id="homeworkModal" tabindex="-1" role="dialog" aria-labelledby="homeworkModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="homeworkModalLabel">Assignment Details</h5>
            </div>
            <div class="modal-body">
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
                <h5 class="modal-title" id="scoreModalLabel">Evaluate Assignment</h5>
            </div>
            <div class="modal-body">
                <form id="scoreForm">
                    <input type="hidden" id="asid" name="asid_id">
                    <input type="hidden" id="sid" name="student_id">
                     <div class="form-group">
                        <label for="score">Enter Remark</label>
                        <input type="text" class="form-control" id="note" name="note" required min="0" max="100">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('.viewhw').on('click', function() {
        var docs = $(this).data('hdocs');
        $('#hwFiles').empty();
        if (docs) {
            var fileUrl = "<?= site_info()['siteUrl']; ?>uploads/homework/daily_assignment/" + docs;
            if (docs.endsWith('.jpg') || docs.endsWith('.jpeg') || docs.endsWith('.png')) {
                $('#hwFiles').append('<img src="' + fileUrl + '" class="img-fluid" alt="Homework Image" />');
            } else {
                $('#hwFiles').append('<a href="' + fileUrl + '" download class="btn btn-sm btn-primary">Download File</a>');
            }
        }
        $('#homeworkModal').modal('show');
    });
    
    $('.scorehw').on('click', function() {
        var hwid = $(this).data('hwid');
        var sid = $(this).data('sid');
        $('#asid').val(hwid);
        $('#sid').val(sid);
        $('#scoreModal').modal('show');
    });
    
    $('#scoreForm').on('submit', function(e) {
        e.preventDefault();

        var asid = $('#asid').val();
        var sid = $('#sid').val();
        var note = $('#note').val();
        
        $.ajax({
            url: '<?= base_url("admin/staff/submit_assignment_evaluation"); ?>',
            method: 'POST',
            data: {
                asid: asid,
                student_id: sid,
                note: note
            },
            success: function(response) {
                if (response.success) {
                    alert('Submitted successfully!');
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