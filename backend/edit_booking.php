<?php
session_start();
if(!isset($_SESSION['booking'])){
    header("Location: login.php");
    exit;
}

$booking = $_SESSION['booking'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Your Booking</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans&display=swap" rel="stylesheet">
<style>
  body {
    font-family: 'Open Sans', sans-serif;
    background: #e8f5e9;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
  }
  .edit-container {
    background: #fff;
    border-radius: 20px;
    padding: 40px;
    width: 100%;
    max-width: 700px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  }
  h2 { color: #2e7d32; font-family: 'Montserrat', sans-serif; margin-bottom: 25px; text-align:center; }
  form { display: flex; flex-direction: column; gap: 15px; }
  input, select, textarea {
    padding: 12px;
    border-radius: 10px;
    border: 1px solid #c8e6c9;
    outline: none;
    font-size: 1rem;
  }
  input:focus, select:focus, textarea:focus {
    border-color: #66bb6a;
    box-shadow: 0 0 5px #81c784;
  }
  .btn-update {
    background: #43a047;
    color: #fff;
    font-weight: bold;
    padding: 12px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-size: 1rem;
    transition: 0.3s;
  }
  .btn-update:hover { background: #2e7d32; }
</style>
</head>
<body>
  <div class="edit-container">
    <h2>Edit Your Booking</h2>
    <form action="update_booking.php" method="POST">
      <input type="hidden" name="id" value="<?= $booking['id'] ?>">
      <input type="text" name="full_name" value="<?= $booking['full_name'] ?>" required>
      <input type="email" name="email" value="<?= $booking['email'] ?>" required>
      <input type="tel" name="phone" value="<?= $booking['phone'] ?>" required>
      <select name="destination" required>
        <option <?= $booking['destination']=='Shimla'?'selected':'' ?>>Shimla</option>
        <option <?= $booking['destination']=='Manali'?'selected':'' ?>>Manali</option>
        <option <?= $booking['destination']=='Dharamshala'?'selected':'' ?>>Dharamshala</option>
        <option <?= $booking['destination']=='Kasauli'?'selected':'' ?>>Kasauli</option>
        <option <?= $booking['destination']=='Spiti Valley'?'selected':'' ?>>Spiti Valley</option>
      </select>
      <input type="date" name="check_in" value="<?= $booking['check_in'] ?>" required>
      <input type="date" name="check_out" value="<?= $booking['check_out'] ?>" required>
      <input type="number" name="guests" value="<?= $booking['guests'] ?>" min="1" required>
      <textarea name="special_requests"><?= $booking['special_requests'] ?></textarea>
      <button type="submit" class="btn-update">Update Booking</button>
    </form>
  </div>
</body>
</html>
