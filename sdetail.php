<link rel="stylesheet" type="text/css" href="css/table.css">
<?php
session_start();
include"mydbconnect.php";
$con=openDatabase();
$i=1;
$qry1 = "select * from products";
$a1 = useDatabase($qry1);
$_SESSION['count']=0;
while($row = mysqli_fetch_array($a1))
{
  if($row[4]==0)
  $_SESSION['count']+=1;
}
$b1=count(array_unique($_SESSION['idpro']));
// if($b1){$b1+=1;}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Home page </title>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/myscript.js"></script>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" >

  <link href="css/stylenew.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
  <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
  <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
  <link href="css/font-awesome.css" rel="stylesheet">
</head>
<body>

  <div class="color1">
    <ul class="nav nav-tabs" >
      <li role="presentation" class="active"><a href="home.php" id="lic1">Home</a></li>
      <li role="presentation"><a href="register.php" id="lic2">New account</a></li>
      <li role="presentation"><a href="product.php" id="lic3" >Add product</a></li>
      <li role="presentation" class="btn-default"><a href="buynow.php" id="lic4">Cart <span class="badge"><?php print $b1; ?></span></a></li>
      <li role="presentation"><a href="sdetail.php" id="lic3" >Supplier Detail</a></li>
      <li role="presentation"><a href="showexpenses.php" id="lic3" >Expenses Details</a></li>

      <div class="btn-group " style="float:right;" >
          <button type="button" class="btn-link dropdown-toggle"id='dp' data-toggle="dropdown"><?php echo $_SESSION['username']; ?><span class="caret red"></span></button>
          <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="about.php">Your profile</a></li>
              <li><a href="outofstock.php">Items out of stock <span class="badge"><?php print $_SESSION['count']; ?></span></a></li>
              <li><a href="profits.php">Profit</a></li>

              <li class="divider"></li>
              <li><a href="logout.php">Logout</a></li>
          </ul>
      </div>

    </ul>
<div>
    <br><br><br>
      <h2>Supplier Details :-</h2>
    <br>
<table >
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
      <th>E-Mail</th>
      <th>Phone-Number</th>
      <th>Address</th>
      </tr>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_mangement";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result=mysqli_query($conn,"CALL supd(@p0)") or die("Query fail:". mysqli_error($conn));
if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        echo "<tr><td> " . $row["f_name"]."</td><td>".$row["l_name"]."</td><td>".$row["email"]."</td><td>".$row["phone_number"]."</td><td>".$row["address"]."</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

</table>


      </div>
  </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <footer class="color1" style="color:#FEBD69; ">
      <h3 style="text-align:center; padding-top:2%; font-family:serif; font-weight:bold;">Copyright &copy; Aashique Karn, Abhishek Ranjan</h3>
      <h3 style="text-align:center;">...................................................................................................</h3>
      <hr>
  </footer>

  </body>
  </html>
