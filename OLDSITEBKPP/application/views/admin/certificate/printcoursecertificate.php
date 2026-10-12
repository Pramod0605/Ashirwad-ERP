<!-- Link the external CSS file -->
<link rel="stylesheet" type="text/css" href="<?= base_url() . 'backend/certificate.css' ?>">

<?php
    $certificate_body = "This certificate is awarded to [name] for successfully completing the [course_name] on [date], demonstrating commitment to learning and excellence in [category].";
    $certificate_body = str_replace('[name]', '<span class="highlight highlight-name">' . $sinfo->firstname . ' ' . $sinfo->middlename . ' ' . $sinfo->lastname . '</span>', $certificate_body);
    $certificate_body = str_replace('[course_name]', '<span class="highlight highlight-course">' . $course_name . '</span>', $certificate_body);
    $certificate_body = str_replace('[date]', '<span class="highlight highlight-date">' . date($this->customlib->getSchoolDateFormat(), strtotime($date)) . '</span>', $certificate_body);
    $certificate_body = str_replace('[category]', '<span class="highlight highlight-category">' . $category_name . '</span>', $certificate_body);
?>

<body class="tc-background-page">
    <div class="tc-container">
        <div class="tc-container">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <td class="tc-header-left"><strong><?php echo 'Reff. No.: '.$certificateno; ?></strong></td>
                <td class="tc-header-center"><strong><?php echo $certificate[0]->center_header; ?></strong></td>
                <td class="tc-header-right"><strong><?php echo 'Date: '.date("d/m/Y"); ?></strong></td>
            </tr>
            <tr>
                <td colspan="3" class="tc-content">
                    <p><?php echo $certificate_body; ?></p>
                </td>
            </tr>
            <tr>
                <td class="tc-footer-left"><?php echo $certificate[0]->left_footer; ?></td>
                <td class="tc-footer-center"><?php echo $certificate[0]->center_footer; ?></td>
                <td class="tc-footer-right"><?php echo $certificate[0]->right_footer; ?></td>
            </tr>
        </table>
        </div>
    </div>
</body>
