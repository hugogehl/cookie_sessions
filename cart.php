<?php session_start(); ?>
<?php require 'inc/headConnected.php'; ?>
<?php require 'coockie.php'?>

<div class="card" style="width: 18rem; display: flex; justify-content: center; border: 1px solid black; margin: 20px; ">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_COOKIE['cookieCart']; ?></h5>
    </div>
</div>

<?php require 'inc/foot.php'; ?>

