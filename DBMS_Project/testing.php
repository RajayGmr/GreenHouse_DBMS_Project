<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title>Glass House Store</title>
    <link href="testing1.php" rel="stylesheet" />
  </head>
  <body>
    <header>
      
    <!--- The logo at top-left of the website --->

      <div class="second">
<a href="testing.php" >
        <img id="logo" src="ghslogo.jpg" alt="LOGO" />
        

        
        <div>

         <!--- The top-right search icon, profile icon and cart icon --->

              <a href="logout.php">Logout</a>
            <div class="profile">
                <a href="accountdetails.php" >
                <img id="profile" src="profileIcon.jpg" target="_blank" /></a>
              </div>
              <div class="cart">
                <a href="cart.php" >
                <img id="cart" src="cart.jpg" target="_blank" /></a>
              </div>
<div class="cart">
                <a href="customers.php" >
                <img id="customer" src="cuslis.jpg"  width="60px" target="_blank" /></a>
 <a href="GardenerList.php" >
                <img id="customer" src="gardener.jpg"  width="60px" target="_blank" /></a>
              </div>
<div class="cart">
<a href="OrderHistory.php" >
                <img id="customer" src="ordhis.jpg"  width="60px" target="_blank" /></a>
                   </div>
<div class="cart">
<a href="users.php" >
                <img id="users" src="users.jpg"  width="60px" target="_blank" /></a>
                   </div>
         
          
        </div>
      </div>

    </header>
    <main>

    <!--- The middle button which are HOME, Plant Infomation, and ABOUT US --->

        <main>
            <a class="button-one" 
            title="HOME" 
            href="testing.php">Home</a>
            <a class="button-two" title="SHOP"
             href="typesofPlants.php">Plants Infomation</a>
             <a class="button-three" 
             title="ABOUT US PAGE" 
             href="ABOUT.php">About us</a>
        </main>

        <!--- The function for showing picture in the slide --->

        <div class="slide">
            <img id="slide1" 
            class="slide-child active" 
            src="plant1.jpg" />
            <img id="slide2"
            
            class="slide-child" 
            src="plant2.jpg" />
            <img id="slide3"
             class="slide-child" src="plant3.jpg" alt="" />
            <img id="slide4"
             class="slide-child" src="plant6.jpg" alt="" />
            <img id="slide5" class="slide-child" src="plant5.jpg" alt="" />
            <div class="slide-selects">

          <!--- The function for choosing pictures in the slide --->

              <input
                type="radio"  name="slider"class="slide-radio"
                id="slider-radio-1"
                value="1"
                checked
              />
              <input
                type="radio"
                name="slider"
                class="slide-radio"
                id="slider-radio-2"
                value="2"
                checked
              />
              <input
                type="radio"
                name="slider"
                class="slide-radio"
                id="slider-radio-3"
                value="3"
              />
              <input
                type="radio"
                name="slider"
                class="slide-radio"
                id="slider-radio-4"
                value="4"
              />
              <input
                type="radio"
                name="slider"
                class="slide-radio"
                id="slider-radio-5"
                value="5"
              />
            </div>
          </div>
        </main>

        
</body>

<script src="hover.js"></script>
</html>
