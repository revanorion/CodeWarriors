$(function() {
    // Adds function to check whether email is an fau.edu email
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
    //validate form fields based on rules
    $("#formtest").validate({
        rules: {
            email: {
                required: true,
                email: true,
                customemail: true
            },
            password: "required",
            pnumber: "required"
        },
        messages: {
            email:{
                required: "Please enter an email address.",
                email: "Please enter a <em>valid</em> email address",
                customemail: "Please use a valid fau.edu email address"
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
