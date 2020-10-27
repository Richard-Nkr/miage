<header>
  <nav class="menu">
    <marquee behavior="alternate" class="livraison">Delivery charges depends on the destination country </marquee>
    <div class="m-left">
      <a href="index.php">
        <img src="assets/images/logo2.png" alt="Logo de Sneaker Shop">
      </a>
    </div>
    <div class="m-right">
      <a href="templates/articleView.php">Marketplace</a>
      <a href="vendre.php">Vendre</a>
      <a href="contact-nous.php">Contactez-nous</a>
      <a href="panier.php">Panier</a>
      <a href="login.php">Administration</a>
      <?php
      if (!isset($_SESSION['id_membre']) or empty($_SESSION['id_membre'])) {
      ?>
        <a href="connexion.php">Connexion</a>
      <?php } else {
      ?>
        <a href="profil.php?id_membre=<?= $_SESSION['id_membre']; ?>">Profil</a>
        <a href="deconnexion.php">Deconnexion</a>
      <?php
      } ?>



    </div>
  </nav>
</header>