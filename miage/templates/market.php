<?php $title = 'SneakerShop - Marketplace'; ?>

<?php ob_start(); ?>
<div class="box_title">
    <h1>Marketplace</h1>
</div>
<h3 style="margin-left: 41%;">Latest added items :</h3>

<br><br>
<h1><?php if (isset($_SESSION['login'])) {
        echo ('bonjour' . $_SESSION['admin']);
    } ?>
</h1>


<table>
    <?php foreach ($articles as $article) { ?>
        <td>
            <div class="card" style="width: 18rem;">
                <div class="card">
                    <img class="card-img-top" src="assets/images/<?= $article['modele'] ?>.jpg" alt="article">
                    <div class="card-body">
                        <h5 class="card-title"><?= $article['brand'] ?></h5>
                        <h5 class="card-title"><?= $article['modele'] ?></h5>
                        <p class="card-text"><?= $article['size'] ?></p>
                        <p class="card-text"><small class="text-muted"><?= $article['date_add'] ?></small></p>
                    </div>
                </div>
            </div>
        </td>
    <?php
    }
    ?>
</table>


<?php
$body = ob_get_clean();
require('template.php');
?>