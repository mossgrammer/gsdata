
<?php
require'db./dbConnect.php';
$query="select * from tbl_computer where ComputerID = '".$_GET["ComputerID"]."' ";
$result=mysqli_query($con,$query);

?>
<html>
<head>
<title><?php echo "Edit NoteComputer"; ?></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<style>
#lable1{
  width: 300px;
  height: 200px;
}
#buttom{
  display: flex;
  justify-content: center;
  align-items: center;

}
#div{
  left:200px;
    width:300px;
    margin-top: 20px;

}
</style>
</head>

<body>

<div id="div">
<form action="db/dbSaveCom.php?ComputerID=<?php echo $_GET["ComputerID"];?>" name="frmEdit" method="post">

    <?php
    while ($row=mysqli_fetch_array($result)) {
      ?>
      <div class="form-group">
      <div class="col-sm-10">
        <textarea id="lable1" type="text" class="form-control" name="ComNote"><?php echo $row['ComNote'];?></textarea>
      </div>
    </div>
    <div class="form-group">
<div class="col-sm-offset-2 col-sm-10" id="buttom">
  <button type="submit" class="btn btn-success">Save</button>
</div>
</div>
  <?php
}
  ?>
</div>
</body>
</html>
