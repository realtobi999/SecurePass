$(document).ready(function () {
    const form = $('#password-form');
    const passwordDisplay = $('#passwordDisplay'); // Updated selector

    form.submit(function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form.serialize(),
            dataType: 'json',
            success: function (response) {
                var generatedPassword = response.password;

                // Update the displayed password
                passwordDisplay.text(generatedPassword);

                // Optionally, you can also clear the input field
                // $('#password').val('');
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
});
