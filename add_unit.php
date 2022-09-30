<?php
include("header.php");
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Add New Unit</title>
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
              <h2>Add New Unit</h2>
            </div>
            <form action="insert_unit.php" method="post">
              <div class="form-group">
                <label>Unit Name:</label>
                <input type="text" name="unit_name" class="form-control" />
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
