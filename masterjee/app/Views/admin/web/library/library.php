<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <div class="balance-area mg-top-90"></div>
    <br>    
    <div class="row" style="margin:0.1rem">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/add_library_book" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Book</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/library_members" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Members</a>
            </div>
    </div>
    <br>
    <div class="row" style="margin:0.1rem">
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/add_student_member" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Student</a>
            </div>
            <div class="col-6 text-center">
                <a href="<?= base_url(); ?>admin/web/add_staff_member" class="btn btn-sm w-100 add_visitor" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Add Staff</a>
            </div>
    </div>
    
    <div class="row pt-4 tbl-responsive" id="rating">
    <table id="example" class="display cell-border" style="width:100%; text-align:left !important">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Number</th>
                        <th>ISBN</th>
                        <th>Publisher</th>
                        <th>Author</th>
                        <th>Subject</th>
                        <th>Class</th>
                        <th>Category</th>
                        <th>Rack</th>
                        <th>Qty</th>
                        <th>Available</th>
                        <th>Price</th>
                        <th>Post Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $db         = db_connect();
                    foreach ($books as $book) {  ?>
                    <tr>
                        <td><?= $book->book_title; ?></td>
                        <td><?= $book->description; ?></td>
                        <td><?= $book->book_no; ?></td>
                        <td><?= $book->isbn_no; ?></td>
                        <td><?= $book->publish; ?></td>
                        <td><?= $book->author; ?></td>
                        <td><?= $book->subject; ?></td>
                        <td><?= $book->claases; ?></td>
                        <td><?= $book->category; ?></td>
                        <td><?= $book->rack_no; ?></td>
                        <td><?= $book->qty; ?></td>
                        <td><?= $book->available; ?></td>
                        <td><?= $book->perunitcost; ?></td>
                        <td><?= $book->postdate; ?></td>
                        <td><a href="<?= base_url(); ?>admin/web/add_library_book/<?= $book->id; ?>"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
    </table>
    </div>
    
    <div class="alert alert-primary alert-dismissible fade" role="alert" id="success_alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <span id="success_message"></span>
    </div>
    <div class="alert alert-danger alert-dismissible fade" role="alert" id="error_alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <span id="error_message"></span>
    </div>    

<script>
    DataTable.ext.errMode = 'none';
    $('table.display').DataTable({searching: true, paging: true, info: false, ordering: true, responsive: true});
</script> 