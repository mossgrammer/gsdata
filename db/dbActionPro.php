<?php
require'./dbConnect.php';
$input = filter_input_array(INPUT_POST);
$ProName=mysqli_real_escape_string($con,$input['ProName']);
$ProPO=mysqli_real_escape_string($con,$input['ProPO']);
$ProIV=mysqli_real_escape_string($con,$input['ProIV']);
$ProService=mysqli_real_escape_string($con,$input['ProService']);
$ProBranch=mysqli_real_escape_string($con,$input['ProBranch']);
$ProRoom=mysqli_real_escape_string($con,$input['ProRoom']);
$ProDate=mysqli_real_escape_string($con,$input['ProDate']);

if($input["action"]=='edit'){
  $query="update tbl_projector set ProName='".$ProName."' , ProPO='".$ProPO."', ProIV='".$ProIV."', ProService='".$ProService."'
  , ProBranch='".$ProBranch."', ProRoom='".$ProRoom."', ProDate='".$ProDate."' where ProjectorID='".$input['ProjectorID']."'";
  mysqli_query($con,$query);
}
if($input["action"]=='delete'){
  $query="delete from tbl_projector where ProjectorID='".$input['ProjectorID']."'";
  mysqli_query($con,$query);
}
echo json_encode($input);
?>
