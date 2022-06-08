<main class="plat-semaine-content">
    <div class="bg-banner d-flex justify-content-center align-items-center z-index-2">
        <h1 class="text-green fw-bold font_dancing">Plats de Semaine</h1>
    </div>

    <div class="container-fluid p-0 m-0">
        <div class="d-flex flex-nowrap">
            <!-- start sidebar -->
            <div class=" col-sm-3 col-md-2 col-auto  px-3 bg-light shadow sidebar1 side-menu sidebar_margin ">
                <div class="d-flex flex-column ps-md-2  pt-2 text-white  position-sticky top-0 ">
                    <ul class="  nav flex-column mb-sm-auto mb-0  align-items-start mt-nav" id="menu" role="tablist">
                        <li class="nav-item mb-4 ">
                            <a href="#lundi-plat" class="nav-link align-middle px-0 fs-6" id="lundi" data-bs-toggle="tab" data-bs-target="#lundi-plat" type="button" role="tab" aria-controls="home" aria-selected="true">
                                <i class="fa-solid fa-1 me-sm-1"></i><span class="ms-1 d-none d-sm-inline">Lundi</span>
                            </a>
                        </li>
                        <li class="nav-item mb-4">
                            <a href="#mardi-plat" class="nav-link px-0 align-middle fs-6" id="mardi" data-bs-toggle="tab" data-bs-target="#mardi-plat" type="button" role="tab" aria-controls="home" aria-selected="true">
                                <i class="fa-solid fa-2"></i> <span class="ms-1 d-none d-sm-inline">Mardi</span>
                            </a>
                        </li>
                        <li class="nav-item mb-4">
                            <a href="" class="nav-link px-0 align-middle fs-6">
                                <i class="fa-solid fa-3"></i> <span class="ms-1 d-none d-sm-inline">Mercredi</span></a>
                        </li>
                        <li class="nav-item mb-4">
                            <a href="classes" class="nav-link px-0 align-middle  fs-6">
                                <i class="fa-solid fa-4"></i> <span class="ms-1 d-none d-sm-inline">Jeudi</span>
                            </a>
                        </li>
                        <li class="nav-item mb-4">
                            <a href="classes" class="nav-link px-0 align-middle  fs-6">
                                <i class="fa-solid fa-5"></i> <span class="ms-1 d-none d-sm-inline">Vendredi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- =============== -->
            <div class="container-fluid p-0 m-0 content mr-content">




                <!-- ======Lundi======== -->
                <!-- =================== -->
                <!-- ENTRER -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active " id="lundi-plat" role="tabpanel" aria-labelledby="lundi">
                        <form>
                            <div class="container-fluid p-2">
                                <div class="mt-4 ps-2 ">
                                    <h5 class="fw-bold category-p">PLATS D'ENTRER </h5>
                                    <span class="line-green"></span>
                                </div>
                                <div class="d-flex flex-wrap p-md-3 gap-md-5 gap-4 justify-content-center justify-content-md-start">
                                    <div class="col-md-3 col-9 shadow border-0 overflow-hidden" >
                                    <input type="radio" id="entrer-1" class=" d-none input1" name="entrer">
                                        <label for="entrer-1" class="label1">
                                            <img src="images/entrer1.jpeg" alt="image de entrer" width="100%">
                                            <div class="plats-info p-2">
                                                <h5 class="text-green text-meduim">Entrer 1</h5>
                                                <p class="small-text m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                                            </div>
                                        </label>
                                    </div>
                                    <!-- == -->
                                    <div class="col-md-3 col-9 shadow border-0 overflow-hidden">
                                    <input type="radio" id="entrer-2" class="d-none input1" name="entrer">
                                        <label for="entrer-2" class="label1">
                                            <img src="images/entrer2.jpeg" alt="image de entrer" width="100%">
                                            <div class="plats-info p-2">
                                                <h5 class="text-green text-meduim">Entrer 1</h5>
                                                <p class="small-text m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                                            </div>
                                        </label>
                                    </div>
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
                                    <input type="radio" id="plat-1" class="d-none input1" name="principale">    
                                        <label for="plat-1" class="label1">
                                            <img src="images/entrer1.jpeg" alt="image de entrer" width="100%">
                                            <div class="plats-info p-2">
                                                <h5 class="text-green text-meduim">Entrer 1</h5>
                                                <p class="small-text m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                                            </div>
                                        </label>
                                        
                                    </div>
                                    <!-- == -->
                                    <div class="col-md-3 col-9 shadow border-0 overflow-hidden">
                                    <input type="radio" id="plat-2" class=" d-none input1" name="principale">
                                        <label for="plat-2" class="label1">
                                            <img src="images/entrer2.jpeg" alt="image de entrer" width="100%">
                                            <div class="plats-info p-2">
                                                <h5 class="text-green text-meduim">Entrer 1</h5>
                                                <p class="small-text m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
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
                                    <input type="radio" id="dessert-1" class="d-none input1" name="dessert">
                                        <label for="dessert-1" class="label1">
                                            <img src="images/entrer1.jpeg" alt="image de entrer" width="100%">
                                            <div class="plats-info p-2">
                                                <h5 class="text-green text-meduim">Entrer 1</h5>
                                                <p class="small-text m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                                            </div>
                                        </label>
                                        
                                    </div>
                                    <!-- == -->
                                    <div class="col-md-3 col-9 shadow border-0 overflow-hidden">
                                    <input type="radio" id="dessert-2" class="d-none input1" name="dessert">
                                        <label for="dessert-2" class="label1">
                                            <img src="images/entrer2.jpeg" alt="image de entrer" width="100%">
                                            <div class="plats-info p-2">
                                                <h5 class="text-green text-meduim">Entrer 1</h5>
                                                <p class="small-text m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                                            </div>
                                        </label>
                                        
                                    </div>
                                </div>
                            </div>

                            <!-- ====== -->
                            <div class="w-100 text-center  mb-3 ">
                                <input type="submit" class="btn btn-green mt-4 button fw-bold text-white px-md-5" value="Commander">
                            </div>
                        </form>
                    </div>




                    <!-- =========Mardi========== -->
                    <!-- ======================== -->
                    <div class="tab-pane fade show " id="mardi-plat" role="tabpanel" aria-labelledby="mardi">
                        <form>
                            <div class="container-fluid p-2">
                                <div class="mt-4 ps-2 ">
                                    <h5 class="fw-bold category-p">PLATS D'ENTRER </h5>
                                    <span class="line-green"></span>
                                </div>
                                <div class="d-flex flex-wrap p-md-3 gap-md-5 gap-4 justify-content-center justify-content-md-start">
                                    <div class="col-md-3 col-9 shadow border-0 overflow-hidden">
                                        <label for="entrer-1" class="label1">
                                            <img src="images/entrer1.jpeg" alt="image de entrer" width="100%">
                                            <div class="plats-info p-2">
                                                <h5 class="text-green text-meduim">Entrer 1</h5>
                                                <p class="small-text m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                                            </div>
                                        </label>
                                        <input type="radio" id="entrer-1" class="d-none input1" name="entrer">
                                    </div>
                                    <!-- == -->
                                    <div class="col-md-3 col-9 shadow border-0 overflow-hidden">
                                        <label for="entrer-2" class="label1">
                                            <img src="images/entrer2.jpeg" alt="image de entrer" width="100%">
                                            <div class="plats-info p-2">
                                                <h5 class="text-green text-meduim">Entrer 1</h5>
                                                <p class="small-text m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                                            </div>
                                        </label>
                                        <input type="radio" id="entrer-2" class="d-none input1" name="entrer">
                                    </div>
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
                                        <label for="plat-1" class="label1">
                                            <img src="images/entrer1.jpeg" alt="image de entrer" width="100%">
                                            <div class="plats-info p-2">
                                                <h5 class="text-green text-meduim">Entrer 1</h5>
                                                <p class="small-text m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                                            </div>
                                        </label>
                                        <input type="radio" id="plat-1" class="d-none input1" name="principale">
                                    </div>
                                    <!-- == -->
                                    <div class="col-md-3 col-9 shadow border-0 overflow-hidden">
                                        <label for="plat-2" class="label1">
                                            <img src="images/entrer2.jpeg" alt="image de entrer" width="100%">
                                            <div class="plats-info p-2">
                                                <h5 class="text-green text-meduim">Entrer 1</h5>
                                                <p class="small-text m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                                            </div>
                                        </label>
                                        <input type="radio" id="plat-2" class="d-none input1" name="pricipale">
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
                                        <label for="dessert-1" class="label1">
                                            <img src="images/entrer1.jpeg" alt="image de entrer" width="100%">
                                            <div class="plats-info p-2">
                                                <h5 class="text-green text-meduim">Entrer 1</h5>
                                                <p class="small-text m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                                            </div>
                                        </label>
                                        <input type="radio" id="dessert-1" class="d-none input1" name="dessert">
                                    </div>
                                    <!-- == -->
                                    <div class="col-md-3 col-9 shadow border-0 overflow-hidden">
                                        <label for="dessert-2" class="label1">
                                            <img src="images/entrer2.jpeg" alt="image de entrer" width="100%">
                                            <div class="plats-info p-2">
                                                <h5 class="text-green text-meduim">Entrer 1</h5>
                                                <p class="small-text m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                                            </div>
                                        </label>
                                        <input type="radio" id="dessert-2" class="d-none input1" name="dessert">
                                    </div>
                                </div>
                            </div>

                            <!-- ====== -->
                            <div class="w-100 text-center  mb-3 ">
                                <input type="submit" class="btn btn-green mt-4 button fw-bold text-white px-md-5" value="Commander">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--  -->
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