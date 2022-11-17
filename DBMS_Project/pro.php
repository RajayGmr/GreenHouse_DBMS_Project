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
<a href="pro.php" >
        <img id="logo" src="ghslogo.jpg" alt="LOGO" />
        

        
        <div>

         <!--- The top-right search icon, profile icon and cart icon --->

           
            <div class="profile">
                

 <a href="index1.php" >
                <img id="login" src="loginIC.jpg"  width="160px" target="_blank" /></a>
              </div>

          
        </div>
      </div>

    </header>
    <main>

    <!--- The middle button which are HOME and ABOUT US --->
 <main>
            <a class="button-one" 
            title="HOME" 
            href="pro.php">Home</a>
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
