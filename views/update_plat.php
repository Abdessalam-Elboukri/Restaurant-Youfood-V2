                   <div class=" mini-navBar border-bottom border-2 d-flex justify-content-between align-items-center">
                       <div class="d-flex">
                           <h6 class="fw-bold m-0 ps-3">Table des plats</h6>
                           <a href="/Restaurant_menus">
                               <h6 class="fw-bold text-secondary m-0 ps-3 ">Table des menus</h6>
                           </a>
                       </div>
                       <div class="d-flex gap-3">
                           <button class="btn btn-secondary py-1 fs-13" data-bs-toggle="modal" data-bs-target="#exampleModal"> Ajouter un plat</button>
                           <div class="me-4 border rounded-pill ps-2">
                               <input type="search" class=" border-0 focus-0" placeholder="Recherche">
                               <button class="btn p-0"><i class="fa-regular fa-magnifying-glass"></i></button>
                           </div>
                       </div>
                   </div>
                   <h2 class="m-auto w-75 text-center mt-3">Modifier les informaion du plat</h2>
                   <div class="m-5">
                       <?php $form = app\core\form\Form::begin('', "post"); ?>

                       <?php echo $form->field($model, 'id_plat')->hiddenField(); ?>
                       <div class="form-group mb-4 login">
                           <?php echo $form->field($model, 'img_plat')->fileField(); ?>
                       </div>
                       <div class="form-group mb-4 login">
                           <label for="nom_plat" class="col-form-label">Nom du plat</label>
                           <?php echo $form->field($model, 'nom_plat'); ?>
                       </div>
                       <div class="form-group mb-2 login">
                           <label for="nom_plat" class="col-form-label">Description du plat</label>
                           <?php echo $form->field($model, 'desc_plat'); ?>
                       </div>

                       <div class="form-group mb-2 login">
                           <label for="nom_plat" class="col-form-label">Categorie du plat</label>
                           <?php echo $form->selectField($model, 'cat_plat', ['Entree', 'Plat Principal', 'Dessert']); ?>
                       </div>

                       <div class="w-100 text-center mt-5 d-flex">

                           <a href="/Restaurant-add_plats" class="w-50 text-white btn-danger  fw-bold border-0 py-2">Retour</a>

                           <button type="submit" class="w-50 text-white btn-green fw-bold border-0 py-2">Modifier</button>
                       </div>
                   </div>

                   <?php app\core\form\Form::end(); ?>