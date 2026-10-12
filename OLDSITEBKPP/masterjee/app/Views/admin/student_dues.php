        <div class="row pt-4 mg-top-90">
        </div>
        
      
        <?php 
        
        $date = date("Y-m-d");
        $db = db_connect();
        foreach ($all_student_info as $students) {  
        
        $feesGroups = $db->query("SELECT * FROM student_fees_master WHERE student_session_id = '".$students->ssid."' ")->getResult();
            $amounts    = 0;
            $paid       = 0;
            $fine       = 0;
            $discount   = 0;
            
            $totalfee = 0;
            $deposit  = 0;
            $discount = 0;
            $balance  = 0;
            $fine     = 0;
            
            $student_total_fees = $StaffModel->getTransStudentFees($students->ssid, site_info()['active_session']); 
            foreach ($student_total_fees as $student_total_fees_key => $student_total_fees_value) {
                if (!empty($student_total_fees_value->fees)) {
                    foreach ($student_total_fees_value->fees as $each_fee_key => $each_fee_value) {
                        $totalfee = $totalfee +$each_fee_value->amount;
                        $amount_detail =json_decode($each_fee_value->amount_detail);
                        if (is_object($amount_detail) && !empty($amount_detail)) {
                            foreach ($amount_detail as $amount_detail_key => $amount_detail_value) {
                                $deposit  = $deposit + $amount_detail_value->amount;
                                $fine     = $fine + $amount_detail_value->amount_fine;
                                $discount = $discount + $amount_detail_value->amount_discount;
                            }
                        }
                    }
                }
            }
        ?>
        
        <div class="row pt-4">
            <div class="card" style="background: unset !important; border:unset !important;">
                <div class="card-header bg-cyan">
                    <span class="float-left text-sm"><strong><?= $students->admission_no.' - '.$students->firstname.' '.$students->lastname; ?></strong></span>
                    <hr>
                    <span class="float-left text-sm"><strong>Payble : <?= $totalfee + $fine ?></strong></span>
                    <span class="float-right text-sm" style="float: right;"><strong>Discount : <?= $discount ?></strong></span><hr>
                    <span class="float-right text-sm"><strong>Paid : <?= $deposit ?></strong></span>
                    <span class="float-right text-sm" style="float: right;"><strong>Dues : <?= $totalfee - ($deposit + $discount) ?></strong></span>
                </div>
            </div>
        </div>
        
        <?php } ?>
        
      
                   
