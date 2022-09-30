<?php
include("header.php");
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Add Raw Material</title>
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
              <h2>Add Raw Material</h2>
            </div>
            <form action="insert_rm.php" method="post">
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
                <input type="text" name="rm_name" class="form-control" />
              </div>
              <div class="form-group">
                <label>Vendor RM Name:</label>
                <input type="text" name="vendor_rm_name" class="form-control" />
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
