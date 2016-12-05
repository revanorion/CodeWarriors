/*jslint browser: true, plusplus: true */
/*global $, jQuery, alert*/
$(document).ready(function () {
    'use strict';
    $(".panel-heading").click(function () {
        $(this).next(".panel-body").slideToggle(500);
    });
    $('.datePicker').datetimepicker({
        format: 'MM/DD/YYYY'
    });
});
