$(document).ready(function() {

    $('#project_id').on('change', function() {
        var selected = $('#project_id').val();

        $.ajax({
            url : '/projects/retrieve-tasks',
            method : 'POST',
            data : { selected: selected },
            dataType : 'json',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            success: function(data) {
                $('#task_id')
                    .html(data)
                    .prop('disabled', false);
            }
        })

    });

});
