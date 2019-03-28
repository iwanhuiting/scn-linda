$(document).ready(function() {

    // Add a task
    $('#add-task').click(function(event) {
        event.preventDefault();

        var description = $('#modal-task input[name=description]').val(),
            user = $('#modal-task select[name=user_id]').val(),
            budget = $('#modal-task input[name=budget]').val(),
            completion = $('#modal-task input[name=datedropper-startdate]').val(),
            project = $('#modal-task input[name=project_id]').val();

        if(description.length && user.length && budget.length && completion.length && project.length)
        {
            $.ajax({
                url : '/projects/create/project-task',
                method : 'POST',
                data : { description: description, user: user, budget: budget, completion: completion, project: project },
                dataType : 'json',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            }).done(function(data) {
                $('#modal-task').hide();
                $('#data-tasks tbody').append('<tr class="uk-table-middle">' + '<td>' + data.description + '</td>' + '<td>' + data.completion + '</td>' + '<td>' + data.budget + '</td>' + '<td>0</td>' + '<td>0</td>' + '<td>0</td>' + '</tr>');
                $('html, body').css('overflow', 'auto');
            });
        }

    });


    // Add time to the task
    $('.time-add-button').click(function(event) {
        event.preventDefault();

        var modalId = $(this).attr('data-modalid');

        var project_id = $('#modal-time-' + modalId + ' input[name=project_id]').val(),             // Time table
            task_id = $('#modal-time-' +modalId + ' input[name=task_id]').val(),                    // Time table
            client_id = $('#modal-time-' +modalId + ' input[name=client_id]').val(),                // Support table
            description = $('#modal-time-' +modalId + ' textarea[name=description]').val(),         // Time && Support table
            time = $('#modal-time-' + modalId + ' input[name=budget]').val(),                       // Time && Support table
            invoice = ($('#invoice').is(':checked')) ? 1 : 0,                                       // Time && Support table
            complete = ($('#complete').is(':checked')) ? 1 : 0;                                     // Task table to update the status of the task

        if(time.length)
        {
            $.ajax({
                url : '/projects/create/time',
                method : 'POST',
                data : { project_id: project_id, task_id: task_id, client_id: client_id, description: description, time: time, invoice: invoice, complete: complete },
                dataType : 'json',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            }).done(function(data) {
                $('#modal-time-' + modalId).removeClass('uk-open uk-flex uk-flex-center uk-flex-middle').addClass('uk-modal-close');
            });
        }
    });


    // Remove the uk-modal-close class when the user adds time to a task twice.
    $('.tm-tbn-addtime').click(function(event) {
        event.preventDefault();

        var modalId = $(this).attr('data-modalid');
        console.log(modalId);

        var modal = $('#modal-time-' + modalId);

        if(modal.hasClass('uk-modal-close')) {
            modal.removeClass('uk-modal-close');
        }
    })

});
