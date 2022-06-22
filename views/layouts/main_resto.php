<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Profile - YouFood</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

    <!-- Sidebar Toggle-->
    <button class="btn btn-link  btn-sm ms-4 ms-md-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
    <!-- Navbar Brand-->
    <div class="ms-3">
        <a class="navbar-brand fs-4 fw-bold p-0" href="index.html">You <span
                    class="min-logo text-green">Food</span></a>
        <p class="navbar-brand fs-12 pb-1 lh-1 m-0 p-0">Restaurant</p>
    </div>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto me-3">
        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end bg-dark pb-0" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-white" href="#!">Settings</a></li>
                <li><a class="dropdown-item text-white" href="#!">Activity Log</a></li>
                <li>
                    <hr class="dropdown-divide btn-outliner-dark" />
                </li>
                <li> <a href="" class=" text-white dropdown-item"><i class="fas fa-sign-out-alt"></i> Se
                        déconnecter</a></li>

            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-white bg-white border-end border-2" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="pt-5 d-flex text-center  flex-column gap-3 align-items-center">
                        <img src="images/Scroll Group 1.svg" width="80px" alt="">
                        <div>
                            <p class="fs-16 fw-bold m-0">Chef Mouha</p>
                            <p class="fs-14">Manager</p>
                        </div>
                    </div>
                    <ul class="list-unstyled ms-4">
                        <li>
                            <a class="nav-link text-gris nav_item small  fw-normal" href="charts.html">
                                <div class="sb-nav-link-icon pe-3"><i class="fa-solid fa-house "></i></div>
                                Acceuil
                            </a>
                        </li>
                        <li>
                            <a class="nav-link text-gris nav_item small  fw-normal" href="dashboard">
                                <div class="sb-nav-link-icon pe-3"><i class="fa-solid fa-star"></i></i></div>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a class="nav-link text-gris nav_item small  fw-normal" href="restaurant/add_plats">
                                <div class="sb-nav-link-icon pe-3"><i class="fa-solid fa-utensils"></i></div>
                                Menu
                            </a>
                        </li>
                        <li>
                            <a class="nav-link text-gris nav_item small  fw-normal" href="charts.html">
                                <div class="sb-nav-link-icon pe-3"><i class="fas fa-bags-shopping"></i></div>
                                Commandes
                            </a>
                        </li>
                        <li>
                            <a class="nav-link text-gris nav_item small fw-normal" href="charts.html">
                                <div class="sb-nav-link-icon pe-3"><i class="fa-solid fa-star"></i></div>
                                Feedbacks
                            </a>
                        </li>
                        <li>
                            <a class="nav-link text-gris nav_item small  fw-normal" href="charts.html">
                                <div class="sb-nav-link-icon pe-3"><i class="fas fa-user"></i></div>
                                Profile
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small ms-4">
                    <a href="" class=" text-gris text-decoration-none "><i class="fas fa-sign-out-alt pe-3"></i> Se
                        déconnecter</a>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">

        {{content}}
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

<script src="js/script.js"></script>
</body>

</html>