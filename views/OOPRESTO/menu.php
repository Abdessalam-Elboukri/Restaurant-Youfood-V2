<?php
include_once 'Methode.php';
$plat= new Methode();


$lolo=$plat->selectplats('food_categorie', 'Entree');
$yoyo=$plat->selectplats('food_categorie', 'Plat principal');
$req=$plat->selectplats('food_categorie', 'Dessert');


if(isset($_POST['addmenu'])){
    $plat->AddMenu($_POST['entree1'], $_POST['entree2'],$_POST['principale1'], $_POST['principale2'],$_POST['dessert1'], $_POST['dessert2'], $_POST['date']);
}

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

<form class="w-50 m-auto" method="post">
    <div class="form-control">
        <input type="date" name="date">
    </div>
    <h1>Entree</h1>
    <div class="d-flex gap-5">
    <div>
    <label for="categorie" class="form-label">Categorie</label>
    <select class="form-control" name="entree1">
        <option>Chose the Entree 1</option>
        <?php foreach ($lolo as $value):?>
        <option> <?php echo $value["food_name"]?></option>
        <?php endforeach?>
    </select>
    </div>
    <div>
        <label for="categorie" class="form-label">Categorie</label>
        <select class="form-control" name="entree2">
            <option>Chose the Entree 2</option>
            <?php foreach ($lolo as $value):?>
                <option> <?php echo $value["food_name"]?></option>
            <?php endforeach?>
        </select>
    </div>
    </div>

    <h1 class="mt-4">Plat Principal</h1>
    <div class="d-flex gap-5">
        <div>
            <label for="categorie" class="form-label">Categorie</label>
            <select class="form-control" name="principale1">
                <option>Chose the Principal 1</option>
                <?php foreach ($yoyo as $value):?>
                    <option> <?php echo $value["food_name"]?></option>
                <?php endforeach?>
            </select>
        </div>

        <div>
            <label for="categorie" class="form-label">Categorie</label>
            <select class="form-control" name="principale2">
                <option>Chose the principal 2</option>
                <?php foreach ($yoyo as $value):?>
                    <option> <?php echo $value["food_name"]?></option>
                <?php endforeach?>
            </select>
        </div>
    </div>

        <h1 class="mt-4">Plat Dessert</h1>
        <div class="d-flex gap-5">
            <div>
                <label for="categorie" class="form-label">Categorie</label>
                <select class="form-control" name="dessert1">
                    <option>Chose the Dessert 1</option>
                    <?php foreach ($req as $value):?>
                        <option> <?php echo $value["food_name"]?></option>
                    <?php endforeach?>
                </select>
            </div>
            <div>
                <label for="categorie" class="form-label">Categorie</label>
                <select class="form-control" name="dessert2">
                    <option>Chose the Dessert 2</option>
                    <?php foreach ($req as $value):?>
                        <option> <?php echo $value["food_name"]?></option>
                    <?php endforeach?>
                </select>
            </div>
        </div>

    <button type="submit" name="addmenu" class="mt-3 btn btn-primary">Submit</button>
</form>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

<script src="js/script.js"></script>
</body>

</html>