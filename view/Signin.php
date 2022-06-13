<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles" rel="stylesheet">
    <link href="css/style" rel="stylesheet">
    <title>SignIn</title>
</head>

<body class="vh-100 d-flex flex-column justify-content-between ">
    <main class="d-flex flex-column align-items-center gap-5 gap-md-4 col-10 col-md-5 m-auto">
        <h1 class="mt-md-5 logo fw-bold">
            You<span class="text-green">Food</span>
        </h1>

        <div class="text-center text-md-start w-100">
            <h4 class="mt-2 connecter fw-bold">
                Connecter-vous
            </h4>
            <p class="m-auto m-md-0 signin-parag w-100 w-md-75">
                Utilisez votre nom d'utilisateur et votre mot de passe pour vous connecter à YouFood.
            </p>
        </div>
        <form class="w-100 signin">
            <div class="mb-3">
              <label for="username" class="fs-16  form-label">Nom d'utilisateur</label>
              <input type="email" class="form-control fs-16 rounded-0" id="username" placeholder="Saisissez votre adresse e-mail" aria-describedby="username">
            </div>
            <div class="mb-3">
              <label for="password" class="fs-16 form-label">Mot de passe</label>
              <input type="password" placeholder="Saisissez votre mot de passe" class="fs-16  rounded-0 form-control " id="password">
            </div>
            <div class=" my-4 form-check p-0 d-flex align-items-center">
              <input type="checkbox" class="form-check-input h-auto p-2 me-2" id="exampleCheck1">
              <label class="fs-16    form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <div class="text-center ">
                <button type="submit" name="signin" class="border-0 signin-btn fs-6 text-white w-100  rounded-0 fw-bold btn-green">Se connecter</button>
                <a href="" class="text-green border-0 fw-light btn fs-16 text-decoration-underline">Mot de passe oublié?</a>
            </div>
        </form>
        <div>
            
        </div>
    </main>
    <footer class="bg-black d-flex justify-content-between align-items-center  text-white p-3">
        <p class="fs-10 lh-sm">
            © 2022 YouFood Technologies Inc.
        </p>
        <div>
            <a href="" class="text-white fs-10 btn p-0 border-0 ">Politique de confidentialité</a>
            <a href="" class="text-white fs-10 btn p-0 border-0"> | Conditions d'utilisation</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
</body>

</html>