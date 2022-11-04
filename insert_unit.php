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
     $unit_name = $_POST['unit_name'];
     $sql = "INSERT INTO unit (unit_name) VALUES ('$unit_name')";
     if (mysqli_query($conn, $sql)) {
       echo ("<script LANGUAGE='JavaScript'>
       window.alert('New Unit added successfully!');
       window.location.href='home.php';
       </script>");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
