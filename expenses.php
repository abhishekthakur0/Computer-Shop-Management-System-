<?php
session_start();
// if (!isset($_SESSION['checkemail']) || !isset($_SESSION['checkpass']) )
// {
//   header('Location: index.php');
// }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Expenses Page</title>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
<body id="Body" >
    <img src="images/p5.jpg" id="bg" >
    <div id="col-md-12 col-md-offset-0">
    <ul class="nav nav-tabs" id="color">
      <li role="presentation" ><a href="sold.php" id="lic1" >Home</a></li>
      <li role="presentation" class="active"  ><a href="register.php" id="lic2" >New account</a></li>
      <li role="presentation" ><a href="sregister.php" id="lic3" >Suplier New account</a></li>
      <li role="presentation" ><a href="product.php" id="lic3">Add product</a></li>
      <li role="presentation" class="active"  ><a href="expenses.php" id="lic2" >Expenses</a></li>

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
</div>

    <div class="col-md-4 col-md-offset-0" >


      <h1 class="headline">Create New Expenses</h1>
      <form class="form-horizontal" id="formid" method="post" action="dbforexpense.php" enctype="multipart/form-data">
      <input type="hidden" value="register" name="type" />
      <div class="form-group" >
        <label for="inputText3" class="col-sm-4 control-label" id="F1" required >Expenses Name</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputText3"  name="name" placeholder="Name Of Expenses" required>
        </div>
        </div>
        <div class="form-group" >
          <label for="inputText3" class="col-sm-4 control-label" id="L1" required >Date</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputText3" name="date" placeholder="YYYY-MM-DD" required>
          </div>
          </div>

          <div class="form-group" >
            <label for="inputText3" class="col-sm-4 control-label" id="L1" required >Amount</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputText3" name="amount" placeholder="Amount Of Expenses" required>
            </div>
            </div>
          <button type="submit" class="btn btn-default" id="button">SUBMIT</button>
  </form>
</div>
<br><br><br><br>
  </body>
</html>
