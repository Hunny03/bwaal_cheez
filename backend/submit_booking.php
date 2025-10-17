<?php
include 'db.php';

// Get form data
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$destination = $_POST['destination'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$guests = $_POST['guests'];
$special_requests = $_POST['special_requests'];

// Insert into DB
$sql = "INSERT INTO bookings (full_name, email, phone, destination, check_in, check_out, guests, special_requests)
VALUES ('$full_name', '$email', '$phone', '$destination', '$check_in', '$check_out', '$guests', '$special_requests')";

if ($conn->query($sql) === TRUE) {
  echo "
  <html>
  <head>
    <title>Booking Confirmation</title>
    <link href='https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans&display=swap' rel='stylesheet'>
    <style>
      body {
        font-family: 'Open Sans', sans-serif;
        background: #e8f5e9;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        padding: 20px;
      }
      .card {
        background: #fff;
        border-radius: 20px;
        padding: 40px;
        max-width: 600px;
        width: 100%;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        text-align: center;
      }
      h2 {
        color: #2e7d32;
        font-family: 'Montserrat', sans-serif;
        margin-bottom: 10px;
      }
      h3 {
        color: #388e3c;
        margin-top: 20px;
        margin-bottom: 10px;
      }
      p {
        color: #555;
        line-height: 1.5;
        margin: 5px 0;
      }
      .btn-home {
        display: inline-block;
        margin-top: 20px;
        padding: 12px 25px;
        background: #43a047;
        color: #fff;
        text-decoration: none;
        border-radius: 10px;
        font-weight: bold;
        transition: 0.3s;
      }
      .btn-home:hover {
        background: #2e7d32;
      }
      .summary {
        text-align: left;
        margin-top: 20px;
        padding: 15px;
        background: #f1f8f1;
        border-radius: 10px;
      }
      .summary p { margin: 8px 0; }
    </style>
    <script>
      window.onload = function() {
        alert('We will notify you when we find a hotel with the lowest cost for you!');
      };
    </script>
  </head>
  <body>
    <div class='card'>
      <h2>Thank You, $full_name!</h2>
      <p>Your booking has been submitted successfully.</p>
      <h3>Booking Summary</h3>
      <div class='summary'>
        <p><strong>Destination:</strong> $destination</p>
        <p><strong>Check-In:</strong> $check_in</p>
        <p><strong>Check-Out:</strong> $check_out</p>
        <p><strong>Guests:</strong> $guests</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Special Requests:</strong> ".($special_requests ? $special_requests : 'None')."</p>
      </div>
      <a href='../frontend/index.html' class='btn-home'>Back to Home</a>
    </div>
  </body>
  </html>
  ";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
