<?php
include_once 'Methode.php';
$plat= new Methode();
$lolo=[];

if(isset($_POST['save'])){
$lolo=$plat->select('menus', 'disponible_at' , $_POST['date_menu']);
}



if(isset($_POST['order'])){
    $plat->Order($_POST['entree'],$_POST['plat'],$_POST['dessert'],$_POST['date1']);
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
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed m-5">

<form method="post" action="">
  <div class="form-control">
      <input type="date" name="date_menu" >
      <input type="submit" name="save">
  </div>
</form>

<h1>add votre command</h1>
<span>you are seen the menu for : 
    <?php if(!empty($lolo)){
        echo $lolo[0]['disponible_at'];
} ?></span>
<?php if(!empty($lolo)){ ?>
   

<form class="w-50 m-auto" method="post">
    [<?php foreach ($lolo as $value):?>]
    <h1>Entree</h1>
    <div class="d-flex gap-5">
        <div>

            <input type="radio" value="entre1" id="entree1" name="entree">
            <label for="entree1" class="form-label h3">
                    <?php echo $value["entre1"]?>
            </label>

        </div>
        <div>
            <input type="radio" value="entre2" id="entree2" name="entree">
            <label for="entree2" class="form-label h3">
                    <?php echo $value["entre2"]?>
            </label>

        </div>
    </div>
    <hr>
    <h1 class="mt-5">Plat principal</h1>
    <div class="d-flex gap-5">
        <div>
            <input type="radio" value="plat1" id="plat1" name="plat">
            <label for="plat1" class="form-label h3">
                    <?php echo $value["plat1"]?>
            </label>
        </div>
        <div>
            <input type="radio" id="plat2" value="plat2" name="plat">
            <label for="plat2" class="form-label h3">
                    <?php echo $value["plat2"]?>
            </label>
        </div>
    </div>
    <hr>
    <h1 class="mt-5">Dessert</h1>
    <div class="d-flex gap-5">
        <div>
            <input type="radio" id="dessert1" value="dessert1" name="dessert">
            <label for="dessert1" class="form-label h3">
                    <?php echo $value["dessert1"]?>
            </label>
        </div>
        <div>
            <input type="radio" id="dessert2" value="dessert2" name="dessert">
            <label for="dessert2" class="form-label h3">
                    <?php echo $value["dessert2"]?>
            </label>
        </div>
    </div>
    
    <?php endforeach ?>

    <input type="hidden" name="date1" value="<?php echo $lolo[0]['disponible_at'] ?>" >
    <button type="submit" name="order" class="mt-3 btn btn-primary">Submit</button>
</form>
<?php }else{ ?>
    <h2> No menu for this date </h2>

    <?php } ?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

<script src="js/script.js"></script>
</body>

</html>