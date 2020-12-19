<?php $title = 'SneakerShop - Marketplace'; ?>

<?php ob_start(); ?>
<div class="box_title">
    <h1>Marketplace</h1>
</div>
<h3 style="margin-left: 41%;">Latest added articles :</h3>

<br><br>

<br>
<div class="container">
    <div class="row">
        <?php foreach ($articles as $article) { ?>
            <div class="col-sm-4 py-2">
                <div class="card card-body h-100">
                    <img class="card-img-top" src="assets/images/<?= $article['modele'] ?>.jpg" alt="article">
                    <div class="card-body">
                        <h5 class="card-title"><?= $article['brand'] ?></h5>
                        <p class="card-text"></p>
                        <p class="card-text"><?= $article['size'] ?></p>
                        <p class="card-text"><small class="text-muted"><?= $article['date_add'] ?></small></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<br><br>

<?php
    $body = ob_get_clean();
    require('template.php');
?>