<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="main-style.css" rel="stylesheet">
    <link href="auth-style.css" rel="stylesheet">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <title>La Nîmes'alerie: Connexion</title>
</head>

<body>
    <header>
        <?php include 'include/header.php'; ?>
    </header>
    <main style="background-image: url(src/—Pngtree—black_bear_paw_prints_6083126.png); background-position: cover;">
        <section class="col-lg-6 mx-auto my-2 auth">
            <form method="post" action="index.php?action=auth">
                <h4 class="text-center my-2">Vous êtes déjà client à La Nîmes'alerie ? Connectez-vous !</h4>
                <?php if(!empty($errMsg)): ?>
                    <p class="alert alert-danger">
                        <?php echo $errMsg; ?>
                    </p>
                <?php endif; ?>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Saissisez votre email</label>
                    <input type="text" name="email" id="email" placeholder="Email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Saissisez votre mot de passe</label>
                    <input type="password" name="password" id="password" placeholder="Mot de passe" class="form-control">
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" name="cookie" id="cookie" class="form-check-input">
                    <label for="cookie" class="form-check-label">Se souvenir de moi</label>
                </div>
                <div class="form-group mb-3">
                    <input type="submit" name="connect" id="connect" class="btn btn-dark mx-auto" value="Je me connecte">
                </div>
            </form>
        </section>
        <section class="col-lg-6 mx-auto my-2 auth" id="signin">
            <form method="post" action="">
                <h4 class="text-center">Nouveau client ? Créez votre compte La Nîmes'alerie !</h4>
                <div class="form-group mb-3">
                    <label for="emailnew" class="form-label">Commencez en saisissant votre email</label>
                    <input type="text" name="emailnew" id="emailnew" placeholder="Email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" name="inscription" id="inscription" class="btn btn-dark mx-auto" value="Je crée mon compte">
                </div>
            </form>
        </section>
    </main>
    <footer>
        <?php include 'include/footer.php'; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>