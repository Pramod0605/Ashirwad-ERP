<link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/style-main.css">
<?php
$student_allover_rank = [];
$subject_rank = [];
foreach ($result as $student_key => $student_value) {
  $total_max_marks = 0;
  $total_gain_marks = 0;

  foreach ($student_value['term']['exams'] as $student_exam_key => $student_exam_value) {
    foreach ($student_exam_value['subjects'] as $subject_key => $subject_value) {
      $subject_total = 0;
      $subject_max_total = 0;

      foreach ($subject_value['exam_assessments'] as $assessment_key => $assessment_value) {
        $subject_total += $assessment_value['marks'];
        $subject_max_total += $assessment_value['maximum_marks'];

        $total_gain_marks += $assessment_value['marks'];
        $total_max_marks += $assessment_value['maximum_marks'];
      }
      if (!array_key_exists($subject_key, $subject_rank)) {
        $subject_rank[$subject_key] = [];
      }

      $subject_rank[$subject_key][] = [
        'student_session_id' => $student_value['student_session_id'],
        'rank_percentage'    => $subject_total,
        'rank' => 0

      ];
    }
  }

  $exam_percentage = getPercent($total_max_marks, $total_gain_marks);

  $student_allover_rank[$student_value['student_session_id']] = [
    'student_session_id' => $student_value['student_session_id'],
    'firstname' => $student_value['firstname'],
    'rank_percentage' => $exam_percentage,
    'rank' => 0,
  ];
}

//-=====================start term calculation Rank=============

$rank_overall_percentage_keys = array_column($student_allover_rank, 'rank_percentage');

array_multisort($rank_overall_percentage_keys, SORT_DESC, $student_allover_rank);

$term_rank_allover_list = unique_array($student_allover_rank, "rank_percentage");

foreach ($student_allover_rank as $term_rank_key => $term_rank_value) {

  $student_allover_rank[$term_rank_key]['rank'] = array_search($term_rank_value['rank_percentage'], $term_rank_allover_list);
}

//-=====================end term calculation Rank=============

foreach ($subject_rank as $subject_term_key => $subject_term_value) {

  $rank_overall_subject = array_column($subject_rank[$subject_term_key], 'rank_percentage');

  array_multisort($rank_overall_subject, SORT_DESC, $subject_rank[$subject_term_key]);

  $subject_rank_allover_list = unique_array($subject_rank[$subject_term_key], "rank_percentage");

  foreach ($subject_rank[$subject_term_key] as $subject_rank_key => $subject_rank_value) {

    $subject_rank[$subject_term_key][$subject_rank_key]['rank'] = array_search($subject_rank_value['rank_percentage'], $subject_rank_allover_list);
  }
}
?>

<?php

$count_result = count($result);
$student_increment = 0;

$atcount1 = 0;
$atcount2 = 0;
foreach ($exam_assessments_array as $subject_assesment_key => $subject_assesment_value) {
    if ($subject_assesment_value->scholastic_area == 1) {
        $atcount1 += 1;
    }
    if ($subject_assesment_value->scholastic_area == 2) {
        $atcount2 += 1;
    }
}
$atcountcs1 = $atcount1 +2;
$atcountcs2 = $atcount2 +2;



foreach ($result as $student_key => $student_value) {
  $student_increment++;
  $total_max_marks = 0;
  $total_gain_marks = 0;
  $isPass = false;  
  $isFail = false;  
$observations   = $this->cbseexam_exam_model->observation_parameters_by_tid_ssid($examInfo->cbse_term_id, $student_value['student_session_id']);
$incidents      = $this->cbseexam_exam_model->student_behaviour_info($student_value['student_id'], $examInfo->session_id);
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
  </head>

  <body>
    <div style="width: 100%; padding-left: 40px; padding-right: 40px">
      <?php

      if ($template['header_image'] != "") {
      ?>

        <img width="100%" max-width="100%" style="height:250px !important" max-height="250px" src="<?php echo base_url("/uploads/cbseexam/template/header_image/" . $template['header_image']) ?>" />

      <?php
      }
      ?>
      <table cellpadding="0" cellspacing="0" width="100%" >
        <tr>
          <td valign="top">
            <table cellpadding="0" cellspacing="0" width="100%">
              
              <?php  if ($template['exam_session']) {  ?>
              <tr>
                <td valign="top" style="font-family: Verdana !important;padding-bottom: 0px; padding-top: 5px; width: 100%;font-weight: bold; text-align: center; font-size:20px;">
                  <?php echo $this->lang->line('academic_session'); ?> : <?php echo $current_setting['session']; ?>

                </td>
              </tr>
               <?php
      }
      ?>
              <tr>
                <td valign="top" style="padding-bottom: 20px; padding-top: 2px; width: 100%; font-weight: normal; text-align: center; font-size:15px;">
                  Report Card<?php //echo $this->lang->line('report_card'); ?> : <?= $student_value['class']; ?>
                </td>
              </tr>
              
            </table>
          </td>
        </tr>
        <tr>
          <td valign="top">
            <table cellpadding="0" cellspacing="0" width="100%" style="font-family: 'Verdana' !important;">
              <tr>
                <td valign="top">
                  <table cellpadding="0" cellspacing="0" width="100%" style="font-family: 'Verdana' !important;">
                    <tr>
                      <td valign="top" width="80%">
                        <table cellpadding="0" cellspacing="0" width="100%" style="font-family: 'Verdana' !important;">
                          <tr>
                            <?php

                            if ($template['is_roll_no']) {
                            ?>
                              <td valign="top" style="width:15%;font-weight: bold; padding-bottom: 2px"><?php echo $this->lang->line('roll_no'); ?></td>
                              <td valign="top">: <?php echo $student_value['roll_no']; ?></td>
                            <?php
                            }
                            ?>
                            <?php
                            if ($template['is_admission_no']) {
                            ?>
                               <!-- <td valign="top" style="font-size:19px;text-align:right;width:40% !important; " colspan="2"><span style="text-align:right;font-weight: bold; padding-bottom: 2px" >< ?php echo $this->lang->line('admission_no'); ?>.</span> : <span  style="font-weight: normal !important; "> < ?php echo $student_value['admission_no']; ?></span></td> -->
                          
                              <td valign="top" style="text-align:right; padding-bottom: 2px" colspan="2"><span style="text-align:right;font-weight: bold; padding-bottom: 2px" ><?php echo $this->lang->line('admission_no'); ?>.</span> : <span  style="font-weight: normal !important; "><?php echo $student_value['admission_no']; ?></span></td>
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
                              <td valign="top" style="font-weight: bold; padding-bottom: 2px">Date of Birth</td>
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
            </table>
          </td>
        </tr>
        <tr>
          <td valign="top" style="height:10px"></td>
        </tr>
        <tr>
          <td valign="top">
            <table cellpadding="0" cellspacing="0" width="100%" class="denifittable" style="border-bottom: 0px !important;">
              <thead>
                 <tr style="background-color:#ffffff !important;border: 1px solid !important;">
                     <th style="width:25% !important;text-align:left !important;">Scholastic Area 1</th>
                     <th colspan="<?= $atcountcs1; ?>" style="">Academic Year (100)</th>
                 </tr>
                <tr style="background-color:#ffffff !important;font-size:12px;">
                  <td valign="middle"><?php echo $this->lang->line('subject'); ?></td>
                <?php
                $mm = 0;
                foreach ($exam_assessments_array as $subject_assesment_key => $subject_assesment_value) {
                    
                    if ($subject_assesment_value->scholastic_area == 1) {
                    $mm += $subject_assesment_value->maximum_marks;
                  ?> <td valign="middle"   style="font-size:12px  ;" class="text-center">
                      <?php
                      
                      $subject_assesment_code = ($subject_assesment_value->code != "") ? " (" . "-" .$subject_assesment_value->code . ")" : "";
                                            
                      echo $subject_assesment_value->name;
                    //  echo "<br/>";
                      echo "(".$subject_assesment_value->maximum_marks.")";
                      ?></td><?php
                            } }
                    ?>

                  <td valign="middle" style="width:16% !important;font-size:12px ;" class="text-center">Total Marks(<?= $mm; ?>)</td>
                  <td valign="middle" style="width:14% !important;font-size:12px  ;" class="text-center">Grades</td>
                </tr>
              </thead>
              <tbody>

                <?php
                $assessment_totals = [];
                $assessment_max_totals = [];
                $assessment_bar_totals = [];
                foreach ($student_value['term']['exams'] as $student_exam_key => $student_exam_value) {
                  $subjects_data = [];
                  foreach ($subjects as $subject_key => $subject_value) {
                    $subjectGrade = null;
                    $subject_total=0;
                    $subject_max_total=0;
                    $subjects_total_b = 0;
                    $subject_max_total_b = 0;
                    if ($subject_value->scholastic_area == 1) {
                ?>
                    <tr>
                      <td valign="top" style="font-weight:normal !important;"><?php 
                      
                      $subject_code = ($subject_value->subject_code != "") ? " (" . $subject_value->subject_code . ")" : "";
                      
                      echo $subject_value->subject_name; ?>
                      </td>
                      <?php
                      $subject_total_for_assessments = 0;
                      $subject_max_total_for_assessments = 0;
                      $subject_bar_for_assessments = 0;

                      foreach ($exam_assessments_array as $subject_assesment_key => $subject_assesment_value) {
                        if ($subject_assesment_value->scholastic_area == 1) {
                      ?> 
                        <td valign="top" style="font-weight:normal !important;" class="text-center">
                          <?php
                   
                          $assessment_exists =  find_subject_assessment_exists($exam_subject_assessments, $subject_value->id, $subject_assesment_value->id);

if ($assessment_exists) {
  $assessment_array = findAssessmentValue($subject_value->subject_id, $subject_assesment_value->id, $student_exam_value['subjects']);       
   if (!empty($assessment_array['marks_grade'])) {
       $subjectGrade = $assessment_array['marks_grade'];
   }
  $subject_total+=$assessment_array['marks'];
  $subject_max_total+=$assessment_array['maximum_marks'];
  $total_gain_marks+=$assessment_array['marks'];
  $total_max_marks+=$assessment_array['maximum_marks']; 
  $subjects_total_b += $assessment_array['marks'];
  $subject_max_total_b += $assessment_array['maximum_marks'];
  

if (!isset($assessment_totals[$subject_assesment_value->id])) {
    $assessment_totals[$subject_assesment_value->id] = 0;
    $assessment_max_totals[$subject_assesment_value->id] = 0;
    $assessment_bar_totals[$subject_assesment_value->id] = 0;
}
$assessment_totals[$subject_assesment_value->id] += $assessment_array['marks'];
$assessment_max_totals[$subject_assesment_value->id] += $assessment_array['maximum_marks'];
$assessment_bar_totals[$subject_assesment_value->id] += $assessment_array['marks'];


  
  if(is_null($assessment_array['marks'])){
    echo "N/A";
  }else{
    echo ($assessment_array['is_absent']) ? $this->lang->line('abs') :$assessment_array['marks'];      
  }

} else {
  echo "<b>xx</b>";
}


                         
                    

                          ?>
                        </td>
                        <?php
                                } }
                     ?>
<?php
$subjects_data[] = [
    'subject_name' => $subject_value->subject_code,
    'subject_total_bar' => $subjects_total_b,
    'subject_max_total_bar' => $subject_max_total_b
];


$width              = 500;
$height             = 300;
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

$image_path = 'uploads/examgraph/'.$cbseexamid.'-'.$student_value['admission_no'].'.png';
imagepng($image, $image_path);
imagedestroy($image);

$passThreshold = ($subject_max_total * 33) / 100;
$isPass = ($subject_total >= $passThreshold);

$exam_percentage = getPercent($total_max_marks, $total_gain_marks);
$chkgrd = $this->db->query("SELECT * FROM `cbse_exam_timetable_grade` WHERE cbse_exam_timetable_id = '".$subject_value->id."' AND cbse_exam_id = '".$examInfo->id."' AND subject_id = '".$subject_value->subject_id."' AND grade_min_per <= '".$subject_total."' AND grade_max_per >= '".$subject_total."' ")->row();
$grmInfo = $this->db->query("SELECT * FROM `cbse_exam_grades_range` WHERE cbse_exam_grade_id = '".$examInfo->cbse_exam_grade_id."' AND minimum_percentage <= '".$exam_percentage."' AND maximum_percentage >= '".$exam_percentage."' ")->row(); 

if ($chkgrd->grade_value == 'E') {
    $isFail = true;
}
?>

<td valign="top" style="font-weight:normal !important;" class="text-center"><?php echo $subject_total; ?></td>
            <td valign="top" style="font-weight:normal !important;" class="text-center">
              <?php 
              if (!empty($chkgrd)) {
                echo $chkgrd->grade_value;
            } else {
                if (!$isPass) {
                    //echo 'E';
                } else {
                    if (!empty($subjectGrade)) {
                        //echo $subjectGrade;
                    } else {
                        $subject_percentage=getPercent($subject_max_total,$subject_total);
                        //echo  getGrade($exam,$subject_percentage);
                    }
                }
            }
              ?>              
            </td>

                    </tr>
            <?php
                }
                }
                }
                $exam_percentage = getPercent($total_max_marks, $total_gain_marks);
                $exam_grade      = getGrade($exam,$exam_percentage);
            ?>


<tr>
    <td valign="top" style="font-weight:bold !important;"><b>Total<b></b></td>
    <?php
    // Loop through all assessments to show the total for each assessment
    foreach ($exam_assessments_array as $subject_assesment_key => $subject_assesment_value) {
        if ($subject_assesment_value->scholastic_area == 1) {
            ?>
            <td valign="top" style="font-weight:bold !important;" class="text-center">
                <b><?php
                // Display the total for each assessment across all subjects
                if (isset($assessment_totals[$subject_assesment_value->id])) {
                    echo $assessment_totals[$subject_assesment_value->id];
                } else {
                    echo "0";
                }
                ?>
                </b>
            </td>
            
            <?php
        }
    }
    ?>
    <td class="text-center" style="font-weight:bold !important;"><b><?= $total_gain_marks; ?></b></td>
    <td class="text-center" style="font-weight:bold !important;"><b><?= $grmInfo->name; ?></b></td>
</tr>



              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td valign="top">
            <table cellpadding="0" cellspacing="0" width="100%" class="denifittable">
              <tbody>
                <tr>
                  <td class="border-t-0" style="width:25% !important"><?php echo $this->lang->line('percentage'); ?></td>
                  <td class="border-t-0 text-right" style="" colspan="<?= $atcountcs1; ?>"><?php echo two_digit_float($exam_percentage, 2); ?> %</td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td valign="top" style="height:10px"></td>
        </tr>
        
        
        <tr>
          <td valign="top">
            <table cellpadding="0" cellspacing="0" width="100%" class="denifittable" style="border-bottom: 0px;">
              <thead>
                 <tr style="background-color:#ffffff !important">
                     <th style="width:35% !important;text-align:left !important">Scholastic Area 2</th>
                     <th colspan="<?= $atcountcs2; ?>">Academic Year (100)</th>
                 </tr>
                <tr style="background-color:#ffffff !important">
                  <td valign="middle" ><?php echo $this->lang->line('subject'); ?></td>
                  <?php

                  foreach ($exam_assessments_array as $subject_assesment_key => $subject_assesment_value) {
                    if ($subject_assesment_value->scholastic_area == 2) {

                  ?> <td valign="middle" style="width:5% !important;" class="text-center">
                      <?php
                      
                      $subject_assesment_code = ($subject_assesment_value->code != "") ? " (" . "-" .$subject_assesment_value->code . ")" : "";
                      
                      
                      echo $subject_assesment_value->name;
                      //echo "<br/>";
                      echo "(".$subject_assesment_value->maximum_marks.")";
                      ?></td><?php
                            } }
                              ?>

                  <td style="width:24% !important;" valign="middle" class="text-center">Total Marks (100)</td>
                  <td style="width:18% !important;" valign="middle" class="text-center">Grades</td>
                </tr>
              </thead>
              <tbody>

                <?php

                foreach ($student_value['term']['exams'] as $student_exam_key => $student_exam_value) {
                
                  foreach ($subjects as $subject_key => $subject_value) {
                    $subjectGrade=null;
                    $subject_total=0;
                    $subject_max_total=0;
                    if ($subject_value->scholastic_area == 2) {
                ?>
                    <tr>
                      <td valign="top" style="font-weight:normal !important;"><?php 
                      
                      $subject_code = ($subject_value->subject_code != "") ? " (" . $subject_value->subject_code . ")" : "";
                      
                      echo $subject_value->subject_name; ?>
                      </td>
                      <?php

                      foreach ($exam_assessments_array as $subject_assesment_key => $subject_assesment_value) {
                        if ($subject_assesment_value->scholastic_area == 2) {
                      ?> 
                        <td style="width:30% !important;font-weight:normal !important;" valign="top" class="text-center">
                          <?php
                   
                          $assessment_exists =  find_subject_assessment_exists($exam_subject_assessments, $subject_value->id, $subject_assesment_value->id);

if ($assessment_exists) {
  $assessment_array = findAssessmentValue($subject_value->subject_id, $subject_assesment_value->id, $student_exam_value['subjects']);
    if (!empty($assessment_array['marks_grade'])) {
        $subjectGrade = $assessment_array['marks_grade'];
    }         

  $subject_total+=$assessment_array['marks'];
  $subject_max_total+=$assessment_array['maximum_marks'];
  $total_gain_marks+=$assessment_array['marks'];
  $total_max_marks+=$assessment_array['maximum_marks']; 
  if(is_null($assessment_array['marks'])){
    echo "N/A";
  }else{
    echo ($assessment_array['is_absent']) ? $this->lang->line('abs') :$assessment_array['marks'];      
  }

} else {
  echo "<b>xx</b>";
}
$passThreshold = ($subject_max_total * 33) / 100;
$isPass = ($subject_total >= $passThreshold);

$exam_percentage = getPercent($total_max_marks, $total_gain_marks);
$chkgrd = $this->db->query("SELECT * FROM `cbse_exam_timetable_grade` WHERE cbse_exam_timetable_id = '".$subject_value->id."' AND cbse_exam_id = '".$examInfo->id."' AND subject_id = '".$subject_value->subject_id."' AND grade_min_per <= '".$subject_total."' AND grade_max_per >= '".$subject_total."' ")->row();
                         
if ($chkgrd->grade_value == 'E') {
    //$isFail = true;
}                    

                          ?>
                        </td>
                        <?php
                                } }
                     ?>

<td valign="top" style="font-weight:normal !important;" class="text-center"><?php echo $subject_total; ?></td>
            <td valign="top" style="font-weight:normal !important;" class="text-center">
              <?php
              if (!empty($chkgrd)) {
                echo $chkgrd->grade_value;
            } else {
                if (!$isPass) {
                    //echo 'E';
                } else {
                    if (!empty($subjectGrade)) {
                        //echo $subjectGrade;
                    } else {
                        $subject_percentage=getPercent($subject_max_total,$subject_total);
                        //echo  getGrade($exam,$subject_percentage);
                    }
                }
            }
              ?>              
            </td>

                    </tr>
                <?php
                  }
                  }
                }
                $exam_percentage = getPercent($total_max_marks, $total_gain_marks);
                
                ?>

              </tbody>
            </table>
          </td>
        </tr>
        
        <tr>
          <td valign="top" style="height:10px"></td>
        </tr>
        
        <tr>
          <td valign="top">
            <table cellpadding="0" cellspacing="0" width="100%" class="denifittable" style="border-bottom: 0px;">
              <thead>
                 <tr style="background-color:#ffffff !important">
                     <th  style="text-align:left !important;">Co-Scholastic Area : [on a 3-point (A-C) Grading Scale]</th>
                     <th  class="text-center"   >Grades</th>
                    </tr>
              </thead>
              <tbody>

                <?php

                foreach ($observations as $observation) {
                    
                    if ($observation->obtain_marks >= 8 && $observation->obtain_marks <= 10) {
                        $og = 'A';
                    } elseif($observation->obtain_marks >= 5 && $observation->obtain_marks <= 7) {
                        $og = 'B';
                    } else {
                        $og = 'C'; 
                    }
                ?>
                    <tr>
                      <td valign="top" style="width:64% !important;font-weight:normal !important;"><?= $observation->name; ?></td>
                      <td valign="top"  class="text-center" style="width:36% !important;font-weight:normal !important;" ><?= $og; ?></td>

                    </tr>
                <?php }?>

              </tbody>
            </table>
          </td>
        </tr>
        
        
        <tr>
          <td valign="top" style="height:10px"></td>
        </tr>
        
        <tr>
          <td valign="top">
            <table cellpadding="0" cellspacing="0" width="100%" class="denifittable" style="border-bottom: 0px;">
              <thead>
                 <tr style="background-color:#ffffff !important">
                     <th style="width:61.3% !important; text-align:left !important">Discipline : [on a 3-point (A-C) Grading Scale]</th>
                     <th style="width:38.7% !important;" class="text-center"  >Grade</th>
                    </tr>
              </thead>
              <tbody>

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
                      <td valign="top" style="width:61.3% !important;font-weight:normal !important;">Discipline (Punctuality, Cleanliness, Social Behaviour)</td>
                      <td valign="top"  class="text-center" style="width:38.7% !important;font-weight:normal !important;">A<?php //echo $ig; ?></td>

                    </tr>

              </tbody>
            </table>
          </td>
        </tr>
        
        
        <tr>
          <td valign="top" style="height:10px;"></td>
        </tr>
        <tr>
          <td>
            <table cellpadding="0" cellspacing="0" width="100%" class="denifittable" style="padding-bottom: 10px;">
              <tbody>
                <tr>
                  <td valign="middle" class="text-center"  style="width:25.2% !important;" rowspan="2"><b>Overall Attendance</b></td>
                  <td valign="middle" class="text-center"><b><?php echo $this->lang->line('total_working_days'); ?></b></td>
                  <td valign="middle" class="text-center"><b><?php echo $this->lang->line('days_present'); ?></b></td>
                  <td valign="middle" class="text-center" style="width:30.5% !important;"><b><?php echo $this->lang->line('attendance_percentage'); ?></b></td>
                </tr>
                <tr>
                  <td valign="middle" class="text-center" style="font-weight:normal !important;"><?php echo $student_value['total_working_days']; ?></td>
                  <td valign="middle" class="text-center"  style="font-weight:normal !important;"><?php echo $student_value['total_present_days']; ?></td>
                  <td valign="middle" class="text-center"  style="font-weight:normal !important;"><?php echo getPercent($student_value['total_working_days'], $student_value['total_present_days']); ?></td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        
        <?php  if ($template['is_remark']) {  ?>
        <!--<tr>        -->
        <!--<tr>-->
        <!--  <td valign="top" style="height:15px" colspan="3"></td>-->
        <!--</tr>-->
        <!--<tr>-->
        <!--  <td style="padding-bottom: 6px;display: block; width:30% !important"><b>< ?php echo $this->lang->line('class_teacher_remark'); ?> :</b></td>-->
        <!--  <td style="width:5% !important">:</td>-->
        <!--  <td style="width:65% !important">< ?php echo $student_value['remark']; ?></td>-->
        <!--</tr>-->
        <!--<tr>-->
        <!--  <td style="padding-bottom: 6px;display: block; width:30% !important"><b>Promoted to Class</b></td>-->
        <!--  <td style="width:5% !important">:</td>-->
        <!--  <td style="width:65% !important"></td>-->
        <!--</tr>-->
        <!--<tr>-->
        <!--  <td style="padding-bottom: 6px;display: block; width:30% !important"><b>Date</b></td>-->
        <!--  <td style="width:5% !important">:</td>-->
        <!--  <td style="width:65% !important"></td>-->
        <!--</tr>-->
        <!--</tr>-->
        <?php } ?>
        
        <?php  if ($template['is_remark']) {  ?>
        <tr>
        <tr>
          <td valign="top" style="height:2px"></td>
        </tr>
        <tr>
        <td>
            <table cellpadding="0" cellspacing="0" width="100%" style="">
            <!-- padding-bottom: 10px; -->
              <tbody>
                <tr style="border:none; border:hidden;padding-bottom: 0px !important;">
                    <td style="width:70% !important;border:none; border:hidden;font-weight:normal !important;padding-bottom:0px !important;" colspan="3">
                      <b>Class Teacher Remark : </b><?php echo $grmInfo->description; ?><br><br>
                      <b>Promoted to Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php if (!$isFail) { echo $examInfo->promote_class; } else { echo 'EIOP'; } ?><br><br>
                      <b>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;23/03/2025<br><br>
                      <!-- <b>Class Teacher&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> -->
                    </td>
                    <td style="border:none; border:hidden;right:0 !important;" rowspan="3"><img style="right:0 !important;" width="250px" src="<?= base_url().'uploads/examgraph/'.$cbseexamid.'-'.$student_value['admission_no'].'.png'; ?>"></td>
                </tr>
                <?php /*<tr style="border:none; border:hidden">
                    <td colspan="3"   style="font-weight:normal !important;"><b>Promoted to Class</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $examInfo->promote_class; ?></td>
                </tr>
                <tr style="border:none; border:hidden">
                    <td colspan="3"   style="font-weight:normal !important;"><b>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                </tr> */?> 
              </tbody>
            </table>
              
        </td>
        </tr>
        <!--<tr>-->
        <!--  <td><b>Class Teacher Remark : </b>< ?php echo $student_value['remark']; ?></td>-->
        <!--</tr>-->
        <!--<tr>-->
        <!--  <td></td>-->
        <!--</tr>-->
        <!--<tr>-->
        <!--  <td></td>-->
        <!--</tr>-->
        </tr>
        <?php } ?>
        
<?php

?>
        
        <tr>
          <td valign="top" style="height:30px"></td>
        </tr> 
        <tr>
          <td valign="top" width="100%" align="center">
            <table cellpadding="0" cellspacing="0" width="100%" style="margin-bottom:10px;">
              <tr>
                <td valign="top" width="15%" class="signature text-left"><b>Class Teacher</b></td>
                <td valign="top" width="50%" class="signature text-left"><b>Principal</b></td>
                <td valign="top" width="25%" class="signature text-center"><b>Parent</b></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td valign="top" style="height:40px" colspan="4"></td>
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
function getGrade($grade_array, $Percentage)
{

  if (!empty($grade_array)) {
    foreach ($grade_array as $grade_key => $grade_value) {

      if ($grade_value->minimum_percentage <= $Percentage) {
        return $grade_value->name;
        break;
      } elseif (($grade_value->minimum_percentage >= $Percentage && $grade_value->maximum_percentage <= $Percentage)) {

        return $grade_value->name;
        break;
      }
    }
  }
  return "-";
}

function getGradeRemark($grade_array, $Percentage)
{

  if (!empty($grade_array)) {
    foreach ($grade_array as $grade_key => $grade_value) {

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

function searchSubjectRank($array, $subject_id)
{

  foreach ($array as $k => $val) {

    if ($k == $subject_id) {
      return $val;
    }
  }
  return null;
}


function findAssessmentValue($find_subject_id, $find_cbse_exam_assessment_type_id, $student_value)
{


  $return_array = [
    'maximum_marks' => 0,
    'marks' => 0,
    'marks_grade' => "",
    'note' => "",
    'is_absent' => 0,
  ];

  if (array_key_exists($find_subject_id, $student_value)) {

    if (array_key_exists($find_subject_id, $student_value)) {
      if (!empty($student_value[$find_subject_id]['exam_assessments'])) {
        foreach ($student_value[$find_subject_id]['exam_assessments'] as $student_assessment_key => $student_assessment_value) {
         
        
          if ($student_assessment_value['cbse_exam_assessment_type_id'] == $find_cbse_exam_assessment_type_id) {
            $return_array = [
              'maximum_marks' => $student_assessment_value['maximum_marks'],
              'marks' => $student_assessment_value['marks'],
              'marks_grade' => $student_assessment_value['marks_grade'],
              'note' => $student_assessment_value['note'],
              'is_absent' => $student_assessment_value['is_absent'],
            ];
            return $return_array;
          }
        }
      }
    }
  }

  return $return_array;
}

function find_subject_assessment_exists($subject_assessments, $cbse_exam_timetable_id, $cbse_exam_assessment_type_id)
{

    if (!empty($subject_assessments)) {
        foreach ($subject_assessments as $key => $value) {
            if ($value->id == $cbse_exam_timetable_id) {
                if (!empty($value->subject_assessments)) {
                    foreach ($value->subject_assessments as $askey => $asvalue) {
                        if ($asvalue->cbse_exam_timetable_id == $cbse_exam_timetable_id  && $asvalue->cbse_exam_assessment_type_id == $cbse_exam_assessment_type_id) {
                            return true;
                            break;
                        }
                    }
                }
            }
        }
    }
    return false;
}


?>
