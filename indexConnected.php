<?php session_start(); ?>
<?php require 'inc/data/products.php'; ?>
<?php require 'inc/headConnected.php'; ?>

<form action="coockie.php" method="post">
    <section class="cookies container-fluid">
        <div class="row">
            <?php foreach ($catalog as $id => $cookie) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $cookie['name']; ?></h3>
                            <p><?= $cookie['description']; ?></p>
                            <input type="submit" name="submitCookie" value="Add cookie <?= $cookie['name']; ?>" class="btn btn-primary">
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
        </div>
    </section>
</form>
<?php require 'inc/foot.php'; ?>
