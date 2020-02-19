$('button.btn-compare-pokemons').on('click', function () {

    var selectPokemon1 = $('#inputPokemon1').val();
    var selectPokemon2 = $('#inputPokemon2').val();

    if (selectPokemon1 != null && selectPokemon2 != null) {
        $('p.error').text('');
        console.log(selectPokemon1, selectPokemon2);

        var url = site_url + 'compare-pokemons/' + selectPokemon1 + '/' + selectPokemon2;

        $.ajax({
            url : url,
            type : 'POST',
            success : function (data) {
                //console.log(data);
                var pokeInfos1 = data.pokemon1;
                var pokeInfos2 = data.pokemon2;
                var content = data.content;

                $('div.pokemonDisplay').fadeIn();
                $('h6.pok_name_A').text(pokeInfos1.pok_name);
                $('img.pok_img_url_A').attr('src', pokeInfos1.pok_img_url);


                $('h6.pok_name_B').text(pokeInfos2.pok_name);
                $('img.pok_img_url_B').attr('src', pokeInfos2.pok_img_url);


            }
        })
    } else {
        $('p.error').text('Champs Incomplets');
    }



});