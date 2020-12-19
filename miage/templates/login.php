<?php $title = 'SneakerShop - Login'; ?>

<?php ob_start(); ?>

<form action="?page=client&action=read" method="post">
    <fieldset class="fieldset_form">
        <legend> Login </legend> <br>
        <?php
        if (isset($erreur)) {
            echo '<font color="#e53935">' . $erreur . "</font>";
        }
        ?>
        <table class="form_table">
            <tr>
                <th>Nickname</th>
                <th> <input type="text" name="nickname"> </th>
            </tr>
            <tr>
                <th>Password</th>
                <th> <input type="password" name="password"></th>
            </tr>
            <tr>
                <th colspan="2"> <input type="submit" name="submit"> </th>
            </tr>
        </table>

    </fieldset>
</form>

<?php
$body = ob_get_clean();
require('template.php');
?>