<?php
include_once 'Methode.php';
 $plat= new Methode();

if(isset($_POST['submit'])){
 $plat->insert($_POST['name'], $_POST['des'], $_POST['cat']);
}

// $lolo=$plat->select('food_categorie', 'entre','Entree');
// $yoyo=$plat->select('food_categorie', 'plat','Plat principal');
// $req=$plat->select('food_categorie','dessert', 'Dessert');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Profile - YouFood</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed m-5">

<h1>add plats</h1>

<a href="menu.php">menu</a>
<form class="w-50 m-auto" method="post">
    <div class="mb-3">
        <label for="platName" class="form-label">Plat</label>
        <input type="text" class="form-control" id="platName" name="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="platName" class="form-label">Description</label>
        <textarea class="form-control" name="des"></textarea>
    </div>
    <div class="mb-3">
        <label for="categorie" class="form-label">Categorie</label>
        <select class="form-control" name="cat">
            <option>Chose a categorie</option>
            <option>Entree</option>
            <option>Plat principal</option>
            <option>Dessert</option>
        </select>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>


<div>
    <div class="d-flex flex-wrap gap-5 m-3">
        ENTREE:
        <?php foreach ($req as $value):?>

        <div class="card col-3 gap-5 card-danger ">
            <div class="card-header"> <?php echo $value["food_name"]?></div>
            <div class="card-body"> <?php echo $value["food_description"]?></div>
            <div class="card-footer"> <?php echo $value["food_categorie"]?></div>
        </div>
        <?php endforeach?>
    </div>
    <div class="d-flex flex-wrap gap-5 m-3">
        ENTREE:
        <?php foreach ($yoyo as $value):?>

            <div class="card col-3 gap-5 card-danger ">
                <div class="card-header"> <?php echo $value["food_name"]?></div>
                <div class="card-body"> <?php echo $value["food_description"]?></div>
                <div class="card-footer"> <?php echo $value["food_categorie"]?></div>
            </div>
        <?php endforeach?>
    </div>
    <div class="d-flex flex-wrap gap-5 m-3">
        ENTREE:
        <?php foreach ($lolo as $value):?>

            <div class="card col-3 gap-5 card-danger ">
                <div class="card-header"> <?php echo $value["food_name"]?></div>
                <div class="card-body"> <?php echo $value["food_description"]?></div>
                <div class="card-footer"> <?php echo $value["food_categorie"]?></div>
            </div>
        <?php endforeach?>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

<script src="js/script.js"></script>
</body>

</html>