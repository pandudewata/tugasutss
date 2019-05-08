<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $kdliquid=$_POST['kdliquid'];
 $nmliquid=$_POST['nmliquid'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"UPDATE `vape` SET `kdliquid`='$kdliquid',`nmliquid`='$nmliquid',`harga`='$harga' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>