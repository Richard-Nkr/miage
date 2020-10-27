<?php $title = 'SneakerShop -'. $article['modele']; ?>

<?php ob_start(); ?>
<div class="box_title">
    <h1>Marketplace</h1>
</div>
<h3 style="margin-left: 41%;">Latest added articles :</h3>

<br><br>

<br>
<div class="container">
    <div class="row">
        <div class="col-sm-4 py-2">
            <div class="card card-body h-100">
                <img class="card-img-top" src="assets/images/<?= $article['modele'] ?>.jpg" alt="article">
                <div class="card-body">
                    <h5 class="card-title"><?= $article['brand'] ?></h5>
                    <p class="card-text"><?= $article['price'] ?>€</p>
                    <p class="card-text"><small class="text-muted"><?= $article['date_add'] ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>

<h2><?= $article['type'] ?></h2>
<h2></h2>


<h2><?= $article['state'] ?></h2>
<h2><?= $article['color'] ?></h2>



<?php
$body = ob_get_clean();
require('template.php');
?>