<?php
/* [INIT - GET PRODUCTS] */
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "2a-config4.php";
require PATH_LIB . "2b-lib-db4.php";
require PATH_LIB . "3a-lib-products4.php";
$pdtLib = new Products4();
$products4 = $pdtLib->get();

/* [HTML] */ ?>
<!DOCTYPE html>
<html>
  <head>
    <title>
    ACI Kheer Mix (150g) [Buy 2 Get 1 Free]
    </title>
    <link rel="stylesheet" href="public/3c-theme.css">
    <script src="public/4a-cart4.js"></script>
  </head>
  <body>
    <div>
    <div class="logo">
              <img src="images/logo.png" width="200px" height="90px">
             </div>    
           
           <div class="navbar">
                      
              <a href="Home.php">Home</a>
               <a href="Vegetables.php">Vegetables</a>
               <a href="Fruits.php">Fruits</a>
               <a href="Medicine & Home Cleaning.php">Medicine & Home Cleaning</a>
               
               <div class="dropdown">  
              <button class="dropbtn" onclick="myFunction()">OFFERS ZONE
                    <i class="fa fa-caret-down"></i>
                  </button>
                  </button>
                <div class="dropdown-content" id="myDropdown">
                          
                        <a href="ACI Kheer Mix (150g).php">ACI Kheer Mix (150g) [Buy 2 Get 1 Free]</a>
                       <a href="Onion (Deshi Premium) [1kg].php">Onion (Deshi Premium) [1kg] 60% off</a>
                        <a href="Diploma Milk Powder (1kg).php">Diploma Milk Powder (1kg) 70%off</a>
                </div>

                </div> 
                 
                <a href="contact.php">CONTACT</a>
                <a href="about.php">ABOUT</a>
               </div>
</div>
      <!-- [CART BUTTON] -->
      <div id="page-cart-icon" onclick="cart.toggle();">
        &#128722; <span id="page-cart-count">0</span>
      </div>

    <!-- [PRODUCTS1] -->	
    <div id="page-products"><?php
      if (is_array($products4)) {
        foreach ($products4 as $id => $row) { ?>
          <div class="pdt">
            <img class="pdt-img" src="images/<?= $row['product_image'] ?>"/>
            <h3 class="pdt-name"><?= $row['product_name'] ?></h3>
            <div class="pdt-price">৳<?= $row['product_price'] ?></div>
            <div class="pdt-desc"><?= $row['product_description'] ?></div>
            <input class="pdt-add" type="button" value="Add to cart" onclick="cart.add(<?= $row['product_id'] ?>);"/>
          </div>
        <?php }
      } else {
        echo "No products found.";
      }
      ?></div>

    <!-- [CART] -->
    <div id="page-cart" class="ninja"></div>
    
    
    <br>
    <div class="footer">
  
  <form class="form-inline" style="color: white;font-size: large;">
    

  Copyright ©2020. All Rights Reserved By @ Bazar Shodai || This site developed By SEU Students

  </form>

</div>
  </body>

  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
  </body>
</html>