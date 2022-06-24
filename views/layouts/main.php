<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" restaurant youfood">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>YouFood</title>
</head>

<body>
    <!-- navbar -->
    <?php
    if (isset($_SESSION['user_fname'])) {
        ?>
        <nav class="navbar nav_user navbar-expand-lg  navbar-light bg-light p-2 position-fixed w-100 position-sticky" >
            <div class="container-fluid me-lg-3">
                <a class="navbar-brand logo1 fw-bold active" href="">You<span class="text-green">Food</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse justify-content-lg-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav d-flex  align-items-center gap-3">
                        <a class="nav-link " href="search-menu">Plats de Semaine</a>
                        <a class="nav-link" href="vos-plats">Vos Plats </a>
                        <a class="nav-link" href="#">Contact Nous</a>
                        <a class="nav-link" href="#">A propos</a>                   
                        <div class="nav-item dropdown ms-lg-4">
                            <a class="small-text" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="circle-ntf"></span>
                            <img src="images/avatar1.jpg" alt="" class="rounded-circle position-relative" width="40px">
                               <?php echo $_SESSION["user_fname"] . ' ' .  $_SESSION["user_lname"] ?? '';  ?>
                            </a>
                            <ul class="dropdown-menu shadow down-menu bg-light border-0 pb-0" aria-labelledby="navbarDropdownMenuLink" style="min-width:3rem">
                                <li><a class="dropdown-item" href="profile">Profile</a></li>
                                <li><a class="dropdown-item" href="logout">Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    <?php }
    else{
        ?>
        <nav class="navbar nav_user navbar-expand-lg  navbar-light bg-light p-2 position-fixed w-100 position-sticky">
        <div class="container-fluid me-lg-3">
            <a class="navbar-brand logo fw-bold active" href="">You<span class="text-green">Food</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-lg-end" id="navbarNavAltMarkup">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="login" class="text-dark nav-link fw-bold">Login<i class="fa-solid fa-arrow-right-to-bracket ms-1 align-middle"></i></a>
                </div>
            </div>
        </div>
    </div>
</nav><?php }?>

    <!-- end navbar -->
    {{content}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>

</html>



