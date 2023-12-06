<div class="col-12 col-md-4 col-lg-3">
    <div class="card">
        <img src="<?= $image ?>" class="card-img-top" alt="<?= $title ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $title ?>
            </h5>
            <div class="d-flex justify-content-between align-items-center">
                <p><strong>AVAILABLE:</strong>
                    <?= $quantity ?>
                </p>
                <p><strong>$</strong>
                    <?= $price ?>
                </p>
            </div>
            <button class="btn btn-primary">Buy Now!</button>
        </div>
    </div>
</div>