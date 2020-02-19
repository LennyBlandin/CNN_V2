

$('button.btn-action-vote').on('click', function () {

    var pokemon = $(this).attr("data-pokemon");
    var url = site_url + 'user/action/votefavoris';

    $.ajax({
        url : url,
        type : 'POST',
        data : {id_pokemon:pokemon},
        success : function (data) {
           if (data.error) {
               Swal.fire({
                   position : 'center',
                   icon : 'success',
                   title : 'Un problème est survenu',
                   showConfirmButton : false,
                   timer : 1500
               });

           } else {

               //console.log(data.success);

               Swal.fire({
                   position : 'center',
                   icon : 'success',
                   title : "Vote<pris en compte",
                   showConfirmButton : false,
                   timer : 1500
               });

           }
        }
    });


});
