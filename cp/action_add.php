<?php 
function action_add() {
    $cart = $_SESSION['cart'];
    $iCnt = count($cart);
    
    $id = $_POST['id'];
    
    $isExistProduct = FALSE;
    if ($iCnt > 0) {
      for ($i = 0; $i < $iCnt; $i++) {   # by all prod-ID in array
        if($cart[$i]["idProduct"] == $id) { # found ID already !
          $cart[$i]["count"] = ++$cart[$i]["count"];
          $isExistProduct = TRUE;
        }
      }
    } else {                              # array is empty
      $cart[0]["idProduct"] = $id;
      $cart[0]["count"] = 1;
    }
    
    if (!$isExistProduct) {               # array not empty but Product not found
      $cart[$iCnt]["idProduct"] = $id;    # add new Product to Cart
      $cart[$iCnt]["count"] = 1;
    }
    
    $_SESSION['cart'] = $cart;
    return 0;
  }
?>