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
		<title>Customers list</title>
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

		<h1> VIP Customer List <br></h1>
                                         <h4>This list is  of our VIP customers who visits here often
And also does yearly donations </h4>
		<table>
<tr>
            <th>Name</th>

            <th>ID</th>
            <th>Gender</th>
            <th>Mobile Number</th>
    

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "list");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM customers
ORDER by Id  ASC;"


;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Name"]. "</td>
<td>" . $row["Id"] . "</td>
<td>". $row["Gender"]. "</td>
<td>". $row["Mobile Number"]. "</td>


</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

   

        </table>
	</body>

</html>