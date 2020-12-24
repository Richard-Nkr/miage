<?php $title = 'SneakerShop - Add items'; ?>

<?php ob_start(); ?>
<?php if (!isset($_SESSION['login']) or empty($_SESSION['login'])) {
    echo '<div id="box_center"><h4>You have to be a member to sell items.
    <br>
    Register <a href="?page=client&action=create">here</a> or login <a href="?page=client&action=read">here</a>. </h4></div><br><br>';
} else { ?>


    <form id="form_f" action="index.php?page=article&action=create" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
        <fieldset class="fieldset_form">
            <legend>Ajouter un article</legend><br>
            <?php

            if (isset($erreur)) {
                echo '<font color="#e53935">' . $erreur . "</font>";
            } elseif (isset($message)) {
                echo '<font color="green">' . $message . "</font>";
            }

            ?>
            <div class="table_container2">
                <table class="form_table">
                    <tr>
                        <td>
                            <input type="text" class="text_input" placeholder="Enter type (sneakers,clothes...)" size="30" name="type">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="text_input" placeholder="Enter state (new, second-hand...)" name="state">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="text_input" placeholder="Enter color" name="color">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="text_input" placeholder="Enter comment" name="comment">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="text_input" placeholder="Enter brand (Adidas, Nike...)" name="brand">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="text_input" placeholder="Enter modele" name="modele">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="text_input" placeholder="Enter size" name="size">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="text_input" placeholder="Enter price (in €) " name="price">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="file" name="img" value="Choose a picture" onclick="document.getElementById('form_f').value=''">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </div>
        </fieldset>
    </form>
<?php } ?>

<?php
$body = ob_get_clean();
require('template.php');
?>