<?php ob_start(); ?>
<div class="container">
    <h1>Vous êtes bien connecté <b><?= $_SESSION['login']; ?></b></h1>
    <h1>Admin<b><?php var_dump($_SESSION['admin']); ?></b></h1>
    
</div>
<?php
$body = ob_get_clean();
require "template.php"
?>