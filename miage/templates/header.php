<header>
  <nav class="menu">
    <marquee behavior="alternate" class="livraison">Delivery charges depends on the destination country </marquee>
    <div class="m-left">
      <a href="index.php?action=show">
        <img src="assets/images/logo2.png" alt="Logo de Sneaker Shop">
      </a>
    </div>
    <div class="m-right">
      <a href="?page=article&action=show">Marketplace</a>
      <a href="vendre.php">Vendre</a>
      <a href="contact-nous.php">Contactez-nous</a>
      <a href="panier.php">Panier</a>
      <a href="login.php">Administration</a>
      <?php
      if (!isset($_SESSION['username']) or empty($_SESSION['username'])) {
      ?>
        <a href="?page=client&action=read">Login</a>
      <?php } else {
      ?>
        <a href="profil.php?id_membre=<?= $_SESSION['username']; ?>">Profil</a>
        <a href="?page=client&action=close">Logout</a>
      <?php
      } ?>



    </div>
  </nav>
</header>