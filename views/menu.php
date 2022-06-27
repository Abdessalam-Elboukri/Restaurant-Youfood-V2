<main>
    <div class=" mini-navBar border-bottom border-2 d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <a href="/Restaurant-add_plats">
                <h6 class="fw-bold text-secondary m-0 ps-3">Table des plats</h6>
            </a>
            <h6 class="fw-bold  m-0 ps-3 ">Table des menus</h6>
        </div>
        <div class="d-flex gap-3">
            <a href="/Restaurant-add_menus"><button class="btn btn-secondary py-2 fs-13">Ajouter un menu</button></a>
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
                        <th>Entree1</th>
                        <th>Entree2</th>
                        <th>Plat Principal1</th>
                        <th>Plat Principal2</th>
                        <th>Dessert1</th>
                        <th>Dessert2</th>
                        <th>Dessert3</th>
                        <th>Disponibilité</th>
                        <th class="invisible p-8">Update</th>
                        <th class="invisible p-8">Delete</th>

                    </tr>
                </thead>

                <tbody>
                    <?php 
                    
                    foreach ($menus as $menus) : ?>
                        <tr>
                            <td><?= $menus->entre1 ?></td>
                            <td><?= $menus->entre2 ?></td>
                            <td><?= $menus->plat1 ?></td>
                            <td><?= $menus->plat2 ?></td>
                            <td><?= $menus->dessert1 ?></td>
                            <td><?= $menus->dessert2 ?></td>
                            <td><?= $menus->dessert3 ?></td>
                            <td><?= $menus->disponible_at ?></td>
                            <td class=""><a href="/update_menu?id=<?= $menus->id_menu ?>"><i class="fa-solid fa-pen text-gris"></i></a></td>
                            <td class=""><a href="Restaurant-add_menus/delete?id=<?= $menus->id_menu ?>"><i class="fa-solid fa-trash-can text-danger"></i></i></a></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>

    </div>

    </div>
</main>
<!--End Main Section-->