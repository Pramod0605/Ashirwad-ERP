<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
    <form name="myForm" id="myForm" action="<?= base_url('admin/web/admission_reports'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4">
            <div class="col-6 text-center">
                <input type="date" class="form-control" name="fdate" value="<?= $fdate; ?>" placeholder="From">
            </div>
            <div class="col-6 text-center">
                <input type="date" class="form-control" name="tdate" value="<?= $tdate; ?>" placeholder="From">
            </div>
            <br>
            <div class="col-12 text-center">
                <br>
                <button type="submit" id="submit" class="btn btn-primary w-100" style="width:100%; height: 37px;">Submit</button>
            </div>
        </div>
    </form>
    
<?php if (!empty($flag)) { ?>    
    <div class="row pt-4 tbl-responsive" id="rating">
    <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>AdmDate</th>
                        <th>AdmNo.</th>
                        <th>Name</th>
                        <th>Father</th>
                        <th>D.O.B</th>
                        <th>Gender</th>
                        <th>Category</th>
                        <th>Mobile</th>
                        <th>L.I.N</th>
                        <th>RTE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $stu) { ?>
                    <tr>
                        <td><?= $stu->admission_date; ?></td>
                        <td><?= $stu->admission_no; ?></td>
                        <td><?= $stu->firstname.' '.$stu->lastname; ?></td>
                        <td><?= $stu->father_name; ?></td>
                        <td><?= $stu->dob; ?></td>
                        <td><?= $stu->gender; ?></td>
                        <td><?= $stu->cast; ?></td>
                        <td><?= $stu->mobileno; ?></td>
                        <td><?= $stu->samagra_id.'<br>'.$stu->adhar_no; ?></td>
                        <td><?= $stu->rte; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
    </table>
    </div>
<?php } ?>

<script>
    DataTable.ext.errMode = 'none';
    $('table.display').DataTable({searching: false, paging: false, info: false, ordering: false, responsive: true});
</script> 