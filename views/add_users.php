<div>
        <div class="p-md-4 p-2 bg-light">
                    <!-- <img src="images/leaf2.png" alt="" class="leaf"> -->
                    <div class="text-center mb-4">
                        <h2 class="text-green fw-600">Login</h2>
                        <p class="text-muted mt-2">It is a long established fact that a reader will be </p>
                    </div>
                    
                    <?php $form = app\core\form\Form::begin('', "post"); ?>
                        <div class="form-group mb-4 login">
                            <?php echo $form->field($model, 'firstname'); ?>
                        </div>
                        <div class="form-group mb-2 login">
                            <?php echo $form->field($model, 'lastname'); ?>
                        </div>
                        <div class="form-group mb-4 login">
                            <?php echo $form->field($model, 'gender'); ?>
                        </div>
                        <div class="form-group mb-2 login">
                            <?php echo $form->field($model, 'email'); ?>
                        </div>
                        <div class="form-group mb-2 login">
                            <?php echo $form->field($model, 'password'); ?>
                        </div>
                        <div class="form-group mb-2 login">
                            <?php echo $form->field($model, 'role'); ?>
                        </div>
                        <div class="form-group form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <input type="submit" class="w-100 button text-white fw-bold" value="Login">
                        <!-- <div class="text-center text-muted"><p class="mt-2">Or</p></div>
                        
                        <div class="mt-1 mb-2 d-flex align-items-center">
                            <button class=" w-100" style="background-color: rgb(46, 144, 241) ;"><i class="fa-brands fa-google fs-4 text-white" ><h6 class="d-inline ms-3">Google</h6></i></button>
                        </div> -->
                        
                    <?php app\core\form\Form::end(); ?>
                </div>
</div>