<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title>Glass House Store</title>
    <link href="testing1.php" rel="stylesheet" />
	<link rel="stylesheet" href="style.php">
  </head>
  <body>
    <header>
      
     
      <div class="second">
<a href="testing.php" >
        <img id="logo" src="ghslogo.jpg" alt="LOGO" />
        

        
        <div>
         
            <div class="profile">
                <a href="index.php" >
                <img id="profile" src="greenBrowse.jpg" target="_blank" /></a>
              </div>
            <div class="profile">
                <a href="accountdetails.php" >
                <img id="profile" src="profileIcon.jpg" target="_blank" /></a>
              </div>
              <div class="cart">
                <a href="cart.php" >
                <img id="cart" src="cart.jpg" target="_blank" /></a>
              </div>
          
         
          
        </div>
      </div>

    </header>
    <main>
        <main>
            <a class="button-one" 
            title="HOME" 
            href="testing.php">Home</a>
            <a class="button-two" title="SHOP"
             href="typesofPlants.php">shop</a>
             <a class="button-three" 
             title="ABOUT US PAGE" 
             href="ABOUT.php">About us</a>
        </main>
<div class="profile-images-card">
	<div class="profile-images">
		<img src="profile.png" id="upload-img">
	</div>
	<div class="custom-file">
	<em><label for="fileupload">Click to Upload <br>Profile Picture</label></em>	
		<input type="file" id="fileupload">
	</div>
</div>





<script src="js/jquery-latest.min.js"></script>
<script>
	$(function(){
		$("#fileupload").change(function(event) {
			var x = URL.createObjectURL(event.target.files[0]);
			$("#upload-img").attr("src",x);
			console.log(event);
		});
	})
</script>
</main>
</body>
</html>
