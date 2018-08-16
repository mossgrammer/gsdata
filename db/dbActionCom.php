<?php
require'./dbConnect.php';
$input = filter_input_array(INPUT_POST);
$ComName=mysqli_real_escape_string($con,$input['ComName']);
$ComUser=mysqli_real_escape_string($con,$input['ComUser']);
$ComPO=mysqli_real_escape_string($con,$input['ComPO']);
$ComIV=mysqli_real_escape_string($con,$input['ComIV']);
$ComService=mysqli_real_escape_string($con,$input['ComService']);
$ComMonitor=mysqli_real_escape_string($con,$input['ComMonitor']);
$ComMouse=mysqli_real_escape_string($con,$input['ComMouse']);
$ComKeyboard=mysqli_real_escape_string($con,$input['ComKeyboard']);
$ComBranch=mysqli_real_escape_string($con,$input['ComBranch']);
$ComDate=mysqli_real_escape_string($con,$input['ComDate']);
if($input["action"]=='edit'){
  $query="update tbl_computer set ComName='".$ComName."' , ComUser='".$ComUser."' , ComPO='".$ComPO."' , ComIV='".$ComIV."'
  , ComService='".$ComService."', ComService='".$ComService."', ComMonitor='".$ComMonitor."', ComMouse='".$ComMouse."'
  , ComKeyboard='".$ComKeyboard."', ComBranch='".$ComBranch."', ComDate='".$ComDate."' where ComputerID='".$input['ComputerID']."'";
  mysqli_query($con,$query);
}
if($input["action"]=='delete'){
  $query="delete from tbl_computer where ComputerID='".$input['ComputerID']."'";
  mysqli_query($con,$query);
}
echo json_encode($input);
?>
