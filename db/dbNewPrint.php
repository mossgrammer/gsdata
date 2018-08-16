<?php

require'./dbConnect.php';
//รับค่าจาก From มาใส่ในฐานข้อมูล
$PrintName=$_POST['PrintName'];
$PrintPO=$_POST['PrintPO'];
$PrintIV=$_POST['PrintIV'];
$PrintService=$_POST['PrintService'];
$PrintBranch=$_POST['PrintBranch'];
$PrintDepart=$_POST['PrintDepart'];
$PrintDate=$_POST['PrintDate'];
$PrintNote=$_POST['PrintNote'];

$sql="insert into tbl_printer(PrintName,PrintPO,PrintIV,PrintService,PrintBranch,PrintDepart,PrintDate,PrintNote)
values('$PrintName','$PrintPO','$PrintIV','$PrintService','$PrintBranch','$PrintDepart','$PrintDate','$PrintNote')";
$result = mysqli_query($con,$sql);
if($result){
  header( "location: ../printer.php" );
}else {
  echo mysqli_error($con);
}
 ?>
