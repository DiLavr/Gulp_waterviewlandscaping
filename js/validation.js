function validateForm()
{

    document.getElementById('status').innerHTML = "Sending...";
    formData = {
        'name': $('input[name=name]').val(),
        'email': $('input[name=email]').val(),
        'subject': $('input[name=subject]').val(),
        'formphone': $('input[name=formphone]').val(),
        'message': $('textarea[name=message]').val(),
        'updates': $('input:checkbox[name=updates]').is(':checked')
    };


    $.ajax({
        url: "mail.php",
        type: "POST",
        data: formData,
        success: function (data, textStatus, jqXHR)
        {

            $('#status').text(data.message);
            if (data.code) //If mail was sent successfully, reset the form.
                $('#contact-form').closest('form').find("input[type=text], textarea").val("");
        },
        error: function (jqXHR, textStatus)
        {
            $('#status').text(jqXHR);
        }
    });




}