$(document).ready(function() {
    updateTitleCountdown();
    updateSubtitleCountdown();
    updateDescriptionCountdown();

    $('#title').on('input', updateTitleCountdown);
    $('#subtitle').on('input', updateSubtitleCountdown);
    $('#description').on('input', updateDescriptionCountdown);
});

updateTitleCountdown = function() {
    var maxLength = 20,
        remaining = maxLength - $('#title').val().length;

    $('#title-countdown span').text(remaining);
};

updateSubtitleCountdown = function () {
    var maxLength = 30,
        remaining = maxLength - $('#subtitle').val().length;

    $('#subtitle-countdown span').text(remaining);
};

updateDescriptionCountdown = function() {
    var maxLength = 200,
        remaining = maxLength - $('#description').val().length;

    $('#description-countdown span').text(remaining);
};
