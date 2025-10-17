<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Existing Booking Login</title>
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
  .login-container {
    background: #fff;
    border-radius: 20px;
    padding: 40px;
    width: 100%;
    max-width: 450px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    text-align: center;
  }
  h2 {
    color: #2e7d32;
    font-family: 'Montserrat', sans-serif;
    margin-bottom: 25px;
  }
  input {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border-radius: 10px;
    border: 1px solid #c8e6c9;
    outline: none;
    transition: 0.3s;
  }
  input:focus {
    border-color: #66bb6a;
    box-shadow: 0 0 5px #81c784;
  }
  .btn-login {
    width: 100%;
    padding: 12px;
    background: #43a047;
    color: #fff;
    border: none;
    border-radius: 10px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
  }
  .btn-login:hover {
    background: #2e7d32;
  }
</style>
</head>
<body>
  <div class="login-container">
    <h2>Existing Booking Login</h2>
    <form action="login_check.php" method="POST">
      <input type="email" name="email" placeholder="Enter your Email" required>
      <input type="tel" name="phone" placeholder="Enter your Phone Number" required>
      <button type="submit" class="btn-login">Login</button>
    </form>
  </div>
</body>
</html>
