    <?php  
        // if(empty($_SESSION['command'])){
            // var_dump($data);exit;
    ?>
    <div class="p-3 ">
        <a href="search-menu " class="button text-white">back to search</a>
    <h5 class="">you are seen the menu for : </h5>
    <p class="green-text">
        <?php 
        if(!empty( $_SESSION['data'][0])){
         $data1= $_SESSION['data'][0];

            echo $data1['disponible_at'];
        } ?></p>
    </div>
    <!-- ----- -->

    <?php 
        if(!empty($data1)){ 
        $form = app\core\form\Form::begin('', "post");
    ?>
    <div class="container-fluid p-3">
        <div class="mt-4 ps-2 ">
            <h5 class="fw-bold category-p">PLATS D'ENTRE </h5>
            <span class="line-green"></span>
        </div>
        <div class="d-flex flex-wrap p-md-3 gap-md-5 gap-4 justify-content-center justify-content-md-start">
            <div class="card_plat col-md-2  col-7 shadow border-0 overflow-hidden">
                <input type="radio" id="entrer-1" class="d-none input1" value="<?php echo $data1['entre1']?>" name="entre">
                <label for="entrer-1" class="label1">
                    <img src="images/priciple1.jpeg" alt="image de entrer" width="100%">
                    <div class="plats-info p-2">
                        <h5 class="text-green text-meduim"><?php echo $data1['entre1']?></h5>
                        <p class="small-text m-0"><?php ?></p>
                    </div>
                </label>
            </div>
            <!-- == -->
            <div class="card_plat col-md-2  col-7 shadow border-0 overflow-hidden">
                <input type="radio" id="entrer-2" class="d-none input1" value="<?php echo $data1['entre2'] ?>" name="entre">
                <label for="entrer-2" class="label1">
                    <img src="images/priciple1.jpeg" alt="image de entrer" width="100%">
                    <div class="plats-info p-2">
                        <h5 class="text-green text-meduim"><?php echo $data1['entre2'] ?></h5>
                        <p class="small-text m-0"><?php  ?></p>
                    </div>
                </label>

            </div>
            <?php // } 
            ?>
        </div>
    </div>
    <!-- PLATS PRINCIPALE -->
    <div class="container-fluid p-3">
        <div class="mt-2 ps-2 ">
            <h5 class="fw-bold category-p">PLATS PRINCIPALE </h5>
            <span class="line-green"></span>
        </div>
        <div class="d-flex flex-wrap p-md-3 gap-md-5 gap-4 justify-content-center justify-content-md-start">
            <div class="card_plat col-md-2  col-7 shadow border-0 overflow-hidden">
                <input type="radio" id="plat-1" class="d-none input1" value="<?php echo $data1['plat1'] ?>" name="plat">
                <label for="plat-1" class="label1">
                    <img src="images/priciple1.jpeg" alt="image de entrer" width="100%">
                    <div class="plats-info p-2">
                        <h5 class="text-green text-meduim"><?php echo $data1['plat1'] ?></h5>
                        <p class="small-text m-0"><?php  ?></p>
                    </div>
                </label>

            </div>
            <!-- == -->
            <div class="card_plat col-md-2  col-7 shadow border-0 overflow-hidden">
                <input type="radio" id="plat-2" class="d-none input1" value="<?php echo $data1['plat2'] ?>" name="plat">
                <label for="plat-2" class="label1">
                    <img src="images/priciple1.jpeg" alt="image de entrer" width="100%">
                    <div class="plats-info p-2">
                        <h5 class="text-green text-meduim"><?php echo $data1['plat2'] ?></h5>
                        <p class="small-text m-0"><?php ?></p>
                    </div>
                </label>

            </div>
        </div>
    </div>
    <!-- DESSERT -->
    <div class="container-fluid p-3">
        <div class="mt-2 ps-2 ">
            <h5 class="fw-bold category-p">Desserts </h5>
            <span class="line-green"></span>
        </div>
        <div class="d-flex flex-wrap p-md-3 gap-md-5 gap-4 justify-content-center justify-content-md-start">
            <div class="card_plat col-md-2  col-7 shadow border-0 overflow-hidden">
                <input type="radio" id="dessert-1" class="d-none input1" value="<?php echo $data1['dessert1']  ?>" name="dessert">
                <label for="dessert-1" class="label1">
                    <img src="images/priciple1.jpeg" alt="image de entrer" width="100%">
                    <div class="plats-info p-2">
                        <h5 class="text-green text-meduim"><?php echo $data1['dessert1']  ?></h5>
                        <p class="small-text m-0"><?php  ?></p>
                    </div>
                </label>

            </div>
            <!-- == -->
            <div class="card_plat col-md-2  col-7 shadow border-0 overflow-hidden">
                <input type="radio" id="dessert-2" class="d-none input1" value="<?php echo $data1['dessert2']   ?>" name="dessert">
                <label for="dessert-2" class="label1">
                    <img src="images/priciple1.jpeg" alt="image de entrer" width="100%">
                    <div class="plats-info p-2">
                        <h5 class="text-green text-meduim"><?php echo $data1['dessert2']   ?></h5>
                        <p class="small-text m-0"><?php  ?></p>
                    </div>
                </label>
            </div>
            <!-- == -->
            <div class="card_plat col-md-2  col-7 shadow border-0 overflow-hidden">
                <input type="radio" id="dessert-3" class="d-none input1" value="<?php echo $data1['dessert3']  ; ?>" name="dessert">
                <label for="dessert-3" class="label1">
                    <img src="images/priciple1.jpeg" alt="image de entrer" width="100%">
                    <div class="plats-info p-2">
                        <h5 class="text-green text-meduim"><?php echo $data1['dessert3']  ; ?></h5>
                        <p class="small-text m-0"><?php  ?></p>
                    </div>
                </label>
            </div>
        </div>
    </div>

    <input type="hidden" name="fk_user" value="<?php  echo $_SESSION['user_id']?>">
    <input type="hidden" name="menu_date" value="<?php echo $data1['disponible_at']?>">

    <!-- ====== -->
    <div class="w-100 text-center mb-3 ">
        <input type="submit" class="btn btn-green mt-4 button fw-bold text-white px-md-5" value="Commander">
    </div>
    <?php app\core\form\Form::end() ; ?>
    <?php // endforeach;  ?>

    <?php }else{ ?>
        <div class="text-center">
            <h2> No menu for this date </h2>
        </div>
        
    <?php } ; unset($_SESSION['data'])  ?>
</div>



