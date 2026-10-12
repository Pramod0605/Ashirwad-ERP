<div class="mainstudent">
                             <div id="fade"></div>

                        <h4 class="pagetitleh2">
            <?php echo $this->lang->line('fees_details'); ?>
            <span class="float-right bmedium total_fees_alloted">
             <?php

$view_total_fees = 0;
foreach ($feesessiongroup_model as $feesessiongroup_key => $feesessiongroup_value) {
    $total_fees = 0;
     $stuFeeInfo = $this->db->query("SELECT * FROM student_fees_master WHERE student_session_id = '".$stuSesId."' AND fee_session_group_id = '".$feesessiongroup_value->id."' ")->row();
    if ($stuFeeInfo->id > 0) {
                ?>
                                <input type="hidden" name="prev_fees_group[]" value="<?php echo $feesessiongroup_value->id ?>">
                                            <?php
        }

    foreach ($feesessiongroup_value->feetypes as $fee_type_key => $fee_type_value) {
        $total_fees += $fee_type_value->amount;
    }

    if (isset($_POST['fee_session_group_id'])) {
        if (in_array($feesessiongroup_value->id, $_POST['fee_session_group_id'])) {
            $view_total_fees += $total_fees;
        }
    }
}
if(!empty($view_total_fees)){
echo amountFormat($view_total_fees);
}
 $class_name1 = $class_name[0]['class'];
?>
<input type="hidden" name="total_post_fees" value="<?php echo $view_total_fees; ?>">
            </span>
                         </h4>
                                                    <div class="row around10">
                                                        <div class="col-md-12">
                                      <?php
if (!empty($feesessiongroup_model)) {
    ?>
<div class="table-responsive border0">
<table class="table mb0">
    <tbody>
        <?php
$total_feees = 0;
foreach ($feesessiongroup_model as $feesessiongroup_key => $feesessiongroup_value) {
    
        $canDisplay = false;
        $total_feees = 0;
        foreach ($feesessiongroup_value->feetypes as $fee_type_key => $fee_type_value) {
            
            
            if ($fee_type_value->class_id == $classId || empty($fee_type_value->class_id)) {
              $canDisplay = true;  
              $total_feees += $fee_type_value->amount;
            }
            
        }
 

        if (strpos($class_name1,'1 PUC') !== false) {
             // echo "$haystack contains $needle";
             if($feesessiongroup_value->group_name == "School Hostel Fee" ||  $feesessiongroup_value->group_name == "II PUC Hostel Fee" ){
                    continue;
             }
         }else if (strpos($class_name1,'2 PUC') !== false) {
             // echo "$haystack contains $needle";
             if($feesessiongroup_value->group_name == "School Hostel Fee" ||  $feesessiongroup_value->group_name == "I PUC Hostel Fee" ){
                    continue;
             }
         }else if(($feesessiongroup_value->group_name == "I PUC Hostel Fee" || $feesessiongroup_value->group_name == "II PUC Hostel Fee" )){
            continue;
          }

        if ($canDisplay == true) {
            
            $stuFeeInfo = $this->db->query("SELECT * FROM student_fees_master WHERE student_session_id = '".$stuSesId."' AND fee_session_group_id = '".$feesessiongroup_value->id."' ")->row();
            
            
            
        ?>
                                          <tr>
                                            <td colspan="3" class="mailbox-name white-space-nowrap border0">
                                                  <div class="panel-group1 mb0">
    <div class="panel panel-default1">
      <div class="panel-heading pt5 pb5">
        <h6 class="panel-title panel-title1 overflow-hidden">
          <input class="fee_group_chk vertical-middle" type="checkbox" name="fee_session_group_id[]" <?php if (!empty($stuFeeInfo->id)) { echo 'checked' ; } ?> value="<?php echo $feesessiongroup_value->id; ?>" <?php echo set_checkbox('fee_session_group_id[]', $feesessiongroup_value->id); ?>>
          <a class="display-inline collapsed box-plus-panel" data-toggle="collapse" href="#collapse_fees_<?php echo $feesessiongroup_value->id ?>">
             <span class="font14"><?php echo $feesessiongroup_value->group_name; ?></span></a>
          <span class="float-right bmedium pt3 fee_group_total" data-amount="<?php echo ($total_feees); ?>"><?php echo amountFormat($total_feees); ?></span>
        </h6>
      </div>
      <div id="collapse_fees_<?php echo $feesessiongroup_value->id ?>" class="panel-collapse collapse">
            <ul class="list-group student_fee_list ui-sortable">
                <li class="list-group-item"><div class="displayinline stfirstdiv bmedium font14 pl-65"><?php echo $this->lang->line('fees_type'); ?></div>
                    <div class="due_date bmedium font14"><?php echo $this->lang->line('due_date'); ?></div>
                    <div class="tools bmedium font14"><?php echo $this->lang->line('amount'); ?> (<?php echo $currency_symbol; ?>)</div>
                </li>
            <?php foreach ($feesessiongroup_value->feetypes as $fee_type_key => $fee_type_value) {
                
                if ($fee_type_value->class_id == $classId || empty($fee_type_value->class_id)) {
                if ($fee_type_value->amount > 0) {
            ?>
                    <li class="list-group-item">
                        <div class="displayinline stfirstdiv pl-65"><?php echo $fee_type_value->type . " (" . $fee_type_value->code . ")" ?></div>
                    <small class="due_date"><i class="fa fa-calendar"></i> <?php
echo $this->customlib->dateformat($fee_type_value->due_date);
            ?></small>
                <div class="tools">
                       <?php echo amountFormat($fee_type_value->amount); 
                       
                       ?>
                                  </div>
                    </li> 
                  <?php }
            }
}
        ?>
         </ul>
      </div>
    </div>
  </div>
                                            </td>
                                          </tr> <?php }
}
    ?>
    </tbody>
</table>
</div>
    <?php
}
?>
                                                        </div>
                                                    </div>
                                                </div>