<?php 
if(!empty($result)){
?>

<div class="table-responsive">    
    <table class="table table-strippedn table-hover mb10">
        <thead>
            <tr class="active">
                <th><?php echo $this->lang->line('term'); ?></th> 
                <th colspan="2"><?php echo $this->lang->line('exam_name'); ?></th>              
                <th><?php echo $this->lang->line('weightage'); ?></th>           
                <th class="text-center"><?php echo $this->lang->line('grading'); ?></th>
                <th class="text-center"><?php echo $this->lang->line('teacher_remark'); ?></th>  
                <th class="text-center">Exclude From Total</th>  
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach($result as $key=>$value){
                  if($templatedata['marksheet_type'] == "without_term"){
  ?>
            <tr>                
                <th><?php echo $value['name']; ?></th>
                <td colspan="5"></td>
            </tr>
        <?php 
        foreach ($value['exam'] as $examkey => $examvalue) { 
            ?>
            <tr>
                <td></td>
                <td >
                    <input type="checkbox" class="checkbox checkBoxExam" <?php if(isset($templatedata['exam_without_term']) && array_key_exists($examvalue['id'],$templatedata['exam_without_term'])){ echo "checked"; }?>  name="exam[<?php //echo $examvalue['id'];?>]" value="<?php echo $examvalue['id'];?>"> 
                </td>
                <td ><?php echo $examvalue['name'];?></td>               
                <td>
                    <input type="number" class="form-control"  min="0" max="100" value="<?php if(isset($templatedata['exam_without_term']) && array_key_exists($examvalue['id'],$templatedata['exam_without_term'])){ echo $templatedata['exam_without_termweigtage'][$examvalue['id']]; }?>" name="weightage[<?php echo $examvalue['id'];?>]" >
                </td>           
                <td >
                    <div class="d-flex justify-content-center">
                        <input type="radio" class="checkbox checkBoxExam" <?php if($examvalue['id']==$templatedata['gradeexam_id']){ echo "checked";} ?> name="grading" value="<?php echo $examvalue['id'];?>"> 
                    </div>    
                </td>
                <td >
                    <div class="d-flex justify-content-center">
                        <input type="radio" class="checkbox checkBoxExam" <?php if($examvalue['id']==$templatedata['remarkexam_id']){ echo "checked";} ?> name="teacher_remark" value="<?php echo $examvalue['id'];?>"> 
                    </div>  
                </td>
                <td >
                    <div class="d-flex justify-content-center">
                        <input type="radio" class="checkbox checkBoxExam" name="exclude_total[<?php echo $examvalue['id'];?>]" value="1" <?php if ($templatedata['exam_without_term_exclude_total'][$examvalue['id']] == 1) { echo 'checked'; } ?>> 
                    </div>    
                </td>
            </tr>
            <?php
                 $ctw = $templatedata['exam_without_termcombinedweigtage'][$examvalue['id']];
            }
            
                  }else{
                      ?>
            <tr>                
                <th><?php echo $value['name']; ?></th>
                <td colspan="5"></td>
            </tr>
            
        <?php 
        foreach ($value['exam'] as $examkey => $examvalue) { 
            ?>
            <tr>
                <td></td>
                <td >
                    <input type="checkbox" class="checkbox checkBoxExam" name="exam[<?php //echo $examvalue['id'];?>]" value="<?php echo $examvalue['id'];?>"> 
                </td>
                <td ><?php echo $examvalue['name'];?></td>               
                <td class="width150">
                    <input type="number" class="form-control"  min="0" max="100" value="" name="weightage[<?php echo $examvalue['id'];?>]" >
                </td>               
                <td >
                    <div class="d-flex justify-content-center">
                        <input type="radio" class="checkbox checkBoxExam" <?php if($examvalue['id']==$templatedata['gradeexam_id']){ echo "checked";} ?> name="grading" value="<?php echo $examvalue['id'];?>"> 
                    </div>    
                </td>
                <td >
                    <div class="d-flex justify-content-center">
                        <input type="radio" class="checkbox checkBoxExam" <?php if($examvalue['id']==$templatedata['remarkexam_id']){ echo "checked";} ?> name="teacher_remark" value="<?php echo $examvalue['id'];?>"> 
                    </div>    
                </td>
                <td >
                    <div class="d-flex justify-content-center">
                        <input type="radio" class="checkbox checkBoxExam" name="exclude_total[<?php echo $examvalue['id'];?>]" value="1"> 
                    </div>    
                </td>
            </tr>
            <?php
             }
                  }      
        }
    ?>
    <?php echo $ctw; ?>
        <tr>
            <td colspan="6">
                <label>Combined Weightage</label>
                <input type="number" class="form-control w-100"  min="0" max="100" value="<?= $cwinfo->cw; ?>" name="combined_weightage" >
            </td> 
        </tr>
        
        </tbody>
    </table> 
</div>    
<?php
}else{
    ?>
    <div class="alert alert-info"><?php echo $this->lang->line('no_record_found'); ?></div>
    <?php
}
?>