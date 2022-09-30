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
     $company_name = $_POST['company_name'];
     $sql = "INSERT INTO company (company_name) VALUES ('$company_name')";
     if (mysqli_query($conn, $sql)) {
       echo ("<script LANGUAGE='JavaScript'>
       window.alert('New Company added successfully!');
       window.location.href='home.php';
       </script>");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
