<?php

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

  ?>