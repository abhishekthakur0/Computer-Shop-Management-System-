<?php
session_start();

include "mydbconnect.php";
$con=openDatabase();
$id=0;
  $n=$_POST['name'];
  $d=$_POST['date'];
  $a=$_POST['amount'];

    $sql = "INSERT INTO expenses (id,name,date,amount)
    VALUES ('$id','$n', '$d', '$a')";
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
