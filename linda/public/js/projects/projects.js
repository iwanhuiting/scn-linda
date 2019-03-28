$(document).ready(function() {

    // Add a client to the client select.
    $('#add-client').click(function(event) {
        event.preventDefault();

        var client = $('#modal-client input[name=client_name]').val(),
            code = $('#modal-client input[name=client_code]').val();

        if(client.length && code.length)
        {
            $.ajax({
                url : '/projects/create/client',
                method : 'POST',
                data : { client: client, code: code },
                dataType : 'json',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            }).done(function(data) {
                var newOption = '<option value="' + data.id + '" selected>' + data.company + '</option>';
                var separator = '<option value="0" disabled>──────────</option>';
                $('#client_id').prepend(newOption, separator);
                $('#modal-client').hide();
                $('html,body').css('overflow','auto');
            });
        }
    });

    // Add a team member to the team, and remove the selected team member from the team member select.
    $('#add-teammember').click(function(event) {
        event.preventDefault();

        var modal = $('#modal-selected-teammember'),
            userId = modal.val(),
            isManager = ($('#projectmanager').is(':checked')) ? 1 : 0,
            projectId = $('#project_id').val(),
            userName = $('#modal-selected-teammember option:selected').text(),
            userBudget = $('#budgetTeamMember').val();

        if(userId > 0)
        {
            $.ajax({
                url : '/projects/create/teammember',
                method : 'POST',
                data : { user: userId, manager: isManager, project: projectId, budget: userBudget },
                dataType : 'json',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            }).done(function(data) {
                var icon = '<i uk-icon="icon: star; ratio: 0.75" class="uk-margin-small-left">',
                    inputBudget = '<td>' + '<input type="text" name="user-budget" class="uk-width-1-1@m" value="' + userBudget + '">' + '</td>',
                    buttonRemoveUser = '<td class="uk-text-right">' + '<button type="button" class="uk-button uk-button-small uk-button-danger remove-user" data-user-id="' + userId + '" data-user-name="' + userName + '">' + '<i uk-icon="icon: trash; ratio: 0.75"></i>' + '</button>' + '</td>';

                $('#data-teammembers tbody').append('<tr>' + '<td>' + userName + ((isManager == 1) ? icon : '') + '</td>' + inputBudget + buttonRemoveUser + '</tr>');

                $('#modal-teammember').removeClass('uk-open uk-flex uk-flex-center uk-flex-middle').addClass('uk-modal-close');
                $('html,body').css('overflow','auto');
                $('#is-manager').prop('checked', false);
                modal.find(':selected').remove();
            });
        }
    });

    // Remove user from team, also from db.
    $('#data-teammembers').on('click', '.remove-user', function(event) {
        event.preventDefault();
        var select = $('#modal-selected-teammember'),
            user = $(this).data('user-id'),
            name = $(this).data('user-name'),
            projectId = $('#project_id').val();

        if(user > 0)
        {
            $.ajax({
                url : '/projects/delete/teammember',
                method : 'POST',
                data : { user: user, project: projectId },
                dataType : 'json',
                headers : { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            });

            select.append('<option value="' + user + '">' + name + '</option>');
            $(this).parents().eq(1).remove();
        }

    });

    // Remove the uk-modal-close class when the user adds more members to a project.
    $('#modal-teammember').click(function() {

        var modal = $('#modal-teammember');

        if(modal.hasClass('uk-modal-close')) {
            modal.removeClass('uk-modal-close');
        }
    });

});
