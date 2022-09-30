<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "purchase_panel";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
if(isset($_POST['submit']))
{
     $name = $_POST['vendor_name'];
     $area = $_POST['area'];
     $company_name = $_POST['company_name'];
     $category_name = $_POST['category_name'];
     $rm_name = $_POST['rm_name'];
     $vendor_rm_name = $_POST['vendor_rm_name'];
     $quantity = $_POST['quantity'];
     $unit_name = $_POST['unit_name'];
     $price = $_POST['price'];
     $purchased_on = $_POST['purchased_on'];
     $sql = "INSERT INTO purchase_details (vendor_name, area, company_name, category_name, rm_name, vendor_rm_name, quantity, unit_name, price, purchased_on) VALUES ('$name','$area','$company_name','$category_name','$rm_name','$vendor_rm_name','$quantity','$unit_name','$price','$purchased_on')";
     if (mysqli_query($conn, $sql)) {
       echo ("<script LANGUAGE='JavaScript'>
       window.alert('Purchase Record added successfully!');
       window.location.href='purchase_details.php';
       </script>");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
