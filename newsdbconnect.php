<?php
session_start();

include "mydbconnect.php";
$con=openDatabase();
$id=0;
  $f=$_POST['fname'];
   $l=$_POST['lname'];
   $e=$_POST['email'];
   $pn=$_POST['PN'];
   $ad=$_POST['Add'];

    $sql = "INSERT INTO supplier (id,f_name,l_name,email,phone_number,Address)
    VALUES ('$id','$f', '$l', '$e','$pn','$ad')";
   $result = useDatabase($sql);
   if(!$result)
   {
     echo "<script>
     alert('There was an error running the query');
     window.location.href='sregister.php';
     </script>";
   }
   else
  {
    echo "<script>
    alert('Supplier Details Saved');
    window.location.href='sregister.php';
    </script>";
  }
?>
