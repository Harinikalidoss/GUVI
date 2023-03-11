$(document).ready(function() {
    $('#login-form').submit(function(event) {
        event.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();
        $.ajax({
            type: "POST",
            url: "../php/register.php",
            data: {
                email: email,
                password: password
            },
            success: function(response) {
                alert(response);
                window.location.href = "profile.html";
            },
            error: function(xhr, status, error) {
                var errorMessage = xhr.status + ': ' + xhr.statusText
                alert('Error - ' + errorMessage);
            }
        });
    });
});