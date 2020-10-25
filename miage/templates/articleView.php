<?php $title = 'SneakerShop - Market'; ?>

<?php ob_start(); ?>
<h1>Marketplace</h1>
<p>Latest added articles :</p>


<?php
    $body = ob_get_clean();
    require('template.php'); 
?>