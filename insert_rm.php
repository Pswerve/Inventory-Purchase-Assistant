<?php
    $servername='sql110.epizy.com';
    $username='epiz_32897073';
    $password='JJ6c7V4tE3hzBU';
    $dbname = "epiz_32897073_purchase_panel";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
if(isset($_POST['submit']))
{
     $name = $_POST['vendor_name'];
     $category_name = $_POST['category_name'];
     $rm_name = $_POST['rm_name'];
     $vendor_rm_name = $_POST['vendor_rm_name'];
     $sql = "INSERT INTO raw_material_details (vendor_name, category_name, rm_name, vendor_rm_name) VALUES ('$name','$category_name','$rm_name','$vendor_rm_name')";
     if (mysqli_query($conn, $sql)) {
       echo ("<script LANGUAGE='JavaScript'>
       window.alert('Raw Material added successfully!');
       window.location.href='raw_material_details.php';
       </script>");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
