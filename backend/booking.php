<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book Your Trip - Himachal Pradesh Tourism</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans&display=swap" rel="stylesheet">
<style>
body {
    font-family: 'Open Sans', sans-serif;
    background: #e8f5e9;
    margin: 0;
    padding: 0;
}

.booking-container {
    max-width: 700px;
    margin: 60px auto;
    background: #fff;
    padding: 40px 30px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.booking-container h2 {
    text-align: center;
    font-family: 'Montserrat', sans-serif;
    color: #2e7d32;
    margin-bottom: 25px;
    font-size: 2rem;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

input, select, textarea {
    padding: 12px 15px;
    border: 1px solid #c8e6c9;
    border-radius: 10px;
    font-size: 1rem;
    transition: 0.3s;
}

input:focus, select:focus, textarea:focus {
    border-color: #66bb6a;
    box-shadow: 0 0 5px #81c784;
    outline: none;
}

label {
    font-weight: bold;
    color: #2e7d32;
    margin-bottom: 5px;
}

.btn-submit {
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

.btn-submit:hover {
    background: #2e7d32;
}

.form-row {
    display: flex;
    gap: 15px;
}

.form-row input, .form-row select {
    flex: 1;
}

.login-section {
    text-align: center;
    margin-top: 25px;
    font-size: 0.95rem;
}

.login-section a {
    color: #43a047;
    font-weight: bold;
    text-decoration: none;
    border-bottom: 1px dashed #43a047;
    transition: 0.3s;
}

.login-section a:hover {
    color: #2e7d32;
    border-bottom: 1px solid #2e7d32;
}

@media(max-width: 600px){
    .form-row { flex-direction: column; }
}
</style>
</head>
<body>
<div class="booking-container">
    <h2>Book Your Trip</h2>
    <form action="submit_booking.php" method="POST">
        <input type="text" name="full_name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <select name="destination" required>
            <option value="">Select Destination</option>
            <option>Shimla</option>
            <option>Manali</option>
            <option>Dharamshala</option>
            <option>Kasauli</option>
            <option>Palampur</option>
            <option>Spiti Valley</option>
        </select>
        <div class="form-row">
            <div>
                <label>Check-In Date</label>
                <input type="date" name="check_in" required>
            </div>
            <div>
                <label>Check-Out Date</label>
                <input type="date" name="check_out" required>
            </div>
        </div>
        <input type="number" name="guests" placeholder="Number of Guests" min="1" required>
        <textarea name="special_requests" placeholder="Special Requests (Optional)"></textarea>
        <button type="submit" class="btn-submit">Submit Booking</button>
    </form>
    <div class="login-section">
        Already booked? <a href="login.php">Login here to view or edit your booking</a>
    </div>
</div>
</body>
</html>
