<?php $title = 'SneakerShop - Edit profile'; ?>

<?php ob_start(); ?>

<body>

    <div class="position">

        <form action="?page=client&action=update" method="POST">
            <fieldset class="fieldset_form">
                <legend>Editer mon profil </legend>

                <table class="form_table">
                    <div id="obligatoire">Nouveau profil</div>

                    <tr>
                        <td class="champs">
                            Nouveau Nom : </td>
                        <td><input type="text" name='newName' palceholder='Nom' value="">
                        </td>
                    </tr>
                    <tr>
                        <td class="champs">
                            Nouveau Prenom : </td>
                        <td><input type="text" name='newFirstname' palceholder='Prenom' value="">
                        </td>
                    <tr>
                        <td class="champs">
                            Nouveau Mot de passe : </td>
                        <td><input type="password" name='newMail' palceholder='Mail'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type='submit' class="btn_form" value='Update'>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>

    </div>
</body>
<?php
$body = ob_get_clean();
require('template.php');
?>