<?php

require'./dbConnect.php';
//รับค่าจาก From มาใส่ในฐานข้อมูล
$ComName=$_POST['ComName'];
$ComUser=$_POST['ComUser'];
$ComPO=$_POST['ComPO'];
$ComIV=$_POST['ComIV'];
$ComService=$_POST['ComService'];
$ComMonitor=$_POST['ComMonitor'];
$ComMouse=$_POST['ComMouse'];
$ComKeyboard=$_POST['ComKeyboard'];
$ComBranch=$_POST['ComBranch'];
$ComDate=$_POST['ComDate'];
$ComNote=$_POST['ComNote'];


$sql="insert into tbl_computer(ComName,ComUser,ComPO,ComIV,ComService,ComMonitor,ComMouse,ComKeyboard,ComBranch,ComDate,ComNote)
values('$ComName','$ComUser','$ComPO','$ComIV','$ComService','$ComMonitor','$ComMouse','$ComKeyboard','$ComBranch','$ComDate','$ComNote')";
$result = mysqli_query($con,$sql);
if($result){
  header( "location: ../computer.php" );
}else {
  echo mysqli_error($con);
}
 ?>
