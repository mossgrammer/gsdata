<?php
require'./dbConnect.php';
$input = filter_input_array(INPUT_POST);
$NoteName=mysqli_real_escape_string($con,$input['NoteName']);
$NoteUser=mysqli_real_escape_string($con,$input['NoteUser']);
$NotePO=mysqli_real_escape_string($con,$input['NotePO']);
$NoteIV=mysqli_real_escape_string($con,$input['NoteIV']);
$NoteService=mysqli_real_escape_string($con,$input['NoteService']);
$NoteMonitor=mysqli_real_escape_string($con,$input['NoteMonitor']);
$NoteMouse=mysqli_real_escape_string($con,$input['NoteMouse']);
$NoteKeyboard=mysqli_real_escape_string($con,$input['NoteKeyboard']);
$NoteDocking=mysqli_real_escape_string($con,$input['NoteDocking']);
$NoteBranch=mysqli_real_escape_string($con,$input['NoteBranch']);
$NoteDate=mysqli_real_escape_string($con,$input['NoteDate']);

if($input["action"]=='edit'){
  $query="update tbl_notebook set NoteName='".$NoteName."' , NoteUser='".$NoteUser."', NotePO='".$NotePO."', NoteIV='".$NoteIV."'
  , NoteService='".$NoteService."', NoteMonitor='".$NoteMonitor."', NoteMouse='".$NoteMouse."', NoteKeyboard='".$NoteKeyboard."'
  , NoteDocking='".$NoteDocking."', NoteBranch='".$NoteBranch."', NoteDate='".$NoteDate."' where NotebookID='".$input['NotebookID']."'";
  mysqli_query($con,$query);
}
if($input["action"]=='delete'){
  $query="delete from tbl_notebook where NotebookID='".$input['NotebookID']."'";
  mysqli_query($con,$query);
}
echo json_encode($input);
?>
