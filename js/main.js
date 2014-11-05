$(document).ready(function() {

    $('#response').hide();

    // Submit form
    $('#sendSMS').bootstrapValidator({
        message: 'This field is not valid...',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        submitHandler: function(validator, form, submitButton) {

            // get data from form
            var examplePhone = $("#examplePhone");
            var examplePhoneValue = $.trim(examplePhone.val());
            var examplePhoneValueInt = '+' + examplePhoneValue;

            var exampleMessage = $("#exampleMessage");
            var exampleMessageValue = $.trim(exampleMessage.val());

            // Send SMS function
            function sendSMS() {
                $.ajax({
                    url: 'php/send-sms.php',
                    type: 'POST',
                    dataType: 'json',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    data: {
                        number: examplePhoneValueInt,
                        smsContent: exampleMessageValue
                    },
                    success: handleData,
                    error: handleData
                })
            };

            function handleData(data) {
                //do some stuff
            }

            sendSMS();

            $('#sendSMS').fadeOut();
            $('#response').html('You sendt the following message to <strong>' + examplePhoneValueInt + '</strong>: ' + exampleMessageValue);
            $('#response').fadeIn();


        },
        fields: {
            examplePhone: {
                validators: {
                    notEmpty: {
                        message: 'Please enter you mobilenumber.'
                    },
                    stringLength: {
                        min: 10,
                        max: 30,
                        message: 'The number needs to be between 10 and 30 digits.'
                    },
                    digits: {
                        message: 'This is not a valid number.'
                    }
                }
            },
            exampleMessage: {
                validators: {
                    notEmpty: {
                        message: 'Please enter a message.'
                    },
                    stringLength: {
                        min: 5,
                        max: 120,
                        message: 'Please enter between 5 and 120 characters.'
                    }
                }
            },
        }
    });

});
