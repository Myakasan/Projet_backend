<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="style/style.css">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Titillium+Web" rel="stylesheet">

  <title>L33T SH0PPING</title>
</head>

<body>
  <header class="img-fluid container-fluid">
    <?php include('header.php'); ?>
  </header>


  <nav>
    <?php include('nav.php'); ?>
  </nav>

  <div class="monPanierResponsive">
    <h1>Votre panier</h1>

  <div class="shopping-cart">

    <div class="column-labels">
      <label class="product-image">Image</label>
      <label class="product-details">Product</label>
      <label class="product-price">Prix</label>
      <label class="product-quantity">Quantité</label>
      <label class="product-removal">Remove</label>
      <label class="product-line-price">Total</label>
    </div>

    <div class="product">
      <div class="product-image">
        <img src="./img/tee1.jpg">
      </div>
      <div class="product-details">
        <div class="product-title">The Lord of Drinks</div>
        <p class="product-description">Il n'y a pourtant pas de bar dans les ruines de la moria...</p>
      </div>
      <div class="product-price">22.00</div>
      <div class="product-quantity">
        <input type="number" value="2" min="1">
      </div>
      <div class="product-removal">
        <button class="remove-product">
          Retirer
        </button>
        <button class="update-product">
          Mettre à jour
        </button>
        <button class="view-product">
          Voir la fiche du produit
        </button>
      </div>
      <div class="product-line-price">44.00</div>
    </div>

    <div class="product">
      <div class="product-image">
        <img src="./img/tee3.jpg">
      </div>
      <div class="product-details">
        <div class="product-title">Call me Unicorn</div>
        <p class="product-description">Qui à dis que les chats n'avaient pas le droit de rêver ?!?</p>
      </div>
      <div class="product-price">20.00</div>
      <div class="product-quantity">
        <input type="number" value="1" min="1">
      </div>
      <div class="product-removal">
        <button class="remove-product">
          Retirer
        </button>
        <button class="update-product">
          Mettre à jour
        </button>
        <button class="view-product">
          Voir la fiche du produit
        </button>
      </div>
      <div class="product-line-price">20.00</div>
    </div>

    <div class="totals">
      <div class="totals-item">
        <label>Sous-total</label>
        <div class="totals-value" id="cart-subtotal">64.00</div>
      </div>
      <div class="totals-item">
        <label>TVA (20%)</label>
        <div class="totals-value" id="cart-tax">12.80</div>
      </div>
      <div class="totals-item">
        <label>Frais de livraison</label>
        <div class="totals-value" id="cart-shipping">10.00</div>
      </div>
      <div class="totals-item totals-item-total">
        <label>Total TTC</label>
        <div class="totals-value" id="cart-total">96.80</div>
      </div>
    </div>

        <button class="checkout">Valider la commande</button>

  </div>

  </div>

  <footer>
    <?php include('footer.php'); ?>
  </footer>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
