<style type="text/css">
    @media print {
        @page {
            margin: 0;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .sheet {
            page-break-after: always;
        }

        .sheet:last-child {
            page-break-after: auto;
        }
    }

    * {
        padding: 0;
        margin: 0;
    }

    .tableone td {
        padding: 5px 10px;
        font-size: 30px;
    }

    table.denifittable {
        border: 1px solid #999;
        border-collapse: collapse;
    }

    .denifittable th {
        padding: 10px 10px;
        font-weight: normal;
        border-collapse: collapse;
        border-right: 1px solid #999;
        border-bottom: 1px solid #999;
        font-size: 25px;
    }

    .denifittable td {
        padding: 10px 10px;
        font-weight: normal;
        border-collapse: collapse;
        border-left: 1px solid #999;
        font-size: 25px;
    }

    .mark-container {
        width: 1000px;
        position: relative;
        z-index: 2;
        margin: 0 auto 25px auto;
        padding: 20px 25px;
        font-size: 40px;
        box-sizing: border-box;
        page-break-after: always;
        page-break-inside: avoid;
    }

    .tcmybg {
        background: top center;
        background-size: 100% 100%;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        z-index: 1;
    }

    .tablemain {
        position: relative;
        z-index: 2;
        height: 90%;
    }

    .center-text {
        text-align: center;
    }

    .photo-cell { width: 25%; text-align: center; }
    .photo-box {
        width: 200px;
        height: 250px;
        border: 2px solid #fff;
        outline: 1px solid #000;
        display: inline-block;
    }
    .photo-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .mark-container:last-child { page-break-after: auto; }
</style>
<?php
if (!empty($student_details)) {
    foreach ($student_details as $student_key => $student_value) {
?>
        <div class="mark-container">
            <?php
            if ($admitcard->background_img != "") {
            ?>
                <img src="<?php echo $this->media_storage->getImageURL('uploads/admit_card/' . $admitcard->background_img); ?>" class="tcmybg" width="150px" height="150px" />
            <?php
            }
            ?>
            <table cellpadding="0" cellspacing="0" width="100%" class="tablemain" style="border: 2px solid; padding:10px;  ">
                <?php
                if ($admitcard->title != "" || $admitcard->heading != "" || $admitcard->left_logo != "") {
                ?>
                    <tr>
                        <td valign="top">
                            <table cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td valign="top" align="center" width="100">
                                        <?php
                                        if ($admitcard->left_logo != "") {
                                        ?>
                                            <img src="<?php echo  $this->media_storage->getImageURL('uploads/admit_card/' . $admitcard->left_logo); ?>" width="150px" height="150px" style="padding:10px; ">
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td valign="top">
                                        <table cellpadding="0" cellspacing="0" width="100%">
                                            <?php
                                            if ($admitcard->heading != "") {
                                            ?>
                                                <tr>
                                                    <td valign="top" style="font-size: 20px; text-align: center; text-transform: uppercase; padding-top: 10px;"><?php echo $admitcard->heading; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if ($admitcard->school_name != "") {
                                            ?>
                                                <tr>
                                                    <td valign="top" style="font-size: 44px; font-weight: bold; text-align: center; text-transform: uppercase; padding-top: 10px;"><?php echo $admitcard->school_name; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>

                                            <tr>
                                                <td valign="top" height="5"></td>
                                            </tr>
                                            <?php
                                            if ($admitcard->title != "") {
                                            ?>
                                                <tr>
                                                    <td valign="top" style="font-size: 28px;text-align: center; text-transform: uppercase; ">
                                                        <?php echo $admitcard->title; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>

                                        </table>
                                    </td>
                                    <td width="100" valign="top" align="center">
                                        <?php
                                        if ($admitcard->right_logo != "") {
                                        ?>
                                            <img src="<?php echo  $this->media_storage->getImageURL('uploads/admit_card/' . $admitcard->right_logo); ?>" width="150px" height="150px" style="padding:10px; ">

                                        <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                <?php
                }
                ?>
                <?php
                if ($admitcard->exam_name) {
                ?>

                    <tr>
                        <td valign="top" style="border-top: 1px solid black; font-size: 30px; text-align: center; text-transform: capitalize; font-weight: bold; padding-top: 25px;"><?php echo $admitcard->exam_name; ?></td>
                    </tr>
                    <tr>
                        <td valign="top" style="font-size: 30px; text-align: center; text-transform: capitalize; text-decoration: underline; font-weight: bold; padding-top: 25px;">ADMIT CARD</td>
                    </tr>
                    <!-- <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr> -->
                <?php
                }
                ?>
                <!-- <tr>
                    <td valign="top" height="10"></td>
                </tr> -->
                <tr>

                    <td valign="top">
                        <table cellpadding="0" cellspacing="0" width="100%" style="text-transform: uppercase; ">
                            <tr>
                                <td valign="top">
                                    <table cellpadding="0" cellspacing="0" width="100%">
                                        <tr>
                                            <?php
                                            if ($admitcard->is_roll_no) {
                                            ?>
                                                <td valign="top" width="40%" style="font-weight: bold;font-size:28px;padding-bottom: 20px;"><?php echo $this->lang->line('roll_number') ?></td>
                                                <td valign="top" width="5%" style="font-weight: bold;;font-size:28px;padding-bottom: 20px;">:</td>
                                                <td valign="top" width="55%" style="font-size:28px;font-weight: normal;padding-bottom: 20px;">
                                                    <?php if (!empty($student_value->profile_roll_no)) {
                                                        echo $student_value->profile_roll_no;
                                                    } else {
                                                        echo $student_value->profile_roll_no;
                                                    } ?>

                                                </td>
                                            <?php
                                            }
                                            ?>
                                        </tr>

                                        <tr>

                                            <?php
                                            if ($admitcard->is_admission_no) {
                                            ?>
                                                <td valign="top" width="40%" style="font-weight: bold;padding-bottom: 20px;font-size:28px;"><?php echo $this->lang->line('admission_no') ?></td>
                                                <td valign="top" width="5%" style="font-weight: bold;padding-bottom: 20px;font-size:28px;">:</td>
                                                <td valign="top" width="55%" style="font-weight: normal;padding-bottom: 20px;font-size:28px;"><?php echo $student_value->admission_no; ?></td>
                                            <?php
                                            }
                                            ?>
                                        </tr>
                                        <?php
                                        if ($admitcard->is_name) {
                                        ?>


                                            <tr>
                                                <td valign="top" width="40%" style="font-weight: bold;padding-bottom: 20px;font-size:28px;"><?php echo "Student Name"; //echo $this->lang->line('candidates') . " " . $this->lang->line('name') 
                                                                                                                                            ?></td>
                                                <td valign="top" width="5%" style="font-weight: bold;padding-bottom: 20px;font-size:28px;">:</td>
                                                <td valign="top" width="55%" style="text-transform: uppercase; font-weight: normal;padding-bottom: 20px;font-size:28px;"><?php echo $this->customlib->getFullName($student_value->firstname, $student_value->middlename, $student_value->lastname, $sch_setting->middlename, $sch_setting->lastname); ?></td>
                                            </tr>
                                            <?php if ($admitcard->is_mother_name) { ?>
                                                <tr>
                                                    <td valign="top" width="40%" style="font-weight: bold;padding-bottom: 20px;font-size:28px;"><?php echo $this->lang->line('mother_name') ?></td>
                                                    <td valign="top" width="5%" style="font-weight: bold;padding-bottom: 20px;font-size:28px;">:</td>
                                                    <td valign="top" width="55%" style="text-transform: uppercase; font-weight: normal;padding-bottom: 20px;font-size:28px;"><?php echo $student_value->mother_name; ?></td>
                                                </tr>
                                            <?php } ?>

                                            <?php if ($admitcard->is_father_name) { ?>
                                                <tr>
                                                    <td valign="top" width="40%" style="font-weight: bold;padding-bottom: 20px;font-size:28px;"><?php echo $this->lang->line('father_name') ?></td>
                                                    <td valign="top" width="5%" style="font-weight: bold;padding-bottom: 20px;font-size:28px;">:</td>
                                                    <td valign="top" width="55%" style="text-transform: uppercase; font-weight: normal;padding-bottom: 20px;font-size:28px;"><?php echo $student_value->father_name; ?></td>
                                                </tr>
                                            <?php } ?>
                                            <?php if ($admitcard->is_dob) { ?>
                                                <tr>
                                                    <td valign="top" width="40%" style="font-weight: bold;padding-bottom: 20px;font-size:28px;"><?php echo $this->lang->line('d_o_b') ?></td>
                                                    <td valign="top" width="5%" style="font-weight: bold;padding-bottom: 20px;font-size:28px;">:</td>
                                                    <td valign="top" width="55%" style="text-transform: uppercase; font-weight: normal;padding-bottom: 20px;font-size:28px;"><?php echo date($this->customlib->getSchoolDateFormat(), strtotime($student_value->dob)); ?></td>
                                                </tr>
                                            <?php } ?>

                                            <tr>
                                                <?php
                                                if ($admitcard->is_class || $admitcard->is_section) {
                                                ?>

                                                    <td valign="top" width="40%" style="font-weight: bold;padding-bottom: 20px;font-size:28px;"> <?php echo $this->lang->line('class'); ?></td>
                                                    <td valign="top" width="5%" style="font-weight: bold;padding-bottom: 20px;font-size:28px;">:</td>
                                                    <td valign="top" width="55%" style="text-transform: uppercase; font-weight: normal;padding-bottom: 20px;font-size:28px;">

                                                        <?php
                                                        if ($admitcard->is_class && $admitcard->is_section) {

                                                            echo $student_value->class . " (" . $student_value->section . ")";
                                                        } elseif ($admitcard->is_class) {
                                                            echo $student_value->class;
                                                        } elseif ($admitcard->is_section) {
                                                            echo $student_value->section;
                                                        }
                                                        ?>
                                                    </td>
                                                <?php
                                                }
                                                ?>
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                    </table>
                                </td>
                                <?php
                                if ($admitcard->is_photo) {
                                    $student_photo = '';
                                    if (!empty($student_value->image)) {
                                        $student_photo = $student_value->image;
                                    } else {
                                        if (strtolower($student_value->gender) == 'female') {
                                            $student_photo = 'uploads/student_images/default_female.jpg';
                                        } else {
                                            $student_photo = 'uploads/student_images/default_male.jpg';
                                        }
                                    }
                                ?>
                                    <td valign="top" class="photo-cell">
                                        <img src="<?php echo  $this->media_storage->getImageURL($student_photo); ?>" width="200" height="250" style="border: 2px solid #fff; outline: 1px solid #000000;">
                                    </td>
                                <?php
                                }
                                ?>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign="top" height="10"></td>
                </tr>
                <tr>
                    <td valign="top">
                        <!-- <table cellpadding="0" cellspacing="0" width="100%" class="denifittable">
                            <tr>
                                <th valign="top" style="text-align: center; text-transform: uppercase;padding:10px;  font-weight: bold;">SR. NO.</th>
                                <th valign="top" style="text-align: center; text-transform: uppercase;padding:10px;  font-weight: bold;"><?php echo $this->lang->line('date'); ?></th>
                                <th valign="top" style="text-align: center; text-transform: uppercase;padding:10px;  font-weight: bold;"><?php echo $this->lang->line('time') ?></th>
                                <th valign="top" style="text-align: center; text-transform: uppercase;padding:10px;  font-weight: bold;"><?php echo $this->lang->line('subject'); ?></th>
                                <th valign="top" style="text-align: center; text-transform: uppercase;padding:10px;  font-weight: bold;"><?php echo 'INVIGILATOR SIGN' ?></th>
                            </tr>
                            <?php
                            $i = 0;
                            foreach ($exam_subjects as $subject_key => $subject_value) {
                                $i++;

                                $time_from  = $subject_value->time_from;
                                $duration   = $subject_value->duration;
                                $datetime   = new DateTime($time_from);
                                $interval   = new DateInterval('PT' . $duration . 'M');
                                $datetime->add($interval);
                                // $time_to    = $datetime->format('Y-m-d H:i:s');
                                $time_to    = $datetime->format('H:i');
                                $time_from_fmt = date('H:i', strtotime($time_from));
                            ?>
                                <tr style="border-top: 1px solid black;">
                                    <td style="text-align: center;"><?= $i; ?></td>
                                    <td class="center-text"><?php echo date($this->customlib->getSchoolDateFormat(), strtotime($subject_value->date)); ?></td>
                                    <td class="center-text"><?php echo $time_from_fmt . ' - ' . $time_to; ?></td>
                                    <td style="text-align: left;text-transform: uppercase;"><?php echo $subject_value->subject_name; ?></td>
                                    <td style="text-align: center;text-transform: uppercase;"></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table> -->

                        <table cellpadding="0" cellspacing="0" width="100%" class="denifittable">
                            <thead>
                                <tr>
                                    <th valign="top" style="text-align: center; text-transform: uppercase; padding:10px; font-weight: bold; width: 5%;">SR. NO.</th>
                                    <th valign="top" style="text-align: center; text-transform: uppercase; padding:10px; font-weight: bold; width: 15%;"><?php echo $this->lang->line('date'); ?></th>
                                    <th valign="top" style="text-align: center; text-transform: uppercase; padding:10px; font-weight: bold; width: 18%;"><?php echo $this->lang->line('time') ?></th>
                                    <th valign="top" style="text-align: center; text-transform: uppercase; padding:10px; font-weight: bold; width: 42%;"><?php echo $this->lang->line('subject'); ?></th>
                                    <th valign="top" style="text-align: center; text-transform: uppercase; padding:10px; font-weight: bold; width: 20%;"><?php echo 'INVIGILATOR SIGN' ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($exam_subjects as $subject_key => $subject_value) {
                                    $i++;
                                    $time_from  = $subject_value->time_from;
                                    $duration   = $subject_value->duration;
                                    $datetime   = new DateTime($time_from);
                                    $interval   = new DateInterval('PT' . $duration . 'M');
                                    $datetime->add($interval);
                                    $time_to    = $datetime->format('H:i');
                                    $time_from_fmt = date('H:i', strtotime($time_from));
                                ?>
                                    <tr style="border-top: 1px solid black;">
                                        <td style="text-align: center;"><?= $i; ?></td>
                                        <td style="text-align: center; width: 15%;"><?php echo date($this->customlib->getSchoolDateFormat(), strtotime($subject_value->date)); ?></td>
                                        <td style="text-align: center; text-transform: uppercase; width: 18%;"><?php echo  $time_from_fmt . ' - ' . $time_to; ?></td>
                                        <td style="text-align: left; text-transform: uppercase; width: 42%;"><?php echo $subject_value->subject_name; ?></td>
                                        <td style="text-align: center; text-transform: uppercase; width: 20%;"></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign="top" height="5"></td>
                </tr>
                <?php
                if ($admitcard->content_footer != "") {
                ?>
                    <tr>
                        <td valign="top" style="padding-bottom: 15px; line-height: normal; font-size: 25px;"> <?php echo htmlspecialchars_decode($admitcard->content_footer); ?></td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td valign="top" height="40px"></td>
                </tr>
                <?php
                if ($admitcard->sign != "") {
                ?>
                    <tr>
                        <td align="right" valign="top">
                            <table cellpadding="0" cellspacing="0" width="100%" style="text-align: center;">
                                <tr>
                                    <td valign="top">
                                        <!--<img src="< ?php echo  $this->media_storage->getImageURL('uploads/admit_card/' . $admitcard->sign); ?>" width="100" height="38"  />-->
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                <?php
                }
                ?>

                <tr style="border: none !important;">
                    <td valign="top" style="border: none !important;">
                        <table cellpadding="0" cellspacing="0" width="100%" class="denifittable" style="border: none !important;">
                            <tr style="border: none !important;">
                                <th valign="top" style="padding-top:60px;text-align: center; text-transform: uppercase; font-weight: bold;border: none !important;">Exam Coordinator</th>
                                <th valign="top" style="padding-top:60px;text-align: center; text-transform: uppercase; font-weight: bold;border: none !important;">Student Sign</th>
                                <th valign="top" style="padding-top:20px;text-align: center; text-transform: uppercase; font-weight: bold;border: none !important;">
                                    <img src="<?= base_url('uploads/signatures/Principal_sign.png'); ?>" alt="Principal Sign" style="width:150px;height:auto;display:block;margin:0 auto 10px auto;">
                                    Principal's Sign
                                </th>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
<?php
    }
}
?>