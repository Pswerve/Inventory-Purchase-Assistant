<?php
//include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Menu</title>
  <style>

  .bb{
    background-color: #111;
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .container2{
    width: 75%;
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
  }

  .box2{
    height: 200px;
    color: white;
    border: 2px solid white;
    position: relative;
  }

  h2{
    text-transform: uppercase;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    text-align: center;
    margin: 0;
    position: absolute;
    top: 35%;
    left: 50%;
    transform: translate(-50%,-50%);
  }

  a:link, a:visited {
  background-color: #6aa84f;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 0;
  position: absolute;
  top: 75%;
  left: 50%;
  transform: translate(-50%,-50%);
}

a:hover, a:active {
  background-color: ;
}
  </style>
</head>
<body class="bb">
  <div class="container2">
    <div class="box2">
      <h2>Vendor Details</h2>
      <a href="vendor_details.php">ENTER</a>
    </div>
    <div class="box2">
      <h2>RM Details</h2>
      <a href="raw_material_details.php">ENTER</a>
    </div>
    <div class="box2">
      <h2>Purchase Details</h2>
      <a href="purchase_details.php">ENTER</a>
    </div>
    <div class="box2">
      <h2>Master Details</h2>
      <a href="master_details.php">ENTER</a>
    </div>
</body>
</html>
