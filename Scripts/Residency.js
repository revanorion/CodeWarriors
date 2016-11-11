/*jslint browser: true, plusplus: true */
/*global $, jQuery, alert*/
$(document).ready(function () {
    'use strict';
    debugger;
    $('#startNewApplication').on('click',function(){
       window.alert('clicked');
    });


    $(".panel-heading").click(function () {
        $(this).next(".panel-body").slideToggle(500);
    });
});
