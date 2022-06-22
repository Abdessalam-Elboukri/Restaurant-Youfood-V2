<?php
include_once 'Methode.php';
$plat= new Methode();
$data=[];
if(isset($_POST['submit'])){
    $data=$plat->Range($_POST['date1'], $_POST['date2']);
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

<body class=" m-5">
<form action="" method="post">
    <div class="d-flex g-4">
        <div class="form-control">
            <label>date1</label>
            <input type="date" name="date1"
        </div>
        <div class="form-control">
            <label>date2</label>
            <input type="date" name="date2"
        </div>
        <input type="submit" name="submit" >
    </div>
</form>

<div class="card" style="width: 18rem;">
    <h5 class="card-title">entree</h5>
    <div class="card-body">
        <div>
            entree1 :
            <span class="fw-bold"><?php
                if(isset($data1["COUNT(entre)"])) {
                    echo $data1["COUNT(entre)"];
                }else{
                    echo '0' ;
                }
               ?></span>
        </div>
        <div>
            entree 2
            <span CLASS="ms-5 ps-5 rounded-3"></span>
        </div>
        <div>
            Total
            <span><?php
                if(isset($data1["COUNT(entre)"])) {
                    echo $data1["COUNT(entre)"];
                }else{
                    echo '0' ;
                }
                ?></span>
        </div>
    </div>
</div>
<div class="w-100 table-responsive">
    <table class="table table-striped table-hover table_students">
        <thead>
        <tr class=" text-muted ">

            <th scope="col">user</th>
            <th scope="col">Entree Plat</th>
            <th scope="col">Principale Plat</th>
            <th scope="col">Dessert Plat</th>
            <th scope="col">date<abbr title="Naissance">...</abbr></th>
        </tr>
        </thead>
        <tbody>  <!-- ---------------------------- -->
        <?php  foreach($data as $value) :?>
        <tr class="bg-white shadow">
            <td class="align-middle "><?php echo $value['id_user'] ?></td>
            <td class="align-middle"><?php echo $value['entre']?></td>
            <td class="align-middle"><?php echo $value['plat']?></td>
            <td class="align-middle"><?php echo $value['dessert']?></td>
            <td class="align-middle"><?php echo $value['date']?></td>
        </tr>
        <?php endforeach; ?>




