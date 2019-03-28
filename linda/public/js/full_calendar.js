$(document).ready(function () {
    $('#calendar').fullCalendar({
        // Display buttons on the left to click through the calendar.
        // Display the month, week or day in the center.
        // Display buttons to display the calendar in month, week, day or list view.
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listDay'
        },

        // To change button text.
        buttonText: {
            list: 'Lijst'
        },

        // Ajax call.
        events: '/api/calendar/actions',

        // Set height for the calendar.
        contentHeight: 600,

        // Set time format to 24 hour clock.
        timeFormat: 'H(:mm)',

        // Set language to Dutch.
        lang: 'nl',

        // Display week numbers.
        weekNumbers: true,

        // Set business hours. Monday
        businessHours: {
            dow: [ 1, 2, 3, 4, 5],
            start: '08:30',
            end: '17:00'
        },

        // To make sure we can make changes to the calendar.
        //editable: true,

        // If there are too many events to display on a day, you will see the + sign to display the other events.
        eventLimit: true,
        views: {
            agenda: {
                eventLimit: 8
            }
        }
    });
});