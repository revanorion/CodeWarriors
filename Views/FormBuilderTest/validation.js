$(function() {
    // Adds function to check whether email is an fau.edu email
    debugger;
    $.validator.addMethod('customemail', function(value, element) {
        var allowedDomains = [ 'fau.edu' ];
        var str = value;
        domain = str.split('@');

        if ($.inArray(domain[1], allowedDomains) !== -1) {
            //acceptable
            return true;
        }else{
            //not acceptable
            return false;
        }
    }),
    $.validator.addMethod('toggleIt', function(element){
        toggleViewAndDisabled(element);
    }),
        //validate form fields based on rules
        //not all form fields have been added into rules
    $("#jqueryform-7a00b6").validate({
        rules: {
            c2: {
                required: true,
                email: true,
                customemail: true
            },
            c1: "required",
            c49: "required"
        },
        messages: {
            c2:{
                required: "Please enter an email address.",
                email: "Please enter a <em>valid</em> email address.",
                customemail: "Please enter an @fau.edu email address."
            },
            c1:{
                required: "Please enter your first name.",
            },
            c49:{
                required: "Please enter your last name.",
            }
    },
                                //submitHandler is invoked when validate passes
            submitHandler : function(form){
                $.ajax({
                    url: 'process.php',
                    type: 'POST',
                    data: $(form).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        alert('Response: ' + response);
                    }
                });
            }
        });
});

function toggleViewAndDisabled(element){
    $element.prop('disabled', !$element.prop('disabled'));
    if($element.prop('disabled')){
        $element.hide();
    }
    else{
        $element.show();
    }
    });
}