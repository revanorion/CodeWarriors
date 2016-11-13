$(function() {
    //validate form fields based on rules
    $("#formtest").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: "required",
            pnumber: "required"
        },
        messages: {
            email:{
                required: "Please enter an email address.",
                email: "Please enter a <em>valid</em> email address"
            }
        },
        //submitHandler is envoked when validate passes
        submitHandler : function(form){
            $.ajax({
            url: './process.php',
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
