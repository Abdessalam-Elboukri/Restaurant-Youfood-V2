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
                        
                        <!-- <div class="form-group mb-2 login">
                            <label for="nom_plat" class="col-form-label">Categorie du plat</label>
                            <?php echo $form->field($model, 'cat_plat'); ?>
                        </div> -->
                        <div class="form-group mb-2 login">
                            <label for="nom_plat" class="col-form-label">Categorie du plat</label>
                            <?php echo $form->selectField($model, 'cat_plat',['Entree', 'Plat Principal', 'Dessert']); ?>
                        </div>

                        <div class="w-100 text-center mt-5 d-flex" >
                        
                        <a href="/Restaurant-add_plats" class="w-50 text-white btn-danger  fw-bold border-0 py-2">Retour</a>
                        
                        <button type="submit" class="w-50 text-white btn-green fw-bold border-0 py-2">Modifier</button>
                        </div>
                        </div>
                        
                    <?php app\core\form\Form::end(); ?>