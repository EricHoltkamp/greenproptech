$(document).ready(function () {
    $(".default").validate({

        submitHandler: function () {
            $('form :submit').attr("disabled", "disabled");
            $('form :submit .spinner-border').removeClass('sr-only');
            $('form :submit .spinner-text').addClass('sr-only');
            var form = $('.default').serialize();
            $.ajax({
                url: '/src/form/email/phpmail',
                type: 'POST',
                data: form
            }).done(function () {
                setTimeout(function () {
                    $('.default').slideToggle('slow');

                    $('.w-form-done').addClass('animate-in');
                }, 1000);
            }).fail(function () {
                setTimeout(function () {
                    $('.default').slideToggle('slow');

                    $('.w-form-fail').addClass('animate-in');
                }, 1000);
            });
        },
    });
    $.extend($.validator.messages, {
        required: "Dieses Feld ist erforderlich",
    });
});
