<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-dark text-center">
                <thead>
                <tr>
                    <th >#</th>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Fiche</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($pokemons as $pokemon) { ?>
                    <tr>
                        <th><?= $pokemon->id ?></th>
                        <td><img class="img-fluid" style="height: 50px" src="<?php echo $pokemon->pok_img_url ?>" alt=""></td>
                        <td><?= $pokemon->pok_name ?></td>
                        <td>
                            <button class="btn-action-vote btn btn-gold" data-pokemon="<?php echo $pokemon->id ?>">Votez</button>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
