<?php
include("header.php");
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Add Purchase Record</title>
  <head>
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"
    />
    <style type="text/css">
      .wrapper{
          width: 500px;
          margin: 0 auto;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header">
              <h2>Add Purchase Record</h2>
            </div>
            <form action="insert_pd.php" method="post">
              <div class="form-group">
                <label>Vendor Name:</label>
                <select name="vendor_name">
                  <option value="">Select</option>
                  <?php
                            $query ="SELECT id, vendor_name FROM vendor_details";
                            $result = $conn->query($query);
                  if($result->num_rows> 0){
                  while($optionData=$result->fetch_assoc()){ $option
                  =$optionData['vendor_name']; $id =$optionData['vendor_name'];
                  ?>
                  <option value="<?php echo $id; ?>">
                    <?php echo $option; ?>
                  </option>
                  <?php
                              }}
                              ?>
                </select>
              </div>
              <div class="form-group">
                <label>Area:</label>
                <select name="area">
                  <option value="">Select</option>
                  <?php
                            $query ="SELECT id, area FROM vendor_details";
                            $result = $conn->query($query);
                  if($result->num_rows> 0){
                  while($optionData=$result->fetch_assoc()){ $option
                  =$optionData['area']; $id =$optionData['area']; ?>
                  <option value="<?php echo $id; ?>">
                    <?php echo $option; ?>
                  </option>
                  <?php
                              }}
                              ?>
                </select>
              </div>
              <div class="form-group">
                <label>Company:</label>
                <select name="company_name">
                  <option value="">Select</option>
                  <?php
                            $query ="SELECT id, company_name FROM company";
                            $result = $conn->query($query);
                  if($result->num_rows> 0){
                  while($optionData=$result->fetch_assoc()){ $option
                  =$optionData['company_name']; $id =$optionData['company_name']; ?>
                  <option value="<?php echo $id; ?>">
                    <?php echo $option; ?>
                  </option>
                  <?php
                              }}
                              ?>
                </select>
              </div>
              <div class="form-group">
                <label>Category:</label>
                <select name="category_name">
                  <option value="">Select</option>
                  <?php
                            $query ="SELECT id, category_name FROM category";
                            $result = $conn->query($query);
                  if($result->num_rows> 0){
                  while($optionData=$result->fetch_assoc()){ $option
                  =$optionData['category_name']; $id =$optionData['category_name']; ?>
                  <option value="<?php echo $id; ?>">
                    <?php echo $option; ?>
                  </option>
                  <?php
                              }}
                              ?>
                </select>
              </div>
              <div class="form-group">
                <label>Our RM Name:</label>
                <select name="rm_name">
                  <option value="">Select</option>
                  <?php
                            $query ="SELECT id, rm_name FROM raw_material_details";
                            $result = $conn->query($query);
                  if($result->num_rows> 0){
                  while($optionData=$result->fetch_assoc()){ $option
                  =$optionData['rm_name']; $id =$optionData['rm_name']; ?>
                  <option value="<?php echo $id; ?>">
                    <?php echo $option; ?>
                  </option>
                  <?php
                              }}
                              ?>
                </select>
              </div>
              <div class="form-group">
                <label>Vendor RM Name:</label>
                <select name="vendor_rm_name">
                  <option value="">Select</option>
                  <?php
                            $query ="SELECT id, vendor_rm_name FROM raw_material_details";
                            $result = $conn->query($query);
                  if($result->num_rows> 0){
                  while($optionData=$result->fetch_assoc()){ $option
                  =$optionData['vendor_rm_name']; $id =$optionData['vendor_rm_name']; ?>
                  <option value="<?php echo $id; ?>">
                    <?php echo $option; ?>
                  </option>
                  <?php
                              }}
                              ?>
                </select>
              </div>
              <div class="form-group">
                <label>Quantity:</label>
                <input type="text" name="quantity" class="form-control" />
              </div>
              <div class="form-group">
                <label>Unit:</label>
                <select name="unit_name">
                  <option value="">Select</option>
                  <?php
                            $query ="SELECT id, unit_name FROM unit";
                            $result = $conn->query($query);
                  if($result->num_rows> 0){
                  while($optionData=$result->fetch_assoc()){ $option
                  =$optionData['unit_name']; $id =$optionData['unit_name']; ?>
                  <option value="<?php echo $id; ?>">
                    <?php echo $option; ?>
                  </option>
                  <?php
                              }}
                              ?>
                </select>
              </div>
              <div class="form-group">
                <label>Price:</label>
                <input type="text" name="price" class="form-control" />
              </div>
              <div class="form-group">
                <label>Purchased on:</label>
                <input type="date" name="purchased_on" class="form-control" />
              </div>
              <input
                type="submit"
                class="btn btn-primary"
                name="submit"
                value="Submit"
              />
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
