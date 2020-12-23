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
      <a href="?page=article&action=create">Sell</a>
      <a href="contact-nous.php">Contact</a>
      <a href="panier.php">Basket</a>
      <?php if (!isset($_SESSION['login'])) { ?>
        <a href="?page=client&action=read">Login</a>
      <?php } else { ?>
        <a href="?page=client&action=close">Logout</a>
      <?php } ?>



    </div>
  </nav>
</header>