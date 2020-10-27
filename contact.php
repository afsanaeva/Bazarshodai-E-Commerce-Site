<html>
<head>
<link rel="stylesheet" href="Style_contact.css" type="text/css" media="all" />
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
<div>
    

<h2  style="text-align:center" >Contact Us</h2>
  
  <form class="form" action="contactform.php" method="POST">
  <div class="column" style="text-align:center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.306831052183!2d90.40234235805343!3d23.796767996141686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70fdc3dbb69%3A0x5c38129562ae7a7c!2sRd+No+%23+23%2C+Dhaka+1212!5e0!3m2!1sen!2sbd!4v1552659220664" width="600" height="450" width="100" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    
    <p class="username" style="text-align:center">
      <input type="text" name="name" id="name" placeholder="Enter your name" >
      <label for="name">Name</label>
    </p>
    
    <p class="useremail" style="text-align:center">
      <input type="text" name="email" id="email" placeholder="eva0@gmail.com" >
      <label for="email">Email</label>
    </p>
    
    <p class="usercontact" style="text-align:center">
      <input type="text" name="contact" id="contact" placeholder="contact no." >
      <label for="contact">Phone</label>
    </p>		
  
    <p class="usertext" style="text-align:center">
      <textarea name="text" placeholder="Write something to us" ></textarea>
      <label for="text">Comments</label>
    </p>
    
    <p class="usersubmit" style="text-align:center">
      <input type="submit" name="submit" value="Send" >
    </p>
  </form>
  <div class="footer">
  
  <form class="form-inline" style="color: white;font-size: large;">
    

  Copyright ©2020. All Rights Reserved By @ Bazar Shodai || This site developed By SEU Students

  </form>

</div>
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
</body>
</html>