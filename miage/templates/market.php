<?php $title = 'SneakerShop - Marketplace'; ?>

<?php ob_start(); ?>
<div class="box_title">
    <h1>Marketplace</h1>
    <h4>Latest added items :</h4>
</div>

<div class="market_table">
    <table>
        <?php
        $i = 0;
        foreach ($articles as $article) {

            if ($i == 4) {
                $i = 0;
                echo "<tr></tr>";
        ?>
                <td>
                    <div class="card" style="width: 18rem;">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/<?= $article['modele'] ?>.jpg" alt="article">
                            <div class="card-body">
                                <h5 class="card-title">Type : <?= $article['type'] ?></h5>
                                <h5 class="card-title">Brand : <?= $article['brand'] ?></h5>
                                <p class="card-text">Size : <?= $article['size'] ?></p>
                                <a href="?page=article&action=read&id=<?= $article['id']; ?>"><button class="btn_item"><span>See item </span></button> </a>
                                <p class="card-text"><small class="text-muted"><?= $article['date_add'] ?></small></p>
                            </div>
                        </div>
                    </div>
                </td>

            <?php } else { ?>

                <td>
                    <div class="card" style="width: 18rem;">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/<?= $article['modele'] ?>.jpg" alt="article">
                            <div class="card-body">
                                <h5 class="card-title">Brand : <?= $article['brand'] ?></h5>
                                <h5 class="card-title">Modele : <?= $article['modele'] ?></h5>
                                <p class="card-text">Size : <?= $article['size'] ?></p>
                                <a href="?page=article&action=read&id=<?= $article['id']; ?>"><button class="btn_item"><span>See item </span></button> </a>
                                <p class="card-text"><small class="text-muted"><?= $article['date_add'] ?></small></p>
                            </div>
                        </div>
                    </div>
                </td>
        <?php
                $i++;
            }
        }
        ?>
    </table>
</div>


<?php
$body = ob_get_clean();
require('template.php');
?>