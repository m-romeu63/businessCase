<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="main-style.css" rel="stylesheet">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <title>La Nîmes'alerie</title>
</head>

<body>
    <header>
        <?php include 'include/header.php'; ?>
    </header>
    <main style="background-image: url(src/—Pngtree—black_bear_paw_prints_6083126.png); background-position: cover;">
        <?php include 'include/carousel.php'; ?>
        <?php include 'include/promotions.php'; ?>
        <div id="about-us" class="row my-3 sections">
            <h2 class="text-center">Qui sommes-nous ?</h2>
            <div class="col-lg-6 pe-1" id="illustration-photo">
                <img src="src/kim-davies-fEK4jvgnApg-unsplash.jpg" alt="photo d'un chaton qui joue" class="img-fluid">
            </div>
            <div class="col-lg-6 pe-0">
                <p>
                    Est mollit reprehenderit ipsum exercitation enim ex ea ad aliquip aliquip adipisicing. Esse
                    reprehenderit enim aute id Lorem minim. Ad dolor consequat voluptate pariatur enim.
                </p>
                <p>
                    Id deserunt sunt ea elit ad ea aliqua aliquip commodo ipsum ut incididunt magna laboris. Veniam
                    dolor dolor pariatur esse ex duis reprehenderit exercitation consequat amet do culpa duis consequat.
                    Duis ullamco non officia id in mollit tempor aliqua cillum Lorem voluptate anim.
                </p>
                <p>
                    Enim id aliquip quis id pariatur. Voluptate velit nostrud sint culpa quis. Aute amet anim ut dolor
                    exercitation pariatur anim reprehenderit laboris enim fugiat consectetur. Velit commodo nostrud
                    commodo laborum non eu irure deserunt commodo pariatur labore labore. Minim enim eu nisi laboris
                    tempor ea. Mollit ut qui mollit ullamco ipsum tempor commodo. Ipsum culpa ea irure incididunt sunt
                    in exercitation culpa tempor adipisicing in quis aliquip aliquip.
                </p>
            </div>
        </div>
        <?php include 'include/avis.php'; ?>
    </main>
    <footer>
        <?php include "include/footer.php"; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>