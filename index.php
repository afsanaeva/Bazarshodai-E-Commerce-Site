
<!DOCTYPE html>
<html>
<head>
  <title>Bazar Shodai  </title>
  <link rel="stylesheet" type="text/css" href="style.css">
 
</head>
<body>
 <div class="main" >
   <div class="topbar"></div>

   <div class="social_icon">
    <div class ="container">
       <div class="icon">
     <a href="https://www.gmail.com"><img src="images/icon/1.png" width="30px" height="40px"></a>
     <a href="https://www.instagram.com"><img src="images/icon/2.png" width="30px" height="40px"></a>
     <a href="https://www.facebook.com"><img src="images/icon/3.png" width="30px" height="40px"></a>
     <a href="https://twitter.com"><img src="images/icon/4.png" width="30px" height="40px"></a>
       </div>
         <div class="header_right" style="font-size: large;">
               <div class="login_register_btn">
               
                   
                   <a href="login.php"> Login </a>
                   <a href="register.php"> /Register </a>
                   
               </div>
               
             </div>

</div>

</div>
      </div>

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




        
<div class="content section" style="max-width:80%" align="center">
  <img class="mySlides" src="images/1.jpg" style="width:50%" "height:50%">
  <img class="mySlides" src="images/2.png" style="width:40%" "height:40%">
  <img class="mySlides" src="images/3.jpg" style="width:50%" "height:50%">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>






<div class="footer">
  
  <form class="form-inline" style="color: white;font-size: large;">
    

  Copyright ©2020. All Rights Reserved By @ Bazar Shodai || This site developed By SEU Students

  </form>

</div>

   
</body>
  </html>