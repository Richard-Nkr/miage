<?php $title = 'SneakerShop - Profile'; ?>

<?php ob_start(); ?>

<body>
    <div class="position">

        <form action='' method='GET'>
            <fieldset class="fieldset_form">
                <legend>

                    Profil de <?= $_SESSION['login'] ?>

                </legend>
                <br>
                <div class="table_container">
                    <table class="form_table">
                        <tr>
                            <td class="champs">Id client : <?php echo $userInfo['id']; ?></td>
                        </tr>
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
                                <a href="?page=client&action=update"><button type="button" class="btn_form"> Edit profile</button></a>
                            </td>
                            <td>
                                <a href="commande.php"><button type="button" class="btn_form"> Mes commandes</button></a>
                            </td>
                    </table>
                </div>
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