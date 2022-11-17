<html><head>
    <title>Glasshouse Store</title>

    <!--- The script for when profile is updated --->

    <script>
        function submitbutton(){
           alert("your Profile has been updated");
        }
     </script>

    <!--- The styling --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
      <link href="testing1.php" rel="stylesheet">

      <style media="screen">
        .info{
            width: 90%;

            display: flex;
        }

        .left-info{
            width: 30%;
            margin-top: 60px;


            display: flex;
            align-items: center;

            flex-direction: column;

        }
        .left-info .pf-container{
            width:140px;
            height: 170px;

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

            margin-bottom: 50px;
            margin-left: 190px;

            border: 3px solid black;
        }
        .left-info .pf-container .profile{
            width: 100px;
            height: 100px;
            border:3px solid black ;
            border-radius: 50%;

            text-align: center;
            line-height: 80px;

            font-size: 25px;
            font-weight: 900;

            margin-bottom: 20px;

            position: relative;
        }
        .profile::before{
            content: '';
            width: 100%;
            height: 100%;

            position: absolute;
            top: 0;
            left: 0;

            line-height: 110px;
            text-transform: uppercase;
            font-size: 9px;
            font-weight: 900;
        }

        .pf-tool{
            display: flex;
            flex-direction: column;
            margin-left: 100px;
        }

        .pf-tool a{
            text-decoration: none;
            margin-bottom: 10px;
            color: black;
        }
        .right-table{
            width: 65%;
            height: 450px;
            margin-top: 60px;
            border: 3px solid black;

            display: flex;

            align-items: center;
            flex-direction: column;

            position: relative;
        }
        .right-table h2{
            text-decoration: underline;
        }
        .right-table1{
            width: 35%;
            height: 200px;
            margin-top: 70px;
            border: 3px solid black;

            display: flex;

            align-items: center;
            flex-direction: column;

            position: relative;
        }
        .right-table1 h2{
            text-decoration: underline;
        }
        .right-table1 table{
            width: 95%;
            height: 80%;
            border: 2px solid black;
        }


        .right-table table{
            width: 95%;
            height: 80%;
            border: 2px solid black;
        }

        table {
            border-collapse: collapse;
          }

        table tr td{
            border-right: 3px solid black;
            border-left: 3px solid black;
        }

        table tr th{
            background-color: silver;
            height: 40px;
            border-right: 3px solid black;
            border-left: 3px solid black;
        }

        table tr:nth-of-type(odd){
            background-color: rgb(224, 224, 224);
        }
        table tr:nth-of-type(even){
            background-color: white;
        }

        table tr:last-of-type{
            height: 35px;
        }
        .right-table span{
            position: absolute;
            top:30px;
            right: 60px;
            font-weight: bold;
        }

        .footer{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

            position: fixed;
            bottom: 10px;
            right:40px;
        }

        .footer p{
            margin: 0;
        }

      </style>
</head>
<body>
  <header>
      <!--- The logo at top-left of the website --->
     <div class="second">
<a href="testing.php" >
        <img id="logo" src="ghslogo.jpg" /></a>
        

        
        <div>
            <!--- The top-right search icon, profile icon and cart icon --->
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
            <!--- The middle button which are HOME, Plant Infomation, and ABOUT US --->
            <a class="button-one" 
            title="HOME" 
            href="testing.php">Home</a>
            <a class="button-two" title="SHOP"
             href="typesofPlants.php">Plants Infomation</a>
             <a class="button-three" 
             title="ABOUT US PAGE" 
             href="ABOUT.php">About us</a>

                 <!--- The left part of the page which have Account Detials, Order History, and Sign out --->
               <div class="info">
                   <div class="left-info">
                       <div class="pf-container">
                           <div class="profile">
                               +<span></span></div>
                           Full Name
                           
                       </div>
                      
                       <div class="pf-tool">
                           <a href="#"><i class="fas fa-user-plus"></i><b>Account Details</b></a>
                           <a href="#"><i class="fas fa-table"></i><b> Order History</b> </a>
                           <a href="#"><i class="fas fa-sign-out-alt"></i><b>Sign Out</b></a>
                       </div>
                   </div>
               <div class="right-table">
                   <h2>Account Details</h2>
                   <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 20%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #19db63;
  padding: 20px;
}
</style>
</head>
<body>

<!--- The part where customer can change their infomation and upload their picture --->

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    email : <input type = "email" name = "email" placeholder="Enter email" />
    <br>
    <form action="/action_page.php">
        <label for="birthday">Date of Birth</label>
        <input type="date" id="birthday" name="birthday">
       
      
      <label>Occupation</label>
      <input type="text" id="fname" name="Occupation" placeholder="Your work..">
<br>
      <label for="phone">Enter a phone number:</label>
      <input type="tel" id="phone" name="phone"
       placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}-[0-9]{2}" required><br>
<br>
<h3>Home</h3>
<label>Address</label>
<input type="text" id="address" name="Address" placeholder="Your residence..">
<label>City</label>
<input type="text" id="city" name="City" placeholder="name of city..">
<label>State</label>
<input type="text" id="State" name="State" placeholder="Your state.."><br>
<label>Zip/Postal code</label>
<input type="text" id="number" name="code" placeholder="input digits..">

    <!--- Country selecting part --->

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="Thailand">Thailand</option>
      <option value="canada">Canada</option>
      <option value="Malaysia">Malaysia</option>
      <option value="Russia">Russia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="Italy">Italy</option>
      <option value="Saudi Arabia">Saudi Arabia</option>
      <option value="Mauritius">Mauritius</option>
      <option value="United Kingdom">United Kingdom</option>


      <option value="Bangladesh">Bangladesh</option>
      <option value="NewZealand">NewZealand</option>
      <option value="France">France</option>
      <option value="Srilanka">Srilanka</option>
      <option value="Nepal">Nepal</option>
      <option value="China">China</option>
      <option value="Cambodia">Cambodia</option>
      <option value="Philippines">Philippines</option>
      <option value="Pakistan">Pakistan</option>
      <option value="India">India</option>

      <option value="Indonesia">Indonesia</option>
      <option value="australia">Australia</option>
      <  <option value="norway">norway</option>
      <option value="Afghanistan">Afghanistan</option>
      <option value="Turkey">Turkey</option>
      <option value="Yemen">Yemen</option>
      <option value="Egypt ">Egypt</option>
      <option value="denmark">denmark</option>
      <option value="sweden">sweden</option>
      
      <option value="switzerland">switzerland</option>
      <option value="Mali">Mali</option>
      <option value="Iraq">Iraq</option>
      <option value="Iran">Iran</option>
      <option value="Greece">Greece</option>
      <option value="Austria">Austria</option>
      <option value="Palestine">Palestine</option>
    </select>
    <button onclick="document.location='notun.php'">Change profile Picture</button>
  </form>
</div>

<input onclick="submitbutton()" type = "submit" name = "Update Profile" value = "Update Profile " 
width="20" height= "20"/>


<br>
</body>
</html>

                           

                   </tbody>


                   <div class="footer">
                       <i class="fas fa-comments fa-2x"></i>
                       <p>Helpline</p>
                   </div>


  

</div></div></main></main></header></body></html>