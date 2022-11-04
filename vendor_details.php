<?php
include("header.php");
include("database.php");
include("vd_data_fetch.php");

$search='';
?>

<!DOCTYPE html>
<html>
<title>Vendor Details</title>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #6aa84f;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
</style>
</head>
<body>
  <p></p>
<div class="container">
  <div class="topnav">
  <a class="active" href="add_v.php">Add Vendor</a>
  <div class="search-container">
    <form action="" method="POST">
      <input type="text" placeholder="Search.." name="search" onsubmit="handleChange(this.value)">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <?php
   if(isset($_POST["search"])){
       $search=strtoupper($_POST["search"]);
   }
?>
  </div>
</div>
<p> </p>
 <div class="row">
   <div class="col-sm-14">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>SL No</th>
         <th>Vendor Name</th>
         <th>Contact Person Name</th>
         <th>Contact No</th>
         <th>Alt Contact Person Name</th>
         <th>Alt Contact No</th>
         <th>Area</th>
         <th>Full Address</th>
         <th>GST No</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){
      $sn=1;
      foreach($fetchData as $data){
        if($search=='' or strpos($data['vendor_name']??'', $search) !== false){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>

      <td><?php echo $data['vendor_name']??''; ?></td>
      <td><?php echo $data['contact_person_name']??''; ?></td>
      <td><?php echo $data['contact_no_1']??''; ?></td>
      <td><?php echo $data['alt_contact_person_name']??''; ?></td>
      <td><?php echo $data['contact_no_2']??''; ?></td>
      <td><?php echo $data['area']??''; ?></td>
      <td><?php echo $data['full_address']??''; ?></td>
      <td><?php echo $data['gst_no']??''; ?></td>

     </tr>
     <?php
      $sn++;}}}else{ ?>
      <tr>
        <td colspan="14">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>
