<?php

require'./dbConnect.php';
//รับค่าจาก From มาใส่ในฐานข้อมูล
$ProName=$_POST['ProName'];
$ProPO=$_POST['ProPO'];
$ProIV=$_POST['ProIV'];
$ProService=$_POST['ProService'];
$ProBranch=$_POST['ProBranch'];
$ProRoom=$_POST['ProRoom'];
$ProDate=$_POST['ProDate'];
$ProNote=$_POST['ProNote'];

$sql="insert into tbl_projector(ProName,ProPO,ProIV,ProService,ProBranch,ProRoom,ProDate,ProNote)
values('$ProName','$ProPO','$ProIV','$ProService','$ProBranch','$ProRoom','$ProDate','$ProNote')";
$result = mysqli_query($con,$sql);
if($result){
  header( "location: ../projector.php" );
}else {
  echo mysqli_error($con);
}
 ?>
