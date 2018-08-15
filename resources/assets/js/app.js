$.extend($.validator.messages, {
    required: "Пожалуйста, заполните это поле",
    email: "Неверный формат"
});

var contactForm = $("#contactForm");
contactForm.validate({
    errorPlacement: function (error, element) {
        var customError = $([
            '<span class="invalid-feedback d-block">',
            '  <span class="mb-0 d-block">',
            '  </span>',
            '</span>'
        ].join(""));

        // Add `form-error-message` class to the error element
        error.addClass("form-error-message");

        // Insert it inside the span that has `mb-0` class
        error.appendTo(customError.find("span.mb-0"));

        // Insert your custom error
        customError.insertAfter(element);
    },
});

contactForm.on('submit', function (e) {

    e.preventDefault();

    if (contactForm.valid()) {
        $.ajax({
            type: "POST",
            url: '/sendMessage',
            data: contactForm.serialize(), // serializes the form elements.
            success: function(data)
            {
                animationSendMessage();
            }
        });
    }

});

function animationSendMessage() {
    var name = $('#name').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var message = $('#message').val();

    $('#letter-name').html(name);
    $('#letter-email').html('Email: ' + email);
    $('#letter-phone').html('Телефон: ' + phone);
    $('#letter-message').html(message.slice(0, 150) + '...');

    $('.form-wrapper').css('display', 'none');
    $('.modal-footer').css('display', 'none');
    $('.envelope-wrapper').css('display', 'flex');


    setTimeout(function () {
        $('input:checkbox').removeAttr('checked');

        setTimeout(function () {
            $(".envelope").addClass('hide')
        }, 1500);

        setTimeout(function () {
            $('#exampleModal').modal('hide');

            setTimeout(function () {
                $('.form-wrapper').css('display', 'block');
                $('.modal-footer').css('display', 'block');
                $('.envelope-wrapper').css('display', 'none');
                $(".envelope").removeClass('hide');
                $('input:checkbox').attr('checked', 'checked');
            }, 200)

        }, 2500);
    }, 1000)
}