<!DOCTYPE html>

<!-- Author: Jean Pierre Pacheco Avila (jpachecov)-->
<html lang="en" ng-app='amerivacs'>
  <head>
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AmeriVacS</title>

    <link rel="shortcut icon" type="image/png" href="/img/logo_menu.png"/>
    <link rel="stylesheet" type="text/css" href="css/responsive/menu.css"/>
    <link rel="stylesheet" type="text/css" href="css/responsive/tablas.css"/>
    <link rel="stylesheet" type="text/css" href="css/responsive/productos.css"/>
    <link rel="stylesheet" type="text/css" href="css/responsive/home.css"/>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="css/style.css" rel="stylesheet">
  </head>
  <body  onload="javascript:cambiarPestanna(pestanas,pestana1);" >
   <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <div ng-controller='controlador'>



      <div class='container container-fluid app'>
        <header class=' header col-md-12 col-sm-12 col-xs-12'>

          <ul class='menu col-md-12 col-sm-12 col-xs-12 nopadding' style='background-color:white; z-index:5;'>
            <li class="col-md-12 col-sm-12 col-xs-12">
               <a class='logo_container col-md-3 col-sm-7 col-xs-9' href="/home">
                <img class='logo_up' src="img/home/logo_000.png" alt="AmeriVacS">
               </a>     
            </li>
            <!--<li class='col-sm-1 col-xs-1' style="padding:8px 0 8px 0">
              <a class="icon" href="http://catalog.amerivacs.com/browseGroup.cfm" target="_blank">
                <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
              </a>
            -->
            </li>
            <li class='col-xs-3 col-sm-2 col-md-1'>
              <a href="/contact">Contact</a> 
            </li>
            <li class='raya-derecha col-xs-3 col-sm-3 col-md-1'>
              <a href="/about">About us</a>  
            </li>
            <li class='raya-derecha col-xs-3 col-sm-3 col-md-1' ng-mouseover="showMenu()" ng-mouseleave="hideMenu()">
              <a href="/products">Products<span class='trian'>&#x25BC</span> </a>  
            </li>
            <li class='raya-derecha col-xs-3 col-sm-3 col-md-1'>
              <a href="/home">Home</a>  
            </li>



          </ul>
          <li class='col-md-12 col-sm-12 col-xs-12' style='position:absolute; bottom:0px; height:110px; overflow:hidden; padding:0px'>



          </li>
          <!-- Columna para los botones -->
            <div class='col-md-12 col-sm-12 col-xs-12 show-menu' style='position:relative; z-index:4;'>
              <ul class='col-md-3 col-xs-12 col-sm-12' style="position:absolute; bottom:-90px; right:0px" ng-mouseover="showMenu()" ng-mouseleave="hideMenu()" style='padding:0%; float:right;'>
                <li class='hover-2 boton col-md-9 col-sm-4 col-xs-4  r-bottom back-white2 nopadding txt-c' style='float:left'>
                  <a class='font1' href="/product">All products</a>
                </li>
                <li class='hover-2 boton col-md-9 col-sm-4 col-xs-4  r-bottom back-white2 nopadding txt-c' style='float:left'>
                  <a class='font1' href="/compare">Compare vacuum sealers</a>
                </li>
                <li class='hover-2 boton col-md-9 col-sm-4 col-xs-4 back-white2 nopadding txt-c' style='float:left'>
                  <a class='font1' href="/selector">Vacuum sealer selector</a>
                </li>      
              </ul>
            </div>

        </header>
      </div>

            <!-- Carrito de compras -->
      <div class='container cart-container' style='position:fixed; z-index:20; top:-600px; padding:0%;' ng-include='carrito_url'></div>

      <div class="slide-animate-container" style='overflow:hidden'>
        <!--<div  ng-include="currentPage" class="animation contenido-princi" [autoscroll="true"]></div>-->
        <div  ng-view class="animation contenido-princi" [autoscroll="true"]></div>
      </div>


      <div class="footer container nopadding">
         <div class='info_foot col-md-7 col-sm-6 col-xs-12'>
            <div class='foot-img col-md-8 col-sm-12 col-xs-12' style='padding-left:0%'>
              <img src="img/home/logo-menu_000.png" alt="">
            </div>
           <p class="col-md-12 col-sm-12 col-xs-12">
             CONTACT US
             <br><br>
             <span style='width:49%; display:inline-block; margin:0%;'>1518 Lancaster Point Way</span>
             <span style='width:49%; display:inline-block; margin:0%;'>Tel 1 (877) AmeriVacS </span>
             <span style='width:49%; display:inline-block; margin:0%;'>Fax (619) 498-8222 </span>
             <br>
             San Diego, CA 92154
           </p>
            <div class="col-md-12 col-sm-12 col-xs-12" style="padding-top:20px">
              <script type="text/javascript" src="https://sealserver.trustwave.com/seal.js?code=6f400ac2f6094ade9615ab5897e016a2"></script>          
            </div>
         </div>
         <div class='submenu col-md-5 col-xs-12 col-sm-6'>
           <span class='cursor hov4 col-md-3 col-xs-3' ng-click='loadPage("home")'>HOME</span>
           <span class='cursor hov4 col-md-3 col-xs-3' ng-click='loadPage("products")'>PRODUCTS</span>
           <span class='cursor hov4 col-md-3 col-xs-3' ng-click='loadPage("about_us")'>ABOUT US</span>
           <span class='cursor hov4 col-md-3 col-xs-3' ng-click='loadPage("contact")'>CONTACT US</span>
         </div>

         <div class='col-md-5 col-sm-6 col-xs-12'>
            
            <div class='col-md-3 col-xs-3 col-sm-3' style='height:2px'></div>
            <div class='col-md-9 col-xs-9 col-sm-6'>
              <span class='col-md-12 col-sm-12 col-xs-12 hov4 cursor' ng-click='loadPage("compare")' style='text-align:left;'>&#9658;COMPARE OUR MODELS</span>
              <span class='col-md-12 col-sm-12 col-xs-12 hov4 cursor' ng-click='loadPage("selector")' style='text-align:left;' > &#9658;VACUUM SEALER SELECTOR</span>
              <span class='col-md-12 col-sm-12 col-xs-12 hov4 cursor' ng-click='toProduct("AVN")' style='text-align:left;' > &#9658;AVN</span>
              <span class='col-md-12 col-sm-12 col-xs-12 hov4 cursor' ng-click='toProduct("AVS")' style='text-align:left;' > &#9658;AVS</span>
              <span class='col-md-12 col-sm-12 col-xs-12 hov4 cursor' ng-click='toProduct("CAVN")' style='text-align:left;' > &#9658;CAVN</span>
              <span class='col-md-12 col-sm-12 col-xs-12 hov4 cursor' ng-click='toProduct("PARTS")' style='text-align:left;' > &#9658;REPLACEMENT PARTS</span>
            </div>
         </div>

      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/velocity.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/angular-route.js"></script>   
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.5.6/angular-sanitize.js"></script>
    <script src="js/sizeChecker.js"></script>
    <script type="text/javascript" src="js/cambiarPestanna.js"></script>
        
    <!--<script src="http://sdks.shopifycdn.com/js-buy-sdk/latest/shopify-buy.polyfilled.globals.min.js"></script>-->
    <script src="js/app.js"></script>
    <script src="js/products.js"></script>
    <script src="js/compare.js"></script>
    <script src="js/selector.js"></script>
    <script src="js/contact.js"></script>
    

  </body>
</html>
