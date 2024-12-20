// script.js
$(document).ready(function () {
    $('#registrationForm').submit(function (e) {
        e.preventDefault(); // Prevent the form from submitting normally

        var formData = $(this).serialize(); // Serialize form data

        $.ajax({
            type: "POST",
            url: "submit.php",
            data: formData,
            success: function (response) {
                $('#response').html(response); // Display the response in the div
                $('#registrationForm')[0].reset(); // Reset the form
            },
            error: function () {
                alert("An error occurred while submitting the form.");
            }
        });
    });
});
