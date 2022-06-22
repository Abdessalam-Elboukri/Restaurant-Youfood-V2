<main class="plat-semaine-content">
    <div class="bg-banner d-flex justify-content-center align-items-center z-index-2">
        <h1 class="text-green fw-bold font_dancing">Vos Plats</h1>
    </div>

    <div class="container-fluid p-0 m-0">

        <div class="container py-5 custom_tab_style1_outer">
            <div class="row">
                <div class="col-md-12">
                    <ul class="custom_tab_style1 list-unstyled text-center" id="myTab" role="tablist">
                        <li class="me-2 mb-3" role="presentation">
                            <div class="p-3 col-md-6 col-sm-8 col-10  mx-auto">
                                <form method="post" action="">
                                    <div class="form-group">
                                        <input type="date" name="date_c" class="form-control p-3 text-green ">
                                        <input type="submit" name="save" class="button mt-4 w-100 text-white fw-bold">
                                    </div>
                                </form>
                                <!-- <button class="nav-link  active" id="lundi" data-bs-toggle="tab" data-bs-target="#lundi-plat" type="button" role="tab" aria-controls="home" aria-selected="true">Lundi</button> -->
                        </li>
                    </ul>

                    <?php 
                        var_dump($data1[0]);
                        if(!empty($data1[0])){

                        
                    ?>
                    <!-- lundi -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active " id="lundi-plat" role="tabpanel" aria-labelledby="lundi">
                            <div class="member_card_style bg-smoth-green p-sm-4 p-2 ">
                                <div class="w-max-content pe-2 p-1 mb-3    ">
                                    <p class="text-white m-0 fs-6 plat-date"><?= $data1[0]['menu_date']?></p>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12 ">
                                        <div class="d-flex gap-4 flex-wrap justify-content-around">
                                            <div class="col-md-3 banner  entrer_banner">
                                                <div class=" overflow-hidden bg-white rounded mb-3 ">
                                                    <img class="img-fluid" src="images/image-food2.webp" alt="" />
                                                    <div class="plats-info p-3">
                                                        <h5 class="text-green text-meduim"><?= $data1[0]['entre']?></h5>
                                                        <p class="small-text m-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- == -->
                                            <div class="col-md-3 banner  plat_banner">
                                                <div class="overflow-hidden bg-white rounded mb-3">
                                                    <img class="img-fluid" src="images/priciple1.jpeg" alt="" />
                                                    <div class="plats-info p-3">
                                                        <h5 class="text-green text-meduim"><?= $data1[0]['plat']?></h5>
                                                        <p class="small-text m-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- == -->
                                            <div class="col-md-3 banner  dessert_banner">
                                                <div class="overflow-hidden bg-white rounded mb-3">
                                                    <img class="img-fluid" src="images/food22.webp" alt="" />
                                                    <div class="plats-info p-3">
                                                        <h5 class="text-green text-meduim"><?= $data1[0]['dessert']?></h5>
                                                        <p class="small-text m-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }else{?>
                       <h3>No commands for that day</h3> 
                       <?php }?>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-black text-white p-3 d-flex justify-content-between align-items-center flex-wrap">
        <p class="small-text m-0">
            © 2022 YouFood Technologies Inc.
        </p>
        <div>
            <a href="" class="text-white small-text btn p-0 border-0 ">Politique de confidentialité</a>
            <a href="" class="text-white small-text btn p-0 border-0"> | Conditions d'utilisation</a>
        </div>
    </footer>
</main>