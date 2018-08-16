<?php
require'./dbConnect.php';
$input = filter_input_array(INPUT_POST);
$PrintName=mysqli_real_escape_string($con,$input['PrintName']);
$PrintPO=mysqli_real_escape_string($con,$input['PrintPO']);
$PrintIV=mysqli_real_escape_string($con,$input['PrintIV']);
$PrintService=mysqli_real_escape_string($con,$input['PrintService']);
$PrintBranch=mysqli_real_escape_string($con,$input['PrintBranch']);
$PrintDepart=mysqli_real_escape_string($con,$input['PrintDepart']);
$PrintDate=mysqli_real_escape_string($con,$input['PrintDate']);

if($input["action"]=='edit'){
  $query="update tbl_printer set PrintName='".$PrintName."' , PrintPO='".$PrintPO."', PrintIV='".$PrintIV."', PrintService='".$PrintService."'
  , PrintBranch='".$PrintBranch."', PrintDepart='".$PrintDepart."', PrintDate='".$PrintDate."' where PrinterID='".$input['PrinterID']."'";
  mysqli_query($con,$query);
}
if($input["action"]=='delete'){
  $query="delete from tbl_printer where PrinterID='".$input['PrinterID']."'";
  mysqli_query($con,$query);
}
echo json_encode($input);
?>
