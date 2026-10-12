<div class="balance-area mg-top-90"></div>
    <br>
    <div class="row" style="margin:0.1rem">
            <div class="col-12 text-center">
                <a href="<?= base_url(); ?>admin/staff/class_timetable" class="btn btn-sm w-100" style="text-decoration: none; font-size:12px; background-color: #189C07 !important; color:#ffffff"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Timetable</a>
            </div>
    </div>
    
    <form name="myForm" id="myForm" action="<?= base_url('admin/web/save_lesson_plan'); ?>" class="form-horizontal" method="post" accept-charset="utf-8">    
        <div class="row pt-4" style="margin:0.1rem">
            <div class="col-12 py-2">
                <input type="text" name="day" id="day" class="form-control w-100" value="<?= $ttinfo->day; ?>" readonly>
            </div>
            
            <div class="col-12 py-2">
                <select name="lesson_id" id="lesson_id" class="form-control">
                    <option value="">Select Lesson</option>
                    <?php foreach ($lessons as $lesson) { ?>
                    <option value="<?= $lesson->id; ?>"><?= $lesson->name; ?></option>
                    <?php } ?>
                </select>
            </div>
            
            <div class="col-12 py-2">
                <select name="topic_id" id="topic_id" class="form-control">
                    <option value="">Select Topic</option>
                </select>
            </div>
            
            <div class="col-12 py-2">
                <input type="text" name="sub_topic" class="form-control w-100" value="" placeholder="Sub Topic">
            </div>
            
            <div class="col-12 py-2">
                <input type="date" name="date" id="date" class="form-control w-100" value="">
            </div>
            
            <div class="col-12 py-2">
                <input type="text" name="time_from" class="form-control w-100" value="<?= $ttinfo->time_from; ?>" placeholder="Time From" readonly>
            </div>
            
            <div class="col-12 py-2">
                <input type="text" name="time_to" class="form-control w-100" value="<?= $ttinfo->time_to; ?>" placeholder="Time To" readonly>
            </div>
            
            <div class="col-12 py-2">
                <input type="text" name="lacture_youtube_url" class="form-control w-100" value="" placeholder="Lecture YouTube URL">
            </div>
            
            <div class="col-12 py-2">
                <textarea name="teaching_method" class="form-control w-100">Teaching Method</textarea>
            </div>
            
            <div class="col-12 py-2">
                <textarea name="general_objectives" class="form-control w-100">General Objective</textarea>
            </div>
            
            <div class="col-12 py-2">
                <textarea name="previous_knowledge" class="form-control w-100">Previous Knowledge</textarea>
            </div>
            
            <div class="col-12 py-2">
                <textarea name="comprehensive_questions" class="form-control w-100">Comprehensive Questions</textarea>
            </div>
            
            <div class="col-12 py-2">
                <button type="submit" id="submit" class="btn btn-primary w-100" style="width:100%; height: 37px;">Submit</button>
            </div>
        </div>
    </form>
    
    
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
        <span id="success_message" style="text-align:center"></span>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
        <span id="error_message" style="text-align:center"></span>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
    $('#lesson_id').change(function() {
        var lessonId = $(this).val();
        if (lessonId) {
            $.ajax({
                url: '<?= base_url("admin/web/get_topics_by_lesson_id"); ?>',
                method: 'POST',
                data: { lesson_id: lessonId },
                async : true,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#topic_id').html('<option value="">Select Topic</option>');
                        $.each(response.topics, function(index, topic) {
                            $('#topic_id').append('<option value="' + topic.id + '">' + topic.name + '</option>');
                        });
                    } else {
                        $('#error_alert').show();
                        $('#error_message').text('No topics found for this lesson.');
                    }
                },
                error: function() {
                    $('#error_alert').show();
                    $('#error_message').text('An error occurred while fetching the topics.');
                }
            });
        } else {
            $('#topic_id').html('<option value="">Select Topic</option>');
        }
    });
    
    $('#date').on('change', function() {
        var selectedDate = new Date($(this).val());
        var dayOfWeek = $('#day').val();
        var dayName = getDayName(selectedDate);
        
        if (dayName !== dayOfWeek) {
            $('#errorModal').modal('show');
            $('#error_message').text('The selected date does not match the day of timetable.');
            $('#date').val('');
        } else {
            $('#error_alert').hide();
        }
    });

    function getDayName(date) {
        var daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        return daysOfWeek[date.getDay()];
    }
    
    $('#myForm').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            url: '<?= base_url('admin/web/save_lesson_plan'); ?>', 
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('#success_message').text(response.message || 'Lesson Plan saved successfully!');
                    $('#successModal').modal('show');
                } else {
                    $('#error_message').text(response.message || 'There was an error submitting the lesson plan.');
                    $('#errorModal').modal('show');
                }
            },
            error: function() {
                $('#error_message').text('An unexpected error occurred.');
                $('#errorModal').modal('show');
            }
        });
    });
});
</script>