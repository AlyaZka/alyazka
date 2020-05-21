<?php
include ('action_add.php');
include ('action_del.php');

$dbName = "cp";
$dbPass = "";
$dbUser = "root";
$mysqli = new mysqli('localhost',$dbUser,$dbPass,$dbName);
$query = "set names utf8";
session_start(); 

$mysqli->query($query);

$action = $_POST["action"];

if ($action == 'show'){
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

}

############################ add Product to Cart
elseif ($action == 'add') {
  action_add();
}

########################### delete Product from Cart
elseif ($action == 'del') {
  action_del();
}

########################### payments for Products in Cart
elseif ($action == 'checkout') { 
  
  $cart = $_SESSION['cart'];
  
  for ($i=0; $i < count($cart); $i++) {
    $nameProd = "UNDEFINED";
    $price = 0;
    
    $amountProd = $cart[$i]["count"];
    $idProduct = $cart[$i]["idProduct"];
    
    $query = "SELECT * FROM `product` WHERE id_product=$idProduct";
    $results = $mysqli->query($query);
    while($row = $results->fetch_assoc()) {
      $amountProdFromDb = $row["product_amount"];
      $nameProd = $row["product_name"];
      $price = $row["product_price"];
    }
    
    $priceOrder = $price * $amountProd;
    $newAmountProd = $amountProdFromDb - $amountProd;
    if($newAmountProd > 0){
      
      $order_address = "order_address";
      echo "- order_address=".$order_address;
      echo "- user_id=".$ui;
      
      if(isset($_POST['select3'])) {
        $select3=$_POST['select3'];
        
        echo "- select3=".$select3;
        
        switch ($select3) {
          case "1":
            $q_cart = "INSERT INTO `order` ( order_done, order_address,`id_user`, id_payment) VALUES ( 'no', $order_address,'".$_SESSION["user_id"]."', 1);";
          break;
          
          case "2":
            $q_cart = "INSERT INTO `order` ( order_done, order_address,`id_user`, id_payment) VALUES ( 'no', $order_address,'".$_SESSION["user_id"]."', 2);";
          break;
        }
      }
      echo "= q_cart=".$q_cart;
      
      $results = $mysqli ->query($q_cart);
      
      $changeCountProductQuetry = "UPDATE `product` SET product_amount=$newAmountProd WHERE id_product=$idProduct;";
      $results = $mysqli->query($changeCountProductQuetry);
      
      
      echo "Дякуємо за замовлення";
    } else {
      echo "На жаль, обраного товару немає в наявності";
    }
    $_SESSION['cart'] = [];
  }
  
}
?>

