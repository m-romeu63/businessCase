<div id="promotions" class="row justify-content-around my-3 sections">
    <h2 class="text-center">
        Promotions
    </h2>
    <?php foreach($aProducts as $product): ?>
    <div class="col-md-2">
        <div class="card shadow my-2">
            <a href="#">
                <img src="<?php echo $product['urlPhoto']; ?>" class="img-fluid"
                    alt="<?php echo $product['productName']; ?>" id="img-card">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $product['productName']; ?>
                    </h5>
                    <p class="fs-5">
                        <?php echo addTVA($product['prixHT']); ?> € TTC
                    </p>
                </div>
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>