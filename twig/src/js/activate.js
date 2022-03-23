$(function () {
    // Validator download from https://jqueryvalidation.org/
    $( document ).ready( function () {
        $( "#activate-form" ).validate( {
            rules: {
                key: {
                    required: true
                },
            },
            messages: {
                key: {
                    required: "Please enter the key mailed to you"
                },
            },
            errorElement: "p",
            errorPlacement: function ( error, element ) {
                // Add the `invalid-feedback` class to the error element
                error.addClass( "invalid-feedback" );

                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.next( "label" ) );
                } else {
                    error.insertAfter( element );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
            }
        });
    });

    // when the form is submitted
    $('#activate-form').on('submit', function (e) {

        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {
            var url = "php/activate.php";

            // POST values in the background the the script URL
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    if (data.type === 'danger') {
                        // data = JSON object that contact.php returns

                        // we recieve the type of the message: success x danger and apply it to the
                        var messageAlert = 'alert-' + data.type;
                        var messageText = data.message;

                        // let's compose Bootstrap alert box HTML
                        var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';

                        // If we have messageAlert and messageText
                        if (messageAlert && messageText) {
                            // inject the alert to .messages div in our form
                            $('#activate-form').find('.messages').html(alertBox);
                            // empty the form
                            $('#activate-form')[0].reset();
                        }
                    } else{
                        window.location.replace("/twig/");
                    }
                }
            });
            return false;
        }
    })
});

