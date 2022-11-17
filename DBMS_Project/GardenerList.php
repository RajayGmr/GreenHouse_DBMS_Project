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
		<title>Gardeners list</title>
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
                <img id="customer" src="ordhis.jpg"  width="60px" target="_blank" /></a>
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

		<h1>Gardeners List <br></h1>
		<table>
<tr>
            <th>Name</th>

            <th>ID</th>
            <th>Birthdate</th>
            <th>Address</th>
            <th>Joined year</th>
            <th>Salary</th>

</tr>

 <!-- in this part it fetches the data but however if there is an error
in database connection,then we display the error and exit program -->
<?php
$conn = mysqli_connect("localhost", "root", "", "list");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM gardeners 
ORDER by Id  ASC;"


;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Name"]. "</td>
<td>" . $row["Id"] . "</td>
<td>". $row["Birthdate"]. "</td>
<td>". $row["Address"]. "</td>
<td>". $row["Joined year"]. "</td>
<td>". $row["Salary"]. "</td>

</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

   

        </table>
	</body>

</html>