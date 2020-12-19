<?php $title = 'SneakerShop - Register'; ?>

<?php ob_start(); ?>

<body>

    <div class="position">

        <form action="?page=client&action=create" method="POST">
            <fieldset class="fieldset_form">
                <legend>REGISTER</legend>

                <table class="form_table">
                    <div id="obligatoire">(*) Required field</div>
                    <div id="erreur_msg"></div>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="champs">What's your firstname ? * </td>
                        <td><input type="text" id="firstname" name="firstname" placeholder="Firstname" /></td>
                    </tr>
                    <tr>
                        <td class="champs">What's your last name ? </td>
                        <td><input type="text" name="name" placeholder="Name" /></td>
                    </tr>
                    <tr>
                        <td class="champs">What's your e-mail address ? *</td>
                        <td><input type="mail" id="email" name="mail" placeholder="christophe@colomb.fr" /></td>
                    </tr>
                    <tr>
                        <td class="champs">Choose a password</td>
                        <td> <input type='password' id="mdp" name="password" placeholder="Mot de passe " /></td>
                    </tr>
                    <tr>
                        <td class="champs">Choose a nickname</td>
                        <td> <input  id="nickname" name="nickname" placeholder="nickname" /></td>
                    </tr>
                    <tr>
                        <td class="champs">Admin</td>
                        <td> <input type='password' id="mdp" name="admin" placeholder="0 or 1" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="forminscription" value="Envoyer">
                            <input type="reset" name="" value="Effacer">
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