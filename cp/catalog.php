<?php
require 'connection.php';
session_start(); 
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Vivi</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <!-- Stylesheets-->

  <link rel="icon" type="image/png" href="виви.png"/>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <script language="JavaScript" type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
  <!--Подключение js нашей корзины-->
  <script  src="js/myCart.js"></script>


</head>

<body>
  <div class="page">
    <!-- Page Header-->
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap rd-navbar-modern-wrap">
        <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
          data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
          data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
          data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
          data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand"><img src="images/Vivi.jpg" alt=""
                      width="196" height="47" /></a></div>
              </div>
              <div class="rd-navbar-main-element">
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Basket-->
                  <div class="rd-navbar-basket-wrap">
                    <button class="rd-navbar-basket fl-bigmug-line-shopping198"
                      data-rd-navbar-toggle=".cart-inline"></button>
                    <div class="cart-inline">
                      <div class="cart-inline-footer">
                        <div class="group-sm pl-5"><a class="button button-md button-primary button-pipaluk"
                            href="Order.html">Перейти до корзини</a></div>
                      </div>
                    </div>
                  </div><a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping198" href="Order.html"></a>


                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">

                  <li class="rd-nav-item"><a class="rd-nav-link"><p><b>Welcome:</b> <i><?= $_SESSION["user_email"] ?></i></p></a>
                      </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="log.php" name="exit" id="exit">Вийти</a>
                      </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="catalog.php">Каталог</a>
                      </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">Про нас</a>
                      </li>


                  </ul>
                </div>

                <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main"
                data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span
                    class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span>
                </div>
                <div class="project-hamburger-2"><span class="project-hamburger-arrow"></span><span
                    class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                </div>
                <div class="project-close"><span></span><span></span></div>
              </div>

              </div>

              <div class="rd-navbar-project rd-navbar-modern-project">
                <div class="rd-navbar-project-modern-header">
                  <h4 class="rd-navbar-project-modern-title">Зв'язок з нами</h4>
                  <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main"
                    data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                    <div class="project-close"><span></span><span></span></div>
                  </div>
                </div>
                <div class="rd-navbar-project-content rd-navbar-modern-project-content">
                  <div>
                    <p>Зв'яжіться з нами, щоб дізнатися, як ми можемо вам допомогти.</p>
                    <div class="heading-6 subtitle">Де ми знаходимося та контакти</div>
                    <br>
                    <div style="overflow:hidden;width: 300px;position: relative;">
                      <iframe width="300" height="300" src="https://maps.google.com/maps?width=300&amp;height=300&amp;hl=en&amp;q=%D1%85%D0%B0%D1%80%D1%8C%D0%BA%D0%BE%D0%B2%20%D1%83%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0+(%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)&amp;ie=UTF8&amp;t=&amp;z=11&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                      <div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;">
                        <small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/en/">embedgooglemaps EN</a> & <a href="https://iamsterdamcard.it">iamsterdamcard</a>
                      </small>
                    </div>
                    <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                  </div>

                    <ul class="rd-navbar-modern-contacts">
                      <li>
                        <div class="unit unit-spacing-sm">
                          <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                          <div class="unit-body"><a class="link-phone" href="tel:#">+380 68-517-7832</a></div>
                        </div>
                        <div class="unit unit-spacing-sm">
                        <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                        <div class="unit-body"><a class="link-phone" href="tel:#">+380 96-406-9724</a></div>
                      </div>
                      </li>

                      <li>
                        <div class="unit unit-spacing-sm">
                          <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                          <div class="unit-body"><a class="link-email" href="mailto:#">viviofficialstore@gmail.com</a></div>
                        </div>
                      </li>
                    </ul>
                    <ul class="list-inline rd-navbar-modern-list-social">
                      <li><a class="icon fa fa-facebook" href="https://www.facebook.com/viviofficialstore"></a></li>
                      <li><a class="icon fa fa-twitter" href="https://twitter.com/vivi_official_s"></a></li>
                      <li><a class="icon fa fa-instagram" href="https://www.instagram.com/vivi_official_store/"></a></li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </nav>
      </div>
    </header>
<script>
    function addToCart(id_product){
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
</script>

<main>

        <section class="section text-center">
            <div class="parallax-container" data-parallax-img="https://cdn.onebauer.media/one/media/5a94/3d68/f3d1/644d/156c/2afc/Screen%20Shot%202018-02-26%20at%205.01.05%20PM.png">
              <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-40">
                <div class="container">
                  <h4>Великий асортимент косметики та товарів для догляду за шкірою</h4>
                  <br>
                 </div>
              </div>
            </div>
          </section>

<br>
<section class="module-small">
          <div class="container">
            <form class="row"  method="post" name="frm">
              <div class="col-sm-4 mb-sm-20">
              <select class="custom-select custom-select-lg mb-3" name='select1' id="select1" placeholder="Sort method">
                  <option value="" selected disabled>Сортування</option>
                  <option value="price_asc">По зростанню ціни</a></option>
                  <option value="price_desc">По спаданню ціни<a></option>
              </select>
              </div>
              
              <div class="col-sm-4 mb-sm-20">
              <select class="custom-select custom-select-lg mb-3" name='select2' id="select2">
                  <option value="" selected disabled>Фільтрація</option>
                  <option value="face">Догляд за обличчям</a></option>
                  <option value="body">Догляд за тілом</a></option>
                  <option value="hair">Догляд за волоссям</a></option>
                  <option value="cosmetics">Косметика<a></option>
              </select>
              </div>

              <div class="col-sm-4">
                <button  class="btn btn-block btn-round btn-sm" type="submit" >Застосувати</button >
  </div>
            </form>
          </div>
          <br>
        </section>

    <main>
      <div class="container">
        <section class="text-center mb-4">
          <div class="row">


          <?php

 $dbName = "cp";
 $dbPass = "";
 $dbUser = "root";
 $mysqli = new mysqli('localhost',$dbUser,$dbPass, $dbName);
 $query = "SELECT * FROM `product`";
 $mysqli->query($query);
 $q_order = "";
 $q_filter = "";

 $q = "SELECT * FROM `product`";
 if(isset($_POST['select1'])) {
  $select1=$_POST['select1'];
  switch ($select1) {
    case "price_asc":
      $q_order = " ORDER BY product_price ASC ";
      break;
     
    case "price_desc":
      $q_order = " ORDER BY product_price DESC ";
      break;
  }
}

 if(isset($_POST['select2'])) {
  $select2=$_POST['select2'];
  switch ($select2) {
    case "face":
      $q_filter = " WHERE `id_type` = 1 ";
      break;
     
     case "body":
      $q_filter = " WHERE `id_type` = 2 ";
      break;

     case "hair":
      $q_filter = " WHERE `id_type` = 3 ";
      break;
      
     case "cosmetics":
      $q_filter = " WHERE `id_type` = 4 ";
      break;
 }
}


 $results = $mysqli ->query($q.$q_filter.$q_order);

 while($row = $results ->fetch_assoc()){
   echo '
   <div class="col-lg-4 col-md-6 mb-4">
   <div class="card">
     <div class="flex-container">
         <a href="'.$row["product_desc"].'" class="pic">
       <img class="card-img-top"
         src="'.$row["product_photo"].'"
         alt="Clutch">
         </a>
       <a href="'.$row["product_desc"].'">
         <div class="mask rgba-white-slight"></div>
       </a>
     </div>
     <div class="card-body text-center">
       <a href="'.$row["product_desc"].'" class="grey-text">
         <h5> '.$row["product_name"].'</h5>
       </a>
       <h5>
         <strong>
           <a href="'.$row["product_desc"].' " class="black-text">

           </a>
         </strong>
       </h5>
       <h4 class="font-weight-bold red-text">
         <strong>'.$row["product_price"].'.00 грн.</strong>
       </h4>
       <button class="button button-md button-primary button-pipaluk" onclick="addToCart('.$row["id_product"].')">
         Додати до корзини
       </button>
     </div>
   </div>
 </div>
 ';
}

?>

          </div>
        </section>
      </div>
    </main>



<!-- Global Mailform Output-->

<!-- Javascript-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
<!-- coded by Ragnar-->
</body>

</html>