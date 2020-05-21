<?php
function action_del() {
  $id = $_POST['id'];
  $newCart = array();
  
  $cart = $_SESSION['cart'];
  for ($i = 0; $i < count($cart); $i++) {
    $idProduct = $cart[$i]["idProduct"];
    if($idProduct == ""){
      continue;
    }
    if ($id != $idProduct) {
      $newCart[count($newCart)] = $cart[$i];
    }
  }
  $_SESSION['cart'] = $newCart;
  return 0;
}
?>