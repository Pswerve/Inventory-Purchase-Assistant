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
     $contact_person_name = $_POST['contact_person_name'];
     $contact_no_1 = $_POST['contact_no_1'];
     $alt_contact_person_name = $_POST['alt_contact_person_name'];
     $contact_no_2 = $_POST['contact_no_2'];
     $area = $_POST['area'];
     $full_address = $_POST['full_address'];
     $gst_no = $_POST['gst_no'];
     $sql = "INSERT INTO vendor_details (vendor_name, contact_person_name, contact_no_1, alt_contact_person_name, contact_no_2, area, full_address, gst_no) VALUES ('$name','$contact_person_name','$contact_no_1','$alt_contact_person_name','$contact_no_2','$area','$full_address','$gst_no')";
     if (mysqli_query($conn, $sql)) {
       echo ("<script LANGUAGE='JavaScript'>
       window.alert('Vendor added successfully!');
       window.location.href='vendor_details.php';
       </script>");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
