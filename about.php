<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Our Team Section</title>
	<link rel="stylesheet" href="stylesofmember.css">
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

<div class="wrapper">
  <h1>Our Team</h1>
  <div class="team">
    <div class="team_member">
      <div class="team_img">
        <img src="images/mukib.png" alt="Team_image">
      </div>
      <h3> Syed Mukibur Rahman</h3>
      <p class="role">Batch 42</p>
      <p>ID: 2016000000145</p>
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="images/eva.png" alt="Team_image">
      </div>
      <h3>Afsana Akhter Eva</h3>
      <p class="role">Batch 42</p>
      <p>ID: 2016000000146</p></div>
    <div class="team_member">
      <div class="team_img">
        <img src="images/shihab.png" alt="Team_image">
      </div>
      <h3>Shihab Uddin</h3>
      <p class="role">Batch 42</p>
      <p>ID: 2016000000171 </p>
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="images/mdsr.png" alt="Team_image">
      </div>
      <h3>Shohel Rana</h3>
      <p class="role">Supervisor</p>
      <p>Lecturer, Department of CSE
          <br>
          Southeast University
</p>
    </div>
  </div>
  <div class="footer">
  
  <form class="form-inline" style="color: white;font-size: large;">
    

  Copyright ©2020. All Rights Reserved By @ Bazar Shodai || This site developed By SEU Students

  </form>

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