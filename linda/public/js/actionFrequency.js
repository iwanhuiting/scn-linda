$(document).ready(function() {

    displayValueType();
    displayValueOnFailRequest();

});

displayValueType = function() {
    $('#actiontype_id').on('change',function() {
        var type = $(this).val();
        if(type == 1 || type == 0){
            $('#created').addClass('uk-hidden');
        } else {
            $('#created').removeClass('uk-hidden');
        }
    });
};

displayValueOnFailRequest = function() {
    var type = $('#actiontype_id').val();
    if(type > 1) {
        $('#created').removeClass('uk-hidden');
    }
};