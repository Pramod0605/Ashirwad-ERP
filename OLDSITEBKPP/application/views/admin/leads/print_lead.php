<?php
$currency_symbol = $this->customlib->getSchoolCurrencyFormat();
?>
<style>
    .table.cell-border td, .table.cell-border th {
        border: 1px solid #ddd !important;  /* Add borders */
    }
    .table {
        border-collapse: collapse;  /* Ensures borders collapse together */
    }
</style>
<div class="content-wrapper">
    <section class="content-header"></section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                
                    <div class="nav-tabs-custom border0 navnoshadow">
                      <div class="box-header ptbnull"></div>
                        <div class="tab-content">
                            
                            <p class="box-title" style="text-align:center !important; font-size:18px">Student Information</p>
                    
                            <div class="tab-pane active table-responsive no-padding overflow-visible-lg" id="tab_1">
                                <table class="table cell-border" data-export-title="<?php echo $this->lang->line('student_list'); ?>" style="border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>Campus Name</th>
                                            <th></th>
                                            <th>Date</th>
                                            <th><?= $linfo->l_date; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Student Id</th>
                                            <th><?= $linfo->reference_no; ?></th>
                                            <th>Score</th>
                                            <th><?= $linfo->l_test_score; ?></th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center">For office use only</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                            <th>Student Name</th>
                                            <td><?= $linfo->l_name; ?></td>
                                            <th>Email Id</th>
                                            <td><?= $linfo->l_email; ?></td>
                                        </tr>
                                        <tr>
                                            <th rowspan="2">Class</th>
                                            <td rowspan="2"><?= $linfo->l_class; ?></td>
                                            <th>Father Name</th>
                                            <td><?= $linfo->l_father_name; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Father Phone No.</th>
                                            <td><?= $linfo->l_father_phone; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Date of Birth</th>
                                            <td><?= $linfo->l_dob; ?></td>
                                            <th>Father Occupation</th>
                                            <td><?= $linfo->l_father_qualification; ?></td>
                                        </tr>
                                        <tr>
                                            <th rowspan="3">Address</th>
                                            <td rowspan="3"><?= $linfo->l_address; ?></td>
                                            <th>Father Email</th>
                                            <td><?= $linfo->l_father_email; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Mother Name</th>
                                            <td><?= $linfo->l_mother_name; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Mother Phone</th>
                                            <td><?= $linfo->l_mother_phone; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Student Aadhar No.</th>
                                            <td><?= $linfo->l_aadhar_no; ?></td>
                                            <th>Mother Occupation</th>
                                            <td><?= $linfo->l_mother_qualification; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Student Blood Group</th>
                                            <td><?= $linfo->l_blood_group; ?></td>
                                            <th>Mother Email</th>
                                            <td><?= $linfo->l_mother_email; ?></td>
                                        </tr>
                                        <tr>
                                            <th rowspan="2">Email</th>
                                            <td rowspan="2"><?= $linfo->l_primary_email_id; ?></td>
                                            <th>Guardian Name</th>
                                            <td><?= $linfo->l_guradian_name; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Guardian Phone</th>
                                            <td><?= $linfo->l_guardian_phone; ?></td>
                                        </tr>
                                        <tr>
                                            <th rowspan="2">Gender</th>
                                            <td rowspan="2"><?= $linfo->l_gender; ?></td>
                                            <th>Guardian Email</th>
                                            <td><?= $linfo->l_guardian_email; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Guardian Occupation</th>
                                            <td><?= $sinfo->guardian_occupation; ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="border:none">&nbsp;</th>
                                        </tr>
                                        <tr>
                                            <th>Nationality</th>
                                            <th>Religion</th>
                                            <th>Caste</th>
                                            <th>Mother Tongue</th>
                                        </tr>
                                        <tr>
                                            <td><?= $linfo->l_nationality; ?></td>
                                            <td><?= $linfo->l_religion; ?></td>
                                            <td><?= $linfo->l_caste.' '.$linfo->l_sub_caste; ?></td>
                                            <td><?= $linfo->l_mother_tongue; ?>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <th>Course</th>
                                            <td colspan="3"><?= $linfo->l_enrolled_course; ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="text-align:center">Elective Opted For</th>
                                        </tr>
                                        <tr>
                                            <th>Subjects</th>
                                            <td colspan="3"><?= $linfo->l_elective_subjects; ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="border:none">&nbsp;</th>
                                        </tr>
                                        <tr>
                                            <td colspan="4"><b>Dear Parent,</b><br>
For Easy dissemination of information about your son/daughter studying at SJR Public School Campus, we request you to provide one primary contact number (WhatsApp Number), & Email id to which the messages about attendance, test Marks, General Information, etc. can be sent. You are also requested to provide an alternative contact number to be used during any emergency.
</td>
                                        </tr>
                                        <tr>
                                            <th>Primary Phone No.</th>
                                            <td><?= $linfo->l_phone_number; ?></td>
                                            <th>Emergency Phone No.</th>
                                            <td><?= $linfo->l_emergency_contact_no; ?></td>
                                        </tr>
                                        <tr style="border-bottom:hidden;">
                                            <td colspan="4"><b>We hereby declare that the information given above is true and agree to receive SMS, Whatsapp messages and email from our Institution on these numbers & email Ids. We will notify the campus in writing, in case of any changes to the primary/alternate contact no.</td>
                                        </tr>
                                        <tr style="border-top:hidden;">
                                            <th colspan="2"><br><br><br>Student's Signature</th>
                                            <th colspan="2"><br><br><br>Parent's  Signature</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Add custom styles if needed -->

