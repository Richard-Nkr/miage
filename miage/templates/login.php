<?php $title = 'SneakerShop - Login'; ?>

<?php ob_start(); ?>

<form action="?page=client&action=read" method="POST">
    <fieldset class="fieldset_form">
        <legend> Connexion </legend>
        <?php if (null !== $this->session->get('error')) { ?>
            <div class="alert alert-warning">
                <?= $this->session->showFlashMessage('error'); ?>
            </div>
        <?php } ?>
        <div class="table_container">
            <table class="form_login">
                <tr>
                    <td rowspan="2">
                        <input type="text" class="form-control" placeholder="Entrer nickname" name="nickname">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" class="form-control" placeholder="Entrer mot de passe" name="password">
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="submit" class="btn_form" value="Submit">
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <p style="color:black;" ;>No account ? - <a href="?page=client&action=create" class="register">Register here</a></p>
                    </td>
                </tr>

            </table>
        </div>
    </fieldset>
</form>




<?php
$body = ob_get_clean();
require('template.php');
?>