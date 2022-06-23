<h2 class="m-auto w-75 text-center mt-3">Modifier les informaion du plat</h2>
<div class="m-5">


    <form class="" method="post">
        <div class="m-4">
            <div class="form-group ">
                <label for="date" class="h4">Date Du Menu</label>
                <input type="date" name="date " class="form-control">
            </div>
            <h4 class="mt-5">Entree</h4>
            <div class="d-flex gap-5">
                <div class="w-50">
                    
                    <select class="form-control" name="entree1">
                        <option>Choisir l'entree1</option>
                        <?php foreach ($entrees as $value) : ?>
                            <option> <?php echo $value["nom_plat"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="w-50">
                    
                    <select class="form-control" name="entree2">
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
                    
                    <select class="form-control" name="principale1">
                        <option>Choisir le plat principal 1</option>
                        <?php foreach ($plats as $value) : ?>
                            <option> <?php echo $value["nom_plat"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="w-50">
                    
                    <select class="form-control" name="principale2">
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
                    
                    <select class="form-control" name="dessert2">
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