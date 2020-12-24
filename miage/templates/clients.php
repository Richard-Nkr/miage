<?php $title = 'SneakerShop - Clients'; ?>

<?php ob_start(); ?>

<body>
    <div class="position">

        <form action='' method='GET'>
            <fieldset class="fieldset_form">
                <legend>

                    Clients List

                </legend>

                <table class="form_table">
                    <?php foreach ($clients as $client) { ?>
                        <tr>
                            <td class="champs">Nom : <?php echo $client['name']; ?></td>

                        </tr>
                        <tr>
                            <td class="champs">Prenom : <?php echo $client['firstname']; ?></td>

                        </tr>
                        <tr style="border-bottom-style: dashed;">
                            <td class="champs">Mail : <?php echo $client['mail']; ?> </td>

                        </tr>
                    <?php } ?>
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