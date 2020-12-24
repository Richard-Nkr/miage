<?php $title = 'SneakerShop - Marketplace'; ?>

<?php ob_start(); ?>
<div class="box_title">
    <h1><?= $article['brand'] . " " . $article['modele']; ?></h1>
    <h3>posted by <?= $article['owner']; ?></h3>

</div>

<div class="div_article">
    <table>
        <td>
            <div class="card" style="width: 18rem;">
                <div class="card">
                    <img class="card-img-top" src="assets/images/<?= $article['modele'] ?>.jpg" alt="article">
                    <div class="card-body">
                        <p class="card-title">Brand : <?= $article['brand'] ?></p>
                        <p class="card-title">Modele : <?= $article['modele'] ?></p>
                        <p class="card-text">Size : <?= $article['size'] ?></p>
                        <p class="card-text">Color : <?= $article['color'] ?></p>
                        <p class="card-text">Description : <?= $article['comment'] ?></p>
                        <p class="card-text">Price : <?= $article['price'] ?></p>
                        <a href="?page=article&action=read" target="_blank"><button class="btn_item"><span>Buy</span></button> </a>
                        <p class="card-text"><small class="text-muted"><?= $article['date_add'] ?></small></p>
                    </div>
                </div>
            </div>
        </td>
        <?php

        ?>
    </table>
</div>

<?php require_once 'comment.php'; ?>

<?php
$body = ob_get_clean();
require('template.php');
?>