<?php $title = 'SneakerShop - Home' ?>
<?php ob_start(); ?>

<body>
    <div class="center">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/bg.jpg" class="d-block w-100" alt="Ajoute" width="753" height="582">
                    <div class="carousel-caption d-none d-md-block">

                        <h2>
                            <a href="?page=article&action=show"> <button class="btn_decouvrir" type=" button">Sell ​​your sneakers or items, at the price you want !</button> </a>

                        </h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/vendre.png" class="d-block w-100" alt="Vendre" width="753" height="582">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>
                            <a href="sneakers.php"> <button class="btn_decouvrir" type=" button">Find a deal !</button> </a>

                        </h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/argent.jpg" class="d-block w-100" alt="Argent" width="753" height="582">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>
                            <a href="sneakers.php"> <button class="btn_decouvrir" type=" button">Get your money !</button> </a>

                        </h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br><br>

</body>

<?php
    $body = ob_get_clean();
    require ('template.php');
?>