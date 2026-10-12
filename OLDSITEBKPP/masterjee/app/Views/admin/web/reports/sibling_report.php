<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
    <div class="row pt-4 table-responsive" id="rating">
    <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Father</th>
                        <th>Mother</th>
                        <th>Guardian</th>
                        <th>Guardian Phone</th>
                        <th>
                            <table class="display" style="width:100%; text-align:left !important">
                                <tbody>
                                <tr>
                                    <th>Sibling Name</th>
                                    <th>Class</th>
                                    <th>Adm Date</th>
                                    <th>Gender</th>
                                </tr>
                                </tbody>
                            </table>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i  = 0;
                    $db = db_connect();
                    foreach ($students as $stu) { 
                    $i += 1;
                    
                    $sInfos = $StaffModel->student_sibling_info($stu->parent_id);
                    ?>
                    <tr>
                        <td><?= $stu->admission_no.' '.$stu->firstname; ?></td>
                        <td><?= $stu->father_name; ?></td>
                        <td><?= $stu->mother_name; ?></td>
                        <td><?= $stu->guardian_name; ?></td>
                        <td><?= $stu->guardian_phone; ?></td>
                        <td>
                            <table class="display" style="width:100%; text-align:left !important">
                                <tbody>
                                <?php foreach ($sInfos as $sInfo) { ?>
                                <tr>
                                    <td><?= $sInfo->firstname; ?></td>
                                    <td><?= $sInfo->class_name; ?></td>
                                    <td><?= $sInfo->admission_date; ?></td>
                                    <td><?= $sInfo->gender; ?></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
    </table>

            
        </div>

<script>
   DataTable.ext.errMode = 'none';
   $('table').dataTable({searching: true, paging: true, info: false, ordering: true, responsive:true});
</script> 