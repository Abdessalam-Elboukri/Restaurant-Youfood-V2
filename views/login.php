    <main class="back-login vh-100 d-flex align-items-center p-2 p-sm-0  ">
        <div class="login-container container-fluid col-md-9 col-sm-11 col-12 shadow rounded mt-5 mt-md-0 mb-5 mb-md-0 ">
            <div class="row flex-column-reverse flex-md-row">
                <div class="l-side bg-light d-flex  flex-column justify-content-center align-items-center ">
                    <div class="text-start p-2">
                        <h1 class="fw-bold">You<span class="text-green">Food</span></h1>
                        <p class="mt-5">It is a long established fact that a reader will be 
                            distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem Ipsum is
                            that it has a more-or-less normal distribution of letters,
                        </p>
                    </div>
                    
                    <div class="mt-5">
                        <ul class="list-unstyled small-text d-flex gap-4 fw-bold">
                            <li><a href="" >YouCode</a> </li>
                            <li><a href="" >Contact Nous</a></li>
                            <li><a href="" >Conditions d'utilisation</a></li>
                        </ul>
                    </div>

                </div>
                <div class="r-side p-md-4 p-2 bg-light">
                    <!-- <img src="images/leaf2.png" alt="" class="leaf"> -->
                    <div class="text-center mb-4">
                        <h2 class="text-green fw-600">Login</h2>
                        <p class="text-muted mt-2">It is a long established fact that a reader will be </p>
                    </div>
                    
                    <?php $form = app\core\form\Form::begin('', "post"); ?>
                        <div class="form-group mb-4 login">
                            <?php echo $form->field($model, 'email'); ?>
                        </div>
                        <div class="form-group mb-2 login">
                            <?php echo $form->field($model, 'password'); ?>
                            <div class="text-end">
                                <a href="" class="text-muted small-text text-end">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="form-group form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="w-100 text-white fw-bold">Login</button>
                        <!-- <div class="text-center text-muted"><p class="mt-2">Or</p></div>
                        
                        <div class="mt-1 mb-2 d-flex align-items-center">
                            <button class=" w-100" style="background-color: rgb(46, 144, 241) ;"><i class="fa-brands fa-google fs-4 text-white" ><h6 class="d-inline ms-3">Google</h6></i></button>
                        </div> -->
                        
                    <?php app\core\form\Form::end(); ?>
                </div>
            </div>

        </div>
    </main>
