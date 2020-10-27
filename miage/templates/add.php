<?php $title = 'SneakerShop - Add items'; ?>

<?php ob_start(); ?>

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
        <table class="form_table">
            <tr>
                <td>
                    Type
                </td>
                <td>
                    <input type="text" name="type">
                </td>
            </tr>
            <tr>
                <td>
                    Size
                </td>
                <td>
                    <input type="text" name="size">
                </td>
            </tr>
            <tr>
                <td>
                    Modèle
                </td>
                <td>
                    <input type="text" name="modele">
                </td>
            </tr>
            <tr>
                <td>
                    Color
                </td>
                <td>
                    <input type="text" name="color">
                </td>
            </tr>

            <tr>
                <td>
                    State
                </td>
                <td>
                    <input type="text" name="state">
                </td>
            </tr>
            <tr>
                <td>
                    Brand
                </td>
                <td>
                    <input type="text" name="brand">
                </td>
            </tr>
            <tr>
                <td>
                    Comment
                </td>
                <td>
                    <input type="text" name="comment">
                </td>
            </tr>
            <tr>
                <td>
                    Price
                </td>
                <td>
                    <input type="text" name="price">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit">
                </td>
            </tr>
        </table>
    </fieldset>
</form>
<?php
$body = ob_get_clean();
require('template.php');
?>