<?php $title = 'SneakerShop - Register'; ?>

<?php ob_start(); ?>

<body>
<form action="?page=client&action=create" method="POST">
    <fieldset class="fieldset_form">
        <legend> Inscription </legend>
        <?php
        if (isset($erreur)) {
            echo '<font color="#e53935">' . $erreur . "</font>";
        }
        ?>
        <div class="table_container">
            <table>
                <tr>
                    <td>
                        <input type="text" class="form-control" placeholder="Enter name" name="name">
                    </td>
                    <td>
                        <input type="text" class="form-control" placeholder="Enter firstname" name="firstname">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" placeholder="Enter mail" name="mail">
                    </td>
                    <td>
                        <input type="text" class="form-control" placeholder="Enter nickname" name="nickname">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" class="form-control" placeholder="Enter password" name="password">
                    </td>
                    <td>
                        <input type="password" class="form-control" placeholder="Check password" name="password2">
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="submit" class="btn_decouvrir" value="Submit">
                    </td>
                </tr>
                <tr>
                    <td colspan="4">

                    </td>
                </tr>

            </table>
        </div>
    </fieldset>
</form>

    <div class="position">

       
</body>

<?php
$body = ob_get_clean();
require('template.php');
?>