<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-map-o"></i> <?php //echo $this->lang->line('chat') ?>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content" style="position: relative;">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div id="frame">
                    <div id="sidepanel">
                        <input type="hidden" name="chat_connection_id" value="0">
                        <input type="hidden" name="chat_to_user" value="0">
                        <input type="hidden" name="last_chat_id" value="0">
                        <div id="search">
                            <label for="">Discussion system</label>
                        </div>
                        <div id="contacts">
                            <ul>
                                <?php foreach ($discussions as $discussion) {
                                    if ($discussion->student_id > 0) {
                                        $userInfo   = $this->studentcourse_model->student_info($discussion->student_id);
                                    } else {
                                        $userInfo   = $this->studentcourse_model->guest_info($discussion->guest_id);
                                    }
                                    $courseInfo     = $this->studentcourse_model->course_info($discussion->course_id);
                                    $sectionInfo    = $this->studentcourse_model->section_info($discussion->section_id);
                                    $lessonInfo     = $this->studentcourse_model->lesson_info($discussion->lesson_id);
                                    
                                    if ($userInfo->image == "") {
                                        $img = $this->media_storage->getImageURL("uploads/staff_images/no_image.png");
                                    } else {
                                        //$img = $this->media_storage->getImageURL($userInfo->image);
                                        $img = $this->media_storage->getImageURL("uploads/staff_images/no_image.png");
                                    }
                                
                                ?>
                                    <li class="contact" data-chat-connection-id="<?php echo $discussion->cd_id; ?>">
                                        <div class="wrap">
                                            <img src="<?php echo $img; ?>" alt="">
                                            <div class="meta">
                                                <p></p>
                                                <p class="name"><?php echo $userInfo->firstname.' '.$userInfo->middlename.' '.$userInfo->lastname ?></p>
                                                <p class="preview"><?= $courseInfo->title; ?><?php if (!empty($sectionInfo)) { echo '<br>Section : '.$sectionInfo->section_title; } ?><?php if (!empty($lessonInfo)) { echo '<br>Lesson : '.$lessonInfo->lesson_title; } ?><br>
                                                <?php
                                                    $content = $discussion->discuss_content;
                                                    $words = explode(' ', $content);
                                                    $first_five_words = implode(' ', array_slice($words, 0, 5));
                                                    echo $first_five_words;
                                                ?>
                                                </p>
                                             </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="chatcontent">
                        <div class="contact-profile">
                            <img src="" alt="" />
                            <p></p>
                        </div>
                        <div id="messages" style="padding-right: 10px;">
                            <ul style="list-style-type: none;">
                            </ul>
                        </div>
                        <div class="message-input ">
                            <div class="wrap relative">
                                <input type="text" placeholder="<?php echo $this->lang->line('write_your_message'); ?>" class="chat_input" />
                                <input type="file" class="file_input" accept="*/*" style="display: none;" id="fileInput" />
                                <button class="file-upload" type="button" onclick="document.getElementById('fileInput').click();" style="right: 40px;"><i class="fa fa-paperclip"></i></button>
                                <button class="submit input_submit" disabled="disabled"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-header -->
        </div><!-- /.box-header -->
    </section>
</div><!-- /.box-body -->
</div>
</div><!--/.col (left) -->
<!-- right column -->
</div>
</section><!-- /.content -->
</div><!-- /.content-wrapper -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let connectionId;

    $('.contact').click(function() {
        connectionId = $(this).data('chat-connection-id');
        var contactName = $(this).find('.name').text();
        var contactImage = $(this).find('img').attr('src');

        loadChatMessages(connectionId);
        $('.contact-profile img').attr('src', contactImage);
        $('.contact-profile p').text(contactName);

        
        setInterval(function() {
            loadChatMessages(connectionId);
        }, 50000);
    });

    function loadChatMessages(connectionId) {
        $.ajax({
            type: "POST",
            url: '<?= base_url(); ?>onlinecourse/coursereport/discussion_chat',
            dataType: "JSON",
            data: { chat_connection_id: connectionId },
            success: function(data) {
                $("#messages ul").html(data.page);
            },
            error: function() {
                console.error('Error loading messages.');
            }
        });
    }

    function sendMessage() {
        var message = $('.chat_input').val();
        var fileInput = $('.file_input')[0];
        var formData = new FormData();
        
        if (message.trim() !== '') {
            formData.append('message', message);
        }
        
        if (fileInput.files.length > 0) {
            formData.append('file', fileInput.files[0]);
        }

        if (message.trim() === '' && fileInput.files.length === 0) return; 
        
        formData.append('chat_connection_id', connectionId);
        $.ajax({
            type: "POST",
            url: '<?= base_url(); ?>onlinecourse/coursereport/send_message',
            data: formData,
            processData: false,
            contentType: false,
            success: function() {
                $('.chat_input').val(''); 
                $('.file_input').val('');
                loadChatMessages(connectionId);
            },
            error: function() {
                console.error('Error sending message.');
            }
        });
    }
    
    
    
    $('.submit').click(function() {
        sendMessage();
    });

    $('.input_submit i.fa-paper-plane').click(function() {
        sendMessage();
    });

    
    $('.chat_input').keypress(function(e) {
        if (e.which === 13) {
            sendMessage();
            return false;
        }
    });
});

</script>
