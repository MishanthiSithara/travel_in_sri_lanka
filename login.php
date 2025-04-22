<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login and registration form with user and admin page using html css php and mysqlDB</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="form-box" id="login-form">
      <form action="">
      <label for="username">Username</label>
  <input type="text" id="username" name="username" placeholder="Username" required>

  <label for="email">Email</label>
  <input type="email" id="email" name="email" placeholder="Email" required>

  <label for="password">Password</label>
  <input type="password" id="password" name="password" placeholder="Password" required>

  <button type="submit" name="login">Login</button>
  <p>Don't have an account? <a href="#">Register</a></p>
      </form>
        </div>
    </div>
</body>
</html>