<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $kdliquid=$_POST['kdliquid'];
 $nmliquid=$_POST['nmliquid'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"INSERT INTO `vape` (`kdliquid`,`nmliquid`,`harga`) VALUES ('$kdliquid','$nmliquid','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>