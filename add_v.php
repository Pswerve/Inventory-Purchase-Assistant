<?php
include("header.php");
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Add Vendor</title>
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
              <h2>Add Vendor:</h2>
            </div>
            <form action="insert_v.php" method="post">
              <div class="form-group">
                <label>Vendor Name:</label>
                <input type="text" name="vendor_name" class="form-control" />
              </div>
              <div class="form-group">
                <label>Contact Person Name:</label>
                <input type="text" name="contact_person_name" class="form-control" />
              </div>
              <div class="form-group">
                <label>Contact No:</label>
                <input type="text" name="contact_no_1" class="form-control" />
              </div>
              <div class="form-group">
                <label>Alt Contact Person Name:</label>
                <input type="text" name="alt_contact_person_name" class="form-control" />
              </div>
              <div class="form-group">
                <label>Alt Contact No:</label>
                <input type="text" name="contact_no_2" class="form-control" />
              </div>
              <div class="form-group">
                <label>Area:</label>
                <input type="text" name="area" class="form-control" />
              </div>
              <div class="form-group">
                <label>Full Address:</label>
                <input type="text" name="full_address" class="form-control" />
              </div>
              <div class="form-group">
                <label>GST No:</label>
                <input type="text" name="gst_no" class="form-control" />
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
