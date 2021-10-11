<div class="row align-items-center mb-0 pt-2 fs-4">
    <div class="col-lg-9 text-center">
        <a href="index.php?action=homepage">
            <img src="src/nom_boutique.png" alt="logo de La Nîmes'alerie" class="img-fluid">
        </a>
    </div>
    <div class="col-lg-3 d-flex justify-content-around pe-0">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart"
                viewBox="0 0 16 16">
                <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
        </a>
        <a href="index.php?action=auth">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
        </a>
    </div>
    <div class="d-flex justify-content-around pe-0" id="cover">
        <img src="src/illustration_header_business_case.png" class="img-fluid illu-header" alt="image d'illustration">
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light mt-0">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
                <li class="nav-item dropdown px-2 mx-3 my-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Produits
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php foreach ($aCategories as $category): ?>
                        <li><a class="dropdown-item" href="#"><span class="iconify" data-icon="<?php echo $category['icon']; ?>"></span>
                                <?php echo $category['categoryName']; ?></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="nav-item px-2 mx-3 my-2">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Votre animal dans l'espace !<span
                            class="iconify" data-icon="ph:rocket" data-inline="false"></span></a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Recherche</button>
            </form>
        </div>
    </div>
</nav>