<div class=" mini-navBar border-bottom border-2 d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <a href="/Restaurant-add_plats">
                <h6 class="fw-bold text-secondary m-0 ps-3">Table des plats</h6>
            </a>
            <a href="/Restaurant_menus">
            <h6 class="fw-bold  m-0 ps-3 ">Table des menus</h6>
            </a>
        </div>
        <div class="d-flex gap-3">
            
            <div class="me-4 border rounded-pill ps-2">
                <input type="search" class=" border-0 focus-0" placeholder="Recherche">
                <button class="btn p-0"><i class="fa-regular fa-magnifying-glass"></i></button>
            </div>
        </div>
    </div>

<h2 class="m-auto w-75 text-center mt-3">Composer le menu de la journée</h2>
<div class="m-5">


    <form class="" method="post">
        <div class="m-4">
            <div class="form-group ">
                <label for="date" class="h4">Date Du Menu</label>
                <?php 
                if(isset($_SESSION['errorMenu'])){
                    echo "<div class='alert alert-danger alert-dismissible fade show ' role='alert'>".$_SESSION['errorMenu']."
                    
                        
                            <button type='button' class='btn-close m-auto' data-bs-dismiss='alert'>
                            </button>
                    </div>";
                    unset($_SESSION['errorMenu']);
                }
                ?>
                <input type="date" name="disponible_at" class="form-control">
            </div>
            <h4 class="mt-5">Entree</h4>
            <div class="d-flex gap-5">
                <div class="w-50">
                    
                    <select class="form-control" name="entre1">
                        <option>Choisir l'entree1</option>
                        <?php foreach ($entrees as $value) : ?>
                            <option> <?php echo $value["nom_plat"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="w-50">
                    
                    <select class="form-control" name="entre2">
                        <option>Choisir l'entree 2</option>
                        <?php foreach ($entrees as $value) : ?>
                            <option> <?php echo $value["nom_plat"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <h4 class="mt-5">Plat Principal</h4>
            <div class="d-flex gap-5">
                <div class="w-50">
                    
                    <select class="form-control" name="plat1">
                        <option>Choisir le plat principal 1</option>
                        <?php foreach ($plats as $value) : ?>
                            <option> <?php echo $value["nom_plat"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="w-50">
                    
                    <select class="form-control" name="plat2">
                        <option>Choisir le plat principal 2</option>
                        <?php foreach ($plats as $value) : ?>
                            <option> <?php echo $value["nom_plat"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <h4 class="mt-5">Dessert</h4>
            <div class="d-flex gap-5">
                <div class="w-50">
                    
                    <select class="form-control" name="dessert1">
                        <option>Choisir le Dessert 1</option>
                        <?php foreach ($desserts as $value) : ?>
                            <option> <?php echo $value["nom_plat"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="w-50">
                    
                    <select class="form-control" name="dessert2">
                        <option>Choisir le Dessert 2</option>
                        <?php foreach ($desserts as $value) : ?>
                            <option> <?php echo $value["nom_plat"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="w-50">
                    
                    <select class="form-control" name="dessert3">
                        <option>Choisir le Dessert 3</option>
                        <?php foreach ($desserts as $value) : ?>
                            <option> <?php echo $value["nom_plat"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
        </div>



        <div class="w-100 text-center mt-5 d-flex">

            <a href="/Restaurant-add_plats" class="w-50 text-white btn-danger  fw-bold border-0 py-2">Retour</a>

            <button type="submit" class="w-50 text-white btn-green fw-bold border-0 py-2">Confirmer</button>
        </div>
    </form>
</div>