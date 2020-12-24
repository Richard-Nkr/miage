<?php $title = 'SneakerShop - Profile'; ?>

<?php ob_start(); ?>

<body>
    <div class="position">

        <form action='' method='GET'>
            <fieldset class="fieldset_form">
                <legend>

                    Profil de <?= $_SESSION['login'] ?>

                </legend>

                <table class="form_table">
                    <div id="obligatoire">Informations</div>

                    <tr>
                        <td class="champs">Nom : <?php echo $userInfo['name']; ?></td>

                    </tr>
                    <tr>
                        <td class="champs">Prenom : <?php echo $userInfo['firstname']; ?></td>

                    </tr>
                    <tr>
                        <td class="champs">Mail : <?php echo $userInfo['mail']; ?> </td>

                    </tr>
                    <tr>
                        <td>
                            <a href="editionprofil.php"><button type="button" class="add_panier"> Editer mon profil</button></a>
                        </td>
                        <td>
                            <a href="commande.php"><button type="button" class="add_panier"> Mes commandes</button></a>
                        </td>
                </table>
            </fieldset>
        </form>

    </div>
    <?php
    include('footer.php');
    ?>
</body>
<?php
$body = ob_get_clean();
require('template.php');
?>