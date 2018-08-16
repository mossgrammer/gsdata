<?php
session_start();
require'db./dbConnect.php';
  if(!isset($_SESSION['UserID']))
  {
    	header("location:index.php");
    exit();
  }
  ?>
<html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo "Add Projector"; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="image/logo.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
    body{
      background: #f4f4f4;
    }
    #lable{
      width: 300px;
    }
    #lable1{
      width: 300px;
      height: 150px;
    }
    </style>
  </head>
  <body>
    <nav id='nav'class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="computer.php">Greenspot</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id='navbarNav'>
    <ul class="navbar-nav col-lg-11">
      <li class="nav-item">
        <a class="nav-link" href="computer.php" >Computer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="notebook.php">Notebook</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="printer.php" >Printer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="projector.php">Projector</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" name="frmlogout" action="logout.php" method="post">
        <a href="sysopr.php"><span class="glyphicon glyphicon-cog"></span></a>
      <button class="btn btn-outline-danger navbar-btn" type="submit">Logout</button>
    </form>

  </div>
</nav>
<div class="col">
  <h1>Add Projector </h1>
</div>
<div class = "container" id="div">
<form class="form-horizontal" method="post" action="db/dbNewPro.php">
<div class="form-group">
<label class="control-label col-sm-2" for="pwd">ProjectorName:</label>
<div class="col-sm-10">
  <input id="lable" class="form-control" type="text" name='ProName' >
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="pwd">PO:</label>
<div class="col-sm-10">
  <input id="lable" class="form-control" type="text" name='ProPO' >
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="pwd">IV:</label>
<div class="col-sm-10">
  <input id="lable" class="form-control" type="text" name='ProIV'>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="pwd">Service Tag:</label>
<div class="col-sm-10">
  <input id="lable" class="form-control" type="text" name='ProService'>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="pwd">Branch:</label>
<div class="col-sm-10">
  <input id="lable" class="form-control" type="text" name='ProBranch'>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="pwd">Room:</label>
<div class="col-sm-10">
  <input id="lable" class="form-control" type="text" name='ProRoom'>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="pwd">Date:</label>
<div class="col-sm-10">
  <input id="lable" class="form-control" type="date" name='ProDate'>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="pwd">Note:</label>
<div class="col-sm-10">
  <textarea id="lable1" class="form-control" type="text" name='ProNote'></textarea>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
  <button type="submit" class="btn btn-success">Save</button>
</div>
</div>
</form>
  </body>

</html>
