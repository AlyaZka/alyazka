<?php
if (!(isset($_SESSION['cart']))){
    echo '<h4> Корзина порожня </h4>';
    exit;
  }
  $cart = $_SESSION['cart'];
  if (count($cart) == 0){
    echo '<h4> Корзина порожня </h4>';
    exit;
  }
  
  $total = 0.0;
  
  for ($i = 0; $i < count($cart); $i++){
    $idProduct = $cart[$i]["idProduct"];
    
    $query = 'SELECT *  FROM `product` WHERE id_product='.$idProduct.';';
    
    
    $results = $mysqli->query($query);
    while($row = $results->fetch_assoc()){
      $count = $cart[$i]['count'];
      $price = $row["product_price"];
      
      $total += $price * $count;
      
      echo'
      <div class="container">
      <div class="row row-40 justify-content-center">
      <div class="col-md-5 col-lg-6">
      <div class="row row-30 justify-content-center">
      <div class="col-sm-6 col-md-12 col-lg-6">
      <div class="oh-desktop">
      <article class="product product-2 box-ordered-item wow slideInRight" data-wow-delay="0s">
      <div class="unit flex-row flex-lg-column">
      <div class="unit-left">
      <div class="product-figure">
      <button class="button button-md button-primary button-pipaluk" value="Убрать" onclick="delFromCart('.$row["id_product"].')">
      Видалити
      </button>
      <img
      src="'.$row["product_photo"].'"
      alt="" width="270" height="280" />
      </div>
      </div>
      <div class="unit-body">
      <h6 class="product-title"><a href="#">'.$row["product_name"].'</a></h6>
      <div class="product-price-wrap">
      <div class="product-price">'.$cart[$i]["count"].' шт.</div>
      <br>
      <div class="product-price">'.($row["product_price"] * (int)$cart[$i]["count"]).'.00 грн.</div>
      </div>
      <br>
      </div>
      </div>
      </article>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      
      ';
    }
  }
  echo '<br><h4> <strong>Усього до сплати: '.$total.'.00 грн. </strong><h4>';
?>