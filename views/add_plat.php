<main>
    <div class=" mini-navBar border-bottom border-2 d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <h6 class="fw-bold m-0 ps-3">Table des plats</h6>
            <a href="/Restaurant_menus" ><h6 class="fw-bold text-secondary m-0 ps-3 ">Table des menus</h6></a>
        </div>
        <div class="d-flex gap-3">
            <button class="btn btn-secondary py-1 fs-13" data-bs-toggle="modal" data-bs-target="#exampleModal"> Ajouter un plat</button>
            <div class="me-4 border rounded-pill ps-2">
                <input type="search" class=" border-0 focus-0" placeholder="Recherche">
                <button class="btn p-0"><i class="fa-regular fa-magnifying-glass"></i></button>
            </div>
        </div>
    </div>
    <!--Main Section-->
    <div class="table-responsive">

        <div class=" px-8 height_table table-responsive">
            <table class="plat table table_plat table-borderless  fs-12 fw-normal">
                <thead class="">
                <tr class="rounded-3 border border-bottom border-2 ">
                    <th class="invisible p-8 p-8">image</th>
                    <th >Nom du plat</th>
                    <th >Description</th>
                    <th >Categorie</th>
                    <th class="invisible p-8">Update</th>
                    <th class="invisible p-8">Delete</th>
                </tr>
                </thead>

                <tbody>
                
                <?php  foreach($plats as $plat):?>
                <?php ?>
                <tr class="bg-white align-middle">
                    <td class=""><img src="images/kisspng-hamburger-street-food-seafood-fast-food-delicious-food-5a75083cceaf41.2676743415176192608466.png" alt="" height="50" width="50"></td>
                <td class=""><?= $plat->nom_plat?></td>
                    <td class=""><?= $plat->desc_plat?></td>
                    <td class=""><?= $plat->cat_plat ?></td>
                    <td class=""><a href="/update_plat?id=<?= $plat->id_plat ?>"><i class="fa-solid fa-pen text-gris"></i></a></td>
                    <td class=""><a href="Restaurant-add_plats/delete?id=<?= $plat->id_plat ?>"><i class="fa-solid fa-trash-can text-danger"></i></i></a></td>
                </tr>
               <?php endforeach ?>

                </tbody>
            </table>
        </div>

    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un plat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="mb-3">
                            <label for="plat-image" class="col-form-label">Image du plat</label>
                            <input type="file" class="form-control" name="img_plat" id="plat-image">
                        </div>
                        <div class="mb-3">
                            <label for="plat-name" class="col-form-label">Nom du plat</label>
                            <input type="text" class="form-control" name="nom_plat" id="plat-name">
                        </div>
                        <div class="mb-3">
                            <label for="plat-description" class="col-form-label">Description du plat</label>
                            <textarea class="form-control" name="desc_plat" id="plat-description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="plat-categorie" class="col-form-label">Categorie</label>
                            <select class="form-control" name="cat_plat" id="plat-categorie" require>
                                <option disabled >Selectioner une categorie</option>
                                <option>Entree</option>
                                <option>Plat principal</option>
                                <option>Dessert</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary rounded-pill px-3" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-green fw-bold text-white rounded-pill px-3">Ajouter</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    </div>
</main>
<!--End Main Section-->