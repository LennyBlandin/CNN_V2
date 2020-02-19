var clicks = 0;

$('a.switch').on('click', function () {
    if (clicks === 0) {
        $('div.login').hide();
        $('a.switch').text('Se Connecter');
        $('div.register').show();
        clicks++;
    } else {
        $('div.login').show();
        $('a.switch').text('S\'inscrire');
        $('div.register').hide();
        clicks--;
    }
});

$('button.btn-signup').on('click', function () {

    var formData = $('form.form-signup').serialize();
    var url = site_url + 'register/attempt';
    var elementSelected = $('p.field-error');

    $.ajax({
        url : url,
        type : 'POST',
        data : formData,
        success : function (data) {
           if (data.error) {

               elementSelected.each(function () {
                   for (var key in data.error) {
                        if ($(this).attr('data-field') === key) {
                            $(this).html(data.error[key]);
                        }
                   }
               })

           } else {

               //console.log(data.success);

               Swal.fire({
                   position : 'center',
                   icon : 'success',
                   title : 'Votre compte a été créé avec succès',
                   showConfirmButton : false,
                   timer : 1500
               });

           }
        }
    });

    console.log(formData);

});

$('button.btn-signin').on('click', function () {
    //console.log('Coucou');
    var pseudo = $('#loginPseudo').val();
    var password = $('#loginPassword').val();

    if (pseudo !=null && password !=null) {

        var formData = $('form.form-signin').serialize();
        var url = site_url + 'login/attempt';

        $.ajax({
            url : url,
            type: 'POST',
            data : formData,
            success : function (data) {

                if (data.error) {

                    elementSelected.each(function () {
                        for (var key in data.error) {
                            if ($(this).attr('data-field') === key) {
                                $(this).html(data.error[key]);
                            }
                        }
                    })

                } else {

                    //console.log(data.success);
                    document.location.href = site_url;


                }

            }
        })

    }
});