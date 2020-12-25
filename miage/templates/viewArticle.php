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

<?php

if (!isset($_SESSION['login']) or empty($_SESSION['login'])) {
    echo '<div id="box_center"><h4>You have to be a member to write a comment.
            <br>
            Register <a href="?page=client&action=create">here</a> or login <a href="?page=client&action=read">here</a>. </h4></div><br><br>';
} else {
?>

<div class="table_container2">
        <form method="POST" action="?page=comment&action=create&id=<?= $_GET['id']; ?>" accept-charset="utf-8">

            <table class="table_comments">
                <tr>
                    <td>
                        <?= $_SESSION['login']; ?> :
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea rows="10" cols="43" name="content" placeholder="Write your comment here !"></textarea>
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td>
                        <input type="submit" class="btn_form" value="Post my comment">

                    </td>
                </tr>
                </tbody>
            </table>

        </form>
    </div>
    <br><br>


<?php echo $content; ?>

<?php } ?>
<?php
$body = ob_get_clean();
require('template.php');
?>