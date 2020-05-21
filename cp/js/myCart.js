+function addToCart(id_product){
    console.log('add ' + id_product);
    $.ajax({
        async: false,
        type: "POST",
        url: "cart.php",
        dataType:"text",
        data: 'action=add&id=' + id_product,
        error: function () {
            alert( "Не зміг" );
        },
        success: function (response) {
            alert('Додали у корзину товар ' + id_product);
        }
    });
}

function showMyCart(){
    console.log('show ');
    $.ajax({
        async: false,
        type: "POST",
        url: "cart.php",
        data: "action=show",
        dataType:"text",
        error: function () {
            alert( "Виникла помилка при додаванні товара" );
        },
        success: function (response) {
            $('#in-check').html(response);
        }
    });
}

function delFromCart(id_product){
    console.log('del ' + id_product);
    $.ajax({
        async: false,
        type: "POST",
        url: "cart.php",
        data: 'action=del&id=' + id_product,
        dataType:"text",
        error: function () {
            alert( "Виникла помилка при додаванні товара" );
        },
        success: function (response) {
            showMyCart();
            console.log(response);
        }
    });
}

function checkOut(){

  address_user = $('#order_address').val();

  console.log('checkout');
  $.ajax({
      async: false,
      type: "POST",
      url: "cart.php",
      data: 'action=checkout&&order_address=' + order_address,
      dataType:"text",
      error: function () {
          alert( "Виникла помилка" );
      },
      success: function (response) {
          showMyCart();
          console.log(response);
      }
  });
}
