<div class="col-12 col-md-4 col-lg-3">
    <div class="card">
        <img src="<?= $image ?>" class="card-img-top" alt="<?= $title ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $title ?>
            </h5>
            <p class="card-text">
                <?= $content ?>
            </p>
            <div class="d-flex justify-content-between align-items-flex-start">
                <?= $custom ?>
            </div>
            <div class="d-flex align-items-flex-start">
                <?= $genre ?>
            </div>
        </div>
    </div>
</div>