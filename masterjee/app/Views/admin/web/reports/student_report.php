<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
    <div class="row pt-4 table-responsive">
    <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
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

<script>
   $('table').dataTable({searching: true, paging: true, info: false, ordering: true, responsive:true});
</script> 