<?php
$student_allover_term_rank = [];
$subject_term_rank = [];
foreach ($result as $student_key => $student_value) {
  $grand_total_marks           = 0;
  $grand_total_term_percentage = 0;
  $grand_total_gain_marks      = 0;
  $terms_weight_array          = [];

  foreach ($subject_array as $subject_array_key => $subject_array_value) {
    $subject_grand_total           = 0;
    $subject_total_term_percentage = 0;

    foreach ($exam_term_exam_assessment as $assess_key => $assess_value) {
      $subject_total         = 0;
      $subject_maximum_total = 0;

      foreach ($assess_value['exams'] as $exam_key => $exam_value) {
        foreach ($exam_value['exam_assessments'] as $exam_assement_key => $exam_assement_value) {
          $subject_marks_array = getSubjectData_template($student_value['terms'], $assess_value['cbse_term_id'], $exam_key, $subject_array_key, $exam_assement_value['cbse_exam_assessment_type_id']);
          if (!$subject_marks_array['marks'] <= 0 || $subject_marks_array['marks'] == "N/A") {

            $subject_total += ($subject_marks_array['marks'] == "N/A") ? 0 : $subject_marks_array['marks'];
            $subject_maximum_total += $subject_marks_array['maximum_marks'];
          } else {

            $subject_total += 0;
            $subject_maximum_total += 0;
          }
        }
      }

      if ($subject_maximum_total <= 0 && $subject_total <= 0) {
        $subject_maximum_total = 100;
        $subject_total         = 100;
      }

      $subject_percentage = getPercent($subject_maximum_total, $subject_total);
      $total_term_ = (($subject_total * 100) / $subject_maximum_total);
      $subject_total_term_percentage += ($total_term_ * ($assess_value['cbse_term_weight'] / 100));
      $grand_total_term_percentage += ($total_term_ * ($assess_value['cbse_term_weight'] / 100));
      $grand_total_gain_marks += $subject_total;
      $grand_total_marks += $subject_maximum_total;
    }

    //===============
    if (!array_key_exists($subject_array_key, $subject_term_rank)) {
      $subject_term_rank[$subject_array_key] = [];
    }

    $subject_term_rank[$subject_array_key][] = [
      'student_session_id' => $student_value['student_session_id'],
      'rank_percentage'    => $subject_total_term_percentage,
      'rank' => 0

    ];
    //==============
  }

  $overall_percentage = getPercent((count($subject_array) * 100), $grand_total_term_percentage);

  $student_allover_term_rank[$student_value['student_session_id']] = [
    'student_session_id' => $student_value['student_session_id'],
    'firstname' => $student_value['firstname'],
    'rank_percentage' => $overall_percentage,
    'rank' => 0,
  ];
  
$stuSesId = $student_value['student_session_id'];
}

//-=====================start term calculation Rank=============

$rank_overall_term_percentage_keys = array_column($student_allover_term_rank, 'rank_percentage');
$rank_overall_term_student_name_keys = array_column($student_allover_term_rank, 'firstname');
array_multisort($rank_overall_term_percentage_keys, SORT_DESC, $rank_overall_term_student_name_keys, SORT_ASC, $student_allover_term_rank);

$term_rank_allover_list = unique_array($student_allover_term_rank, "rank_percentage");


foreach ($student_allover_term_rank as $term_rank_key => $term_rank_value) {
  $student_allover_term_rank[$term_rank_key]['rank'] = array_search($term_rank_value['rank_percentage'], $term_rank_allover_list);
}


//-=====================end term calculation Rank=============
//-=====================start subject term calculation Rank=============


foreach ($subject_term_rank as $subject_term_key => $subject_term_value) {

  $rank_overall_subject = array_column($subject_term_rank[$subject_term_key], 'rank_percentage');

  array_multisort($rank_overall_subject, SORT_DESC, $subject_term_rank[$subject_term_key]);

  $subject_rank_allover_list = unique_array($subject_term_rank[$subject_term_key], "rank_percentage");

  foreach ($subject_term_rank[$subject_term_key] as $subject_rank_key => $subject_rank_value) {

    $subject_term_rank[$subject_term_key][$subject_rank_key]['rank'] = array_search($subject_rank_value['rank_percentage'], $subject_rank_allover_list);
  }
}

//-=====================end subject term calculation Rank=============

?>

<?php
$count_result = count($result);
$student_increment = 0;
foreach ($result as $student_key => $student_value) {
  $student_increment++;
  $grand_total_marks = 0;
  $grand_total_term_percentage = 0;
  $grand_total_gain_marks = 0;
  $terms_weight_array = [];
  $total_total_working_day = 0;
  $total_present_day = 0;
  $isPass = false;
  
  $incidents      = $this->cbseexam_exam_model->student_behaviour_info($csession_id, $examInfo->session_id);
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

  <body>
    <div style="width: 100%; padding-left: 20px; padding-right: 20px">
      <?php

      if ($template['header_image'] != "") {
      ?>

        <img width="100%" max-width="100%" src="<?php echo base_url("/uploads/cbseexam/template/header_image/" . $template['header_image']) ?>" />

      <?php
      }
      ?>
      <table cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td valign="top">
            <table cellpadding="0" cellspacing="0" width="100%">
               <?php  if ($template['exam_session']) {  ?>
              <tr>
                <td valign="top" style="padding-bottom: 0px; padding-top: 5px; width: 100%;font-weight: bold; text-align: center; font-size:25px;">
                  <?php echo $this->lang->line('academic_session'); ?> : <?php echo $current_setting['session']; ?>

                </td>
              </tr>
               <?php
      }
      ?>
              <tr>
                <td valign="top" style="padding-bottom: 20px; padding-top: 2px; width: 100%; font-weight: bold; text-align: center; font-size:20px;">
                  <?php echo $this->lang->line('report_card'); ?> : <?= $student_value['class']; ?>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td valign="top">
            <table cellpadding="0" cellspacing="0" width="100%">
              <tr>
                <td valign="top" width="80%">
                  <table cellpadding="0" cellspacing="0" width="100%">
                          <tr>
                            <?php

                            if ($template['is_roll_no']) {
                            ?>
                              <td valign="top" style="font-weight: bold; padding-bottom: 2px"><?php echo $this->lang->line('roll_no'); ?></td>
                              <td valign="top">: <?php echo $student_value['roll_no']; ?></td>
                            <?php
                            }
                            ?>
                            <?php
                            if ($template['is_admission_no']) {
                            ?>
                              <td valign="top" style="font-weight: bold; padding-bottom: 2px" colspan="2"><?php echo $this->lang->line('admission_no'); ?>. : <?php echo $student_value['admission_no']; ?></td>
                            <?php
                            }
                            ?>
                          </tr>
                          <tr>
                            <?php

                            if ($template['is_name']) {
                            ?>
                              <td valign="top" style="font-weight: bold; padding-bottom: 2px"><?php echo $this->lang->line('students_name'); ?></td>
                              <td valign="top">: <?php echo   $this->customlib->getFullName($student_value['firstname'], $student_value['middlename'], $student_value['lastname'], $sch_setting->middlename, $sch_setting->lastname); ?></td>

                            <?php
                            }
                            ?>
                            
                            
                            <?php
                      if ($template['is_photo']) {
                      ?>

                        <td valign="top" align="right" width="20%" rowspan="5" colspan="2">
                          <?php

                          if (!empty($student_value["student_image"])) {
                            $student_image = base_url() . $student_value["student_image"];
                          } else {
                            if ($student_value['gender'] == 'Female') {
                              $student_image = base_url() . "uploads/student_images/default_female.jpg";
                            } elseif ($student_value['gender'] == 'Male') {
                              $student_image = base_url() . "uploads/student_images/default_male.jpg";
                            }
                          }
                          ?>
                          <img src="<?php echo $student_image; ?>" width="85" height="100" style="border:1px solid #000">
                        </td>
                      <?php
                      }
                      ?>
                          </tr>
                          <tr>
                              
                            <?php

                            if ($template['is_mother_name']) {
                            ?>
                              <td valign="top" style="font-weight: bold; padding-bottom: 2px"><?php echo $this->lang->line('mothers_name'); ?></td>
                              <td valign="top">: <?php echo $student_value['mother_name']; ?></td>
                            <?php
                            }
                            ?>

                          </tr>
                          <tr>
                             <?php

                            if ($template['is_father_name']) {
                            ?>
                              <td valign="top" style="font-weight: bold; padding-bottom: 2px"><?php echo $this->lang->line('fathers_name'); ?></td>
                              <td valign="top">: <?php echo $student_value['father_name']; ?> </td>

                            <?php
                            }
                            ?>
                            
                          </tr>
                          <tr>
                              
                            <?php
                            if ($template['is_dob']) {
                            ?>
                              <td valign="top" style="font-weight: bold; padding-bottom: 2px"><?php echo $this->lang->line('date_of_birth'); ?></td>
                              <td valign="top">: <?php echo $this->customlib->dateformat($student_value['dob']); ?></td>

                            <?php
                            }
                            ?>
                          </tr>
                          <tr>
                              
                            <?php

                            if ($template['is_class'] && $template['is_section']) {
                            ?>
                              <td valign="top" style="font-weight: bold; padding-bottom: 2px"><?php echo $this->lang->line('class_section'); ?></td>
                              <td valign="top">: <?php echo $student_value['class'] . " (" . $student_value['section'] . ")"; ?></td>
                            <?php
                            } else if ($template['is_class']) {
                            ?>
                              <td valign="top" style="font-weight: bold; padding-bottom: 2px"><?php echo $this->lang->line('class_section'); ?></td>
                              <td valign="top">: <?php echo $student_value['class']; ?></td>
                            <?php
                            } else if ($template['is_section']) {
                            ?>
                              <td valign="top" style="font-weight: bold; padding-bottom: 2px"><?php echo $this->lang->line('class_section'); ?></td>
                              <td valign="top">: <?php echo $student_value['section']; ?></td>
                            <?php
                            }
                            ?>
                            
                          </tr>
                        </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>

        <tr>
          <td valign="top" style="height:10px"></td>
        </tr>
        <tr>
          <td valign="top">
            <table cellpadding="0" cellspacing="0" width="100%" class="denifittable">
              <thead>
                <tr style="background-color:#ffffff !important">
                  <td valign="middle" class="text-center"><?php echo $this->lang->line('scholastic_areas'); ?>
            
                  </td>

                  <?php
                  $nasmts               = 0;
                  $combined_term_names  = [];
                  foreach ($exam_term_exam_assessment as $assess_key => $assess_value) {
                      
                      $tasmts = 0;
                      foreach ($assess_value['exams'] as $exam_key => $exam_value) {
                          foreach ($exam_value['exam_assessments'] as $exam_assement_key => $exam_assement_value) {
                                $tasmts += $exam_assement_value['maximum_marks'];
                          }
                      }
                    
                    $term_colspan = count($assess_value['term_total_assessments']);
                    $combined_term_names[] = $assess_value['cbse_term_name'];
                    $terms_weight_array[] = $assess_value['cbse_term_name'] . " (" . $assess_value['cbse_term_weight'] . ")";
                  ?>
                    <td valign="middle" class="text-center" colspan="<?php echo $term_colspan + 1; ?>"><?php 
                    
                    $cbse_term_code = ($assess_value['cbse_term_code'] != "") ? " (" . $assess_value['cbse_term_code'] . ")" : "";
                    
                    echo $assess_value['cbse_term_name'] .' ('.$tasmts.')'; ?>
                    
                    

                    </td>

                  <?php
                    $nasmts                       += $tasmts;
                  }
                    $combined_term_names_string   = implode(' + ', $combined_term_names);
                  ?>
                  <td valign="middle" class="text-center" colspan="2"><?php echo $combined_term_names_string.' ('.$nasmts.')'; ?></td>
                </tr>
                <tr style="background-color:#ffffff !important">
                  <td valign="middle" class="text-center"><?php echo $this->lang->line('subject'); ?></td>

                  <?php
                  $oasmts = 0;
                  foreach ($exam_term_exam_assessment as $assess_key => $assess_value) {
                    $easmts = 0;
                    foreach ($assess_value['exams'] as $exam_key => $exam_value) {
                      $total_total_working_day += ($exam_value['total_working_days']);

                      if (array_key_exists($assess_value['cbse_term_id'], $student_value['terms'])) {

                        if (array_key_exists($exam_value['cbse_exam_id'], $student_value['terms'][$assess_value['cbse_term_id']]['exams'])) {
                          $total_present_day += ($student_value['terms'][$assess_value['cbse_term_id']]['exams'][$exam_value['cbse_exam_id']]['total_present_days']);
                        }
                      }
                      
                      $asmts = 0;
                      foreach ($exam_value['exam_assessments'] as $exam_assement_key => $exam_assement_value) {
                            $asmts += $exam_assement_value['maximum_marks'];
                      }
                    $easmts += $asmts;
                  ?>
                      <td colspan="<?php echo count($exam_value['exam_assessments']); ?>" valign="top" class="text-center"><?php echo $exam_value['exam_name'].'<br>('.$asmts.')'; ?> </td>
                    <?php
                    }
                    ?>
                    <td valign="middle" class="text-center"><?php echo $this->lang->line('grade').'<br>('.$easmts.')'; ?></td>
                  <?php

                  }
                  ?>
                  <td valign="middle" class="text-center" colspan="2">Overall Grade (<?= $nasmts; ?>)</td>
                </tr>
                <?php
                $stutm = 0;
                $stumm = 0;
                foreach ($subject_array as $subject_array_key => $subject_array_value) {
                  $subexp = explode("-",$subject_array_value);
                  
                    $parts          = explode("(", $subject_array_value);
                    $code_part      = explode(")", $parts[1]);
                    $subject_code   = $code_part[0];

                  $scolasticarea = $subexp[1];
                  if ($scolasticarea == 1) {
                  $subject_grand_total = 0;
                  $subject_total_term_percentage = 0;
                ?>
                  <tr>

                    <td valign="top"><?php echo $parts[0]; ?></td>
                    <?php
                    $nstmarks   = 0;
                    $nsmmarks   = 0;
                    $ascs       = 0;
                    foreach ($exam_term_exam_assessment as $assess_key => $assess_value) {
                      $subject_total = 0;
                      $subject_maximum_total = 0;
                      $exam_total_null = false;
                      
                      foreach ($assess_value['exams'] as $exam_key => $exam_value) {
                        
                        foreach ($exam_value['exam_assessments'] as $exam_assement_key => $exam_assement_value) {
                        $ascs     += 1;
                    ?>
                          <td valign="top" class="text-center"><?php


                                                                $subject_marks_array = getSubjectData_template($student_value['terms'], $assess_value['cbse_term_id'], $exam_key, $subject_array_key, $exam_assement_value['cbse_exam_assessment_type_id']);

                                                                if ($subject_marks_array['cbse_exam_timetable_assessment_type_id']) {
                                                                  if (!$subject_marks_array['marks'] <= 0 ||  $subject_marks_array['marks'] == "N/A") {

                                                                    $smarks = ($subject_marks_array['is_absent']) ? $this->lang->line('abs') : $subject_marks_array['marks'];
                                                                    $sprcnt = getPercent($exam_assement_value['maximum_marks'], $smarks);
                                                                     echo getGrade($exam_grades, $sprcnt);
                                                                    
                                                                    $subject_total += ($subject_marks_array['marks'] == "N/A") ? 0 : $subject_marks_array['marks'];
                                                                    $subject_maximum_total += $subject_marks_array['maximum_marks'];
                                                                  } else {
                                                                    echo "-";
                                                                    $subject_total += 0;
                                                                    $subject_maximum_total += 0;
                                                                  }
                                                                }else {
                                                                  echo "<b>xx</b>";
                                                                }
                                                              
                                                                ?>

                          </td>
                      <?php
                        }
                      }
                      ?>
                      <td valign="top" class="text-center">

                        <?php

                        if ($subject_maximum_total <= 0 && $subject_total <= 0) {

                          $subject_maximum_total = 100;
                          $subject_total = 100;
                        }

                        $subject_percentage = getPercent($subject_maximum_total, $subject_total);

                        $total_term_ = (($subject_total * 100) / $subject_maximum_total);
                        $subject_total_term_percentage += ($total_term_ * ($assess_value['cbse_term_weight'] / 100));
                        $grand_total_term_percentage += ($total_term_ * ($assess_value['cbse_term_weight'] / 100));
                        
                        

                        echo getGrade($exam_grades, $subject_percentage);

                        ?>
                      </td>

                    <?php
                        $nstmarks += $subject_total;
                        $nsmmarks += $subject_maximum_total;
                      $grand_total_gain_marks += $subject_total;
                      $grand_total_marks += $subject_maximum_total;
                      
                      $passThreshold = ($nsmmarks * 33) / 100;
                      $isPass = ($nstmarks >= $passThreshold);
                    }
                    ?>
                    <td valign="top" class="text-center" colspan="2">
                        <?php
                        if (!$isPass) {
                            echo 'E';
                        } else {
                            $npercent = getPercent($nsmmarks, $nstmarks);
                            echo getGrade($exam_grades, $npercent);
                        }
                        ?>
                    </td>
                  </tr>
                <?php
                $stutm += $nstmarks;
                $stumm += $nsmmarks;
                

$subjects_data[] = [
    'subject_name' => $subject_code,
    'subject_total_bar' => $subject_total,
    'subject_max_total_bar' => $subject_maximum_total
];


$width              = 450;
$height             = 250;
$image              = imagecreatetruecolor($width, $height);
$background_color   = imagecolorallocate($image, 255, 255, 255);
$bar_color          = imagecolorallocate($image, 0, 0, 0);
$text_color         = imagecolorallocate($image, 0, 0, 0);
$grid_color         = imagecolorallocate($image, 200, 200, 200);

imagefill($image, 0, 0, $background_color);
$y_interval         = 10;
for ($i = 1; $i <= 10; $i++) {
    $y = $height - ($i * ($height - 100) / 10) - 30;
    imageline($image, 50, $y, $width - 20, $y, $grid_color);
    imagestring($image, 3, 10, $y - 5, (string)($i * 10), $text_color);
}
$bar_width          = 50;
$x_position         = 70;
$max_marks          = max(array_column($subjects_data, 'subject_max_total_bar'));

foreach ($subjects_data as $subject) {
    $subject_name   = $subject['subject_name'];
    $subject_total_bar  = $subject['subject_total_bar'];
    $bar_height     = ($subject_total_bar / $max_marks) * ($height - 100);
    imagefilledrectangle(
        $image,
        $x_position,
        $height - $bar_height - 30,
        $x_position + $bar_width,
        $height - 30,
        $bar_color
    );
    imagestring($image, 3, $x_position + 5, $height - 20, $subject_name, $text_color);
    imagestring($image, 3, $x_position + 10, $height - $bar_height - 45, (string)$subject_total_bar, $text_color);
    $x_position += $bar_width + 20;
}
imageline($image, 50, $height - 30, 50, 30, $text_color); // Y-axis
imageline($image, 50, $height - 30, $width - 20, $height - 30, $text_color); // X-axis

$image_path = 'uploads/examgraph/temp'.$templateId.'-'.$student_value['admission_no'].'.png';
imagepng($image, $image_path);
imagedestroy($image);



} }                
?>
                <tr>
                    <td><b>Overall Grade</b></td>
                    <td colspan="<?= $ascs + 4; ?>" style="text-align:right; padding-right:100px">
                        <?php
                            $snpercent = getPercent($stumm, $stutm);
                            echo getGrade($exam_grades, $snpercent);
                            $exam_grade_remark      = getGradeRemark($exam_grades,$snpercent)
                        ?>
                    </td>
                </tr>
              </thead>
            </table>
          </td>
        </tr>
        
        <tr>
          <td valign="top" style="height:20px"></td>
        </tr>
        
        <tr>
          <td valign="top">
            <table cellpadding="0" cellspacing="0" width="100%" class="denifittable" style="border-bottom: 0px;">
              <thead>
                 <tr style="background-color:#ffffff !important">
                     <th colspan="2" style="text-align:left !important">Co-Scholastic Area : [on a 3-point (A-C) Grading Scale]</th>
                 </tr>
              </thead>
              <tbody>

                <?php
                $observations = $this->cbseexam_exam_model->observation_parameters_by_ssid($stuSesId);
                foreach ($observations as $sobserv) {
                    $oscore = $this->cbseexam_exam_model->observation_parameters_score_by_ssid_param($stuSesId, $sobserv->cbse_observation_parameter_id);
                    if ($oscore->obtain_marks >= 8 && $oscore->obtain_marks <= 10) {
                        $og = 'A';
                    } elseif($oscore->obtain_marks >= 5 && $oscore->obtain_marks <= 7) {
                        $og = 'B';
                    } else {
                        $og = 'C';
                    }
                ?>
                    <tr>
                      <td valign="top" style="width:70% !important"><?= $sobserv->name; ?></td>
                      <td valign="top" style="width:30% !important"><?= $og; ?></td>

                    </tr>
                <?php }?>
                    
                    <tr style="border:none !important">
                        <td valign="top" style="height:20px; border:none !important;border:hidden !important" colspan="2"></td>
                    </tr>
                    
                    <tr style="background-color:#ffffff !important">
                        <th colspan="2" style="text-align:left !important">Discipline : [on a 3-point (A-C) Grading Scale]</th>
                    </tr>
                    <?php
                    $incidentscore      = 0;
                    $total_incidents    = count($incidents);
                    foreach ($incidents as $incident) {
                        $incidentscore += $incident->point;
                    }
                
                    if ($total_incidents > 0) {
                        $average_score      = $incidentscore / $total_incidents;
                        $normalized_score   = max(0, min(10, round(($average_score / 10) * 10)));
                    } else {
                        $normalized_score   = 0;
                    }
                
                    if ($normalized_score >= 8 && $normalized_score <= 10) {
                        $ig = 'A';
                    } elseif($normalized_score >= 5 && $normalized_score <= 7) {
                        $ig = 'B';
                    } else {
                        $ig = 'C';
                    }
                ?>
                    <tr>
                      <td valign="top" style="width:70% !important">Discipline (Punctuality, Cleanliness, Social Behaviour)</td>
                      <td valign="top" style="width:30% !important"><?= $ig; ?></td>

                    </tr>
                    
                    
              </tbody>
            </table>
          </td>
        </tr>
        
        
        

        <tr>
          <td valign="top" style="height:20px"></td>
        </tr>
        <tr>
          <td>
            <table cellpadding="0" cellspacing="0" width="100%" class="denifittable" style="padding-bottom: 10px;">
              <tbody>
                <tr style="background-color:#ffffff !important">
                  <td valign="middle" class="text-center" rowspan="2"><b><?php echo $this->lang->line('attendance_overall'); ?></b></td>
                  <td valign="middle" class="text-center"><b><?php echo $this->lang->line('total_working_days'); ?></b></td>
                  <td valign="middle" class="text-center"><b><?php echo $this->lang->line('days_present'); ?></b></td>
                  <td valign="middle" class="text-center"><b><?php echo $this->lang->line('attendance_percentage'); ?></b></td>
                </tr>
                <tr>

                  <td valign="middle" class="text-center"><?php echo $total_total_working_day; ?></td>
                  <td valign="middle" class="text-center"><?php echo $total_present_day; ?></td>
                  <td valign="middle" class="text-center"><?php echo getPercent($total_total_working_day, $total_present_day); ?></td>
                </tr> 
              </tbody>
            </table>
          </td> 
        </tr>
        
        <?php  if ($template['is_remark']) {  ?>
        <tr>
        <tr>
          <td valign="top" style="height:15px"></td>
        </tr>
        <tr>
        <td>
            <table cellpadding="0" cellspacing="0" width="100%" style="padding-bottom: 10px;">
              <tbody>
                <tr style="border:none; border:hidden">
                    <td style="border:none; border:hidden" colspan="3"><b>Class Teacher Remark : <?php echo $exam_grade_remark; ?></b></td>
                    <td style="border:none; border:hidden" rowspan="3"><img src="<?= base_url().'uploads/examgraph/temp'.$templateId.'-'.$student_value['admission_no'].'.png'; ?>"></td>
                </tr>
                <tr style="border:none; border:hidden">
                    <td colspan="3"><b>Promoted to Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php if ($isPass) { echo $examInfo->promote_class; } else { echo 'EIOP'; } ?></b></td>
                </tr>
                <tr style="border:none; border:hidden">
                    <td colspan="3"><b>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                </tr>
              </tbody>
            </table>    
        </td>
        </tr>
        </tr>
        <?php } ?>
        <!-- //====================== -->
        
        <tr>
          <td valign="top" style="height:50px"></td>
        </tr>
        <tr>
          <td valign="top" width="100%" align="center">
            <table cellpadding="0" cellspacing="0" width="100%" style="margin-bottom:10px;">
              <tr>
                <td valign="top" width="33.3%" class="signature text-center"><b>Class Teacher</b></td>
                <td valign="top" width="33.3%" class="signature text-center"><b>Principal</b></td>
                <td valign="top" width="33.3%" class="signature text-center"><b>Parent</b></td>
              </tr>
            </table>
          </td>
        </tr>
        
        <tr>
          <td valign="top" style="height:20px"></td>
        </tr>
        <tr>
          <td valign="top" style="height:20px"></td>
        </tr>

        <tr>
          <td valign="top" style="margin-bottom:5px; padding-top: 10px; line-height: normal;">
            <?php echo $template['content_footer']; ?>
          </td>
        </tr>
      </table>
    </div>
  </body>

  </html>
<?php
  if ($student_increment < $count_result) {
    echo "<div style='page-break-after:always'></div>";
  }
}
?>
<?php

function searchSubjectRank($array, $subject_id)
{

  foreach ($array as $k => $val) {

    if ($k == $subject_id) {
      return $val;
    }
  }
  return null;
}


function getSubjectData_template($term_array, $find_term, $find_exam, $find_subject_id, $find_cbse_exam_assessment_type_id)
{

  $return_array = [
    'maximum_marks' => "",
    'marks' => "",
    'note' => "",
    'is_absent' => "",
    'cbse_exam_timetable_assessment_type_id' => false,
  ];

  if (!empty($term_array)) {

    if (array_key_exists($find_term, $term_array)) {

      if (array_key_exists($find_exam, $term_array[$find_term]['exams'])) {

        if (array_key_exists($find_subject_id, $term_array[$find_term]['exams'][$find_exam]['subjects'])) {
          $result_array = ($term_array[$find_term]['exams'][$find_exam]['subjects'][$find_subject_id]['exam_assessments'][$find_cbse_exam_assessment_type_id]);

          if (!is_null($result_array['cbse_exam_timetable_assessment_type_id'])) {
            $return_array = [
              'maximum_marks' => $result_array['maximum_marks'],
              'marks' => is_null($result_array['marks']) ? "N/A" : $result_array['marks'],
              'note' => $result_array['note'],
              'is_absent' => $result_array['is_absent'],
              'cbse_exam_timetable_assessment_type_id' => true,
            ];
          }
      
        }
      }
    }
  }

  return $return_array;
}

function getGrade($grade_array, $Percentage)
{

  if (!empty($grade_array)) {
    foreach ($grade_array as $grade_key => $grade_value) {
      if ($grade_value->minimum_percentage <= $Percentage) {
        return $grade_value->name;
        break;
      } elseif ($grade_value->maximum_percentage <= $Percentage && $grade_value->minimum_percentage >= $Percentage) {

        return $grade_value->name;
        break;
      }
    }
  }
  return "-";
}
function getGradeRemark($grade_array, $Percentage)
{

  if (!empty($grade_array->grades)) {
    foreach ($grade_array->grades as $grade_key => $grade_value) {

      if ($grade_value->minimum_percentage <= $Percentage) {
        return $grade_value->description;
        break;
      } elseif (($grade_value->minimum_percentage >= $Percentage && $grade_value->maximum_percentage <= $Percentage)) {

        return $grade_value->description;
        break;
      }
    }
  }
  return "-";
}

function getStudentObservation($student_observations, $student_session_id, $cbse_term_id, $parameter_id, $observation_id)
{

  if (!empty($student_observations)) {
    if (array_key_exists($student_session_id, $student_observations)) {

      if (array_key_exists($cbse_term_id, $student_observations[$student_session_id]['terms'])) {

        if (array_key_exists($observation_id, $student_observations[$student_session_id]['terms'][$cbse_term_id]['observations'])) {

          if (array_key_exists($parameter_id, $student_observations[$student_session_id]['terms'][$cbse_term_id]['observations'][$observation_id])) {

            return $student_observations[$student_session_id]['terms'][$cbse_term_id]['observations'][$observation_id][$parameter_id];
          }
        }
      }
    }
  }
  return [];
}

?>