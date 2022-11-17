<!DOCTYPE html>
<html>
    <style>
        table{
            border-top: solid 2px;
            border-left: solid 2px;
            border-right: solid 2px;
            border-bottom: solid 2px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }

        h1{
            text-align: center;
        }

    </style>
	<head>
		<title>Order History</title>
    <link href="testing1.php" rel="stylesheet" />
    </head>

    <header>
      
     
        <!--- The logo at top-left of the website --->

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
<div class="cart">
                <a href="customers.php" >
                <img id="customer" src="cuslis.jpg"  width="60px" target="_blank" /></a>
 <a href="GardenerList.php" >
                <img id="customer" src="gardener.jpg"  width="60px" target="_blank" /></a>
              </div>
              <div class="cart">
                <a href="OrderHistory.php" >
                <img id="cart" src="ordhis.jpg" target="_blank" /></a>
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
             href="typesofPlants.php">Plants Infomation</a>
             <a class="button-three" 
             title="ABOUT US PAGE" 
             href="ABOUT.php">About us</a>
          </main>

	<body>

		<h1>Order History <br></h1>
		<table>
<tr>
            <th>ID</th>

            <th>Name</th>
            <th>email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Payment method</th>
 <th>Products</th>
            <th>Amount paid</th>


</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "shopping_cart");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM orders 
ORDER by Id  ASC;"


;
$result = $conn->query($sql);
if ($result->num_rows > 0) {

// this is output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td>
<td>" . $row["name"] . "</td>
<td>". $row["email"]. "</td>
<td>". $row["phone"]. "</td>
<td>". $row["address"]. "</td>
<td>". $row["pmode"]. "</td>
<td>". $row["products"]. "</td>
<td>". $row["amount_paid"]. "</td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

   

        </table>
	</body>

</html>
