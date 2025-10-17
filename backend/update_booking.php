<?php
include 'db.php';
session_start();

$id = $_POST['id'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$destination = $_POST['destination'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$guests = $_POST['guests'];
$special_requests = $_POST['special_requests'];

$sql = "UPDATE bookings SET 
        full_name='$full_name', email='$email', phone='$phone',
        destination='$destination', check_in='$check_in', check_out='$check_out',
        guests='$guests', special_requests='$special_requests' 
        WHERE id='$id'";

if($conn->query($sql)===TRUE){
    echo "<script>
            alert('Your booking has been updated successfully!');
            window.location.href='edit_booking.php';
          </script>";
} else {
    echo "Error: ".$conn->error;
}

$conn->close();
?>
