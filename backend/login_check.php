<?php
include 'db.php'; // Include DB connection

$email = $_POST['email'];
$phone = $_POST['phone'];

// Check if booking exists
$sql = "SELECT * FROM bookings WHERE email='$email' AND phone='$phone'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    // Booking found, redirect to edit page
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['booking'] = $row;
    header("Location: edit_booking.php"); // redirect to edit page
    exit;
}else{
    echo "<script>
            alert('Booking not found! Please check your details.');
            window.location.href='login.php';
          </script>";
}

$conn->close();
?>
