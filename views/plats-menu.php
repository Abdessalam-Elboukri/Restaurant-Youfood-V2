<form method="post" action="">
  <div class="form-group">
      <input type="date" name="date_menu" >
      <input type="submit" name="save">
  </div>
</form>



    <?php if(count($data1->dataList) !== 0){
        '<span>you are seen the menu for : </span>';
        echo $data1->dataList[0]['disponible_at'];
} ?>
<?php if(!empty($data1)){ ?>
<?php ?>
    <?php $form = app\core\form\Form::begin('', "post"); ?>
    <?php foreach ($data1->dataList as $value):?>
    <div class="container-fluid p-2">
        <div class="mt-4 ps-2 ">
            <h5 class="fw-bold category-p">PLATS D'ENTRER </h5>
            <span class="line-green"></span>
        </div>
        <div class="d-flex flex-wrap p-md-3 gap-md-5 gap-4 justify-content-center justify-content-md-start">
            <div class="col-md-3 col-9 shadow border-0 overflow-hidden">
                <input type="radio" id="entrer-1" class="d-none input1" value="" name="plat_entrer">
                <label for="entrer-1" class="label1">
                    <img src="images/entrer1.jpeg" alt="image de entrer" width="100%">
                    <div class="plats-info p-2">
                        <h5 class="text-green text-meduim"><?php echo $value['entre1']?></h5>
                        <p class="small-text m-0"><?php ?></p>
                    </div>
                </label>
            </div>
            <!-- == -->
            <div class="col-md-3 col-9 shadow border-0 overflow-hidden">
                <input type="radio" id="entrer-2" class="d-none input1" value="<?php ?>" name="plat_entrer">
                <label for="entrer-2" class="label1">
                    <img src="images/entrer2.jpeg" alt="image de entrer" width="100%">
                    <div class="plats-info p-2">
                        <h5 class="text-green text-meduim"><?php echo $value['entre2'] ?></h5>
                        <p class="small-text m-0"><?php  ?></p>
                    </div>
                </label>

            </div>
            <?php // } 
            ?>
        </div>
    </div>
    <!-- PLATS PRINCIPALE -->
    <div class="container-fluid p-2">
        <div class="mt-4 ps-2 ">
            <h5 class="fw-bold category-p">PLATS PRINCIPALE </h5>
            <span class="line-green"></span>
        </div>
        <div class="d-flex flex-wrap p-md-3 gap-md-5 gap-4 justify-content-center justify-content-md-start">
            <div class="col-md-3 col-9 shadow border-0 overflow-hidden">
                <input type="radio" id="plat-1" class="d-none input1" value="<?php  ?>" name="plat_principale">
                <label for="plat-1" class="label1">
                    <img src="images/entrer1.jpeg" alt="image de entrer" width="100%">
                    <div class="plats-info p-2">
                        <h5 class="text-green text-meduim"><?php echo $value['plat1'] ?></h5>
                        <p class="small-text m-0"><?php  ?></p>
                    </div>
                </label>

            </div>
            <!-- == -->
            <div class="col-md-3 col-9 shadow border-0 overflow-hidden">
                <input type="radio" id="plat-2" class="d-none input1" value="<?php  ?>" name="plat_principale">
                <label for="plat-2" class="label1">
                    <img src="images/entrer2.jpeg" alt="image de entrer" width="100%">
                    <div class="plats-info p-2">
                        <h5 class="text-green text-meduim"><?php echo $value['plat2'] ?></h5>
                        <p class="small-text m-0"><?php ?></p>
                    </div>
                </label>

            </div>
        </div>
    </div>
    <!-- DESSERT -->
    <div class="container-fluid p-2">
        <div class="mt-4 ps-2 ">
            <h5 class="fw-bold category-p">Desserts </h5>
            <span class="line-green"></span>
        </div>
        <div class="d-flex flex-wrap p-md-3 gap-md-5 gap-4 justify-content-center justify-content-md-start">
            <div class="col-md-3 col-9 shadow border-0 overflow-hidden">
                <input type="radio" id="dessert-1" class="d-none input1" value="<?php  ?>" name="plat_dessert">
                <label for="dessert-1" class="label1">
                    <img src="images/entrer1.jpeg" alt="image de entrer" width="100%">
                    <div class="plats-info p-2">
                        <h5 class="text-green text-meduim"><?php echo $value['dessert1']  ?></h5>
                        <p class="small-text m-0"><?php  ?></p>
                    </div>
                </label>

            </div>
            <!-- == -->
            <div class="col-md-3 col-9 shadow border-0 overflow-hidden">
                <input type="radio" id="dessert-2" class="d-none input1" value="<?php  ?>" name="plat_dessert">
                <label for="dessert-2" class="label1">
                    <img src="images/entrer2.jpeg" alt="image de entrer" width="100%">
                    <div class="plats-info p-2">
                        <h5 class="text-green text-meduim"><?php echo $value['dessert2']   ?></h5>
                        <p class="small-text m-0"><?php  ?></p>
                    </div>
                </label>
            </div>
            <!-- == -->
            <div class="col-md-3 col-9 shadow border-0 overflow-hidden">
                <input type="radio" id="dessert-3" class="d-none input1" value="<?php  ?>" name="plat_dessert">
                <label for="dessert-3" class="label1">
                    <img src="images/entrer2.jpeg" alt="image de entrer" width="100%">
                    <div class="plats-info p-2">
                        <h5 class="text-green text-meduim"><?php echo $value['dessert3']  ; ?></h5>
                        <p class="small-text m-0"><?php  ?></p>
                    </div>
                </label>
            </div>
        </div>
    </div>

    <input type="hidden" name="user_name" value="<?php // echo $_SESSION['user_id']?>">

    <!-- ====== -->
    <div class="w-100 text-center mb-3 ">
        <input type="submit" class="btn btn-green mt-4 button fw-bold text-white px-md-5" value="Commander">
    </div>
    <?php app\core\form\Form::end() ; ?>
    <?php endforeach;  ?>

    <?php }else{ ?>
        <h2> No menu for this date </h2>
    <?php } ?>
</div>

