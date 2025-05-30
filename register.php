<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="./css/style_register.css" />
  </head>
  <body>
    <div class="form-container">
      <h2>Register</h2>


      <form action="./handlers/userRegister.php" method="POST">
        <input type="text" name="full_name" placeholder="Full Name" required />
        <input type="email" name="email" placeholder="Email" required />
        <input
          type="password"
          name="password"
          placeholder="Password"
          required
        />
        <input
          type="password"
          name="confirm_password"
          placeholder="Confirm Password"
          required
        />
        <button type="submit">Register</button>
        <p>Already have an account? <a href="./login.php">Login</a></p>


           <div class="back-home">
           <a href="home.php">← Back to Home</a>
          </div>

      </form>


    </div>
  </body>
</html>
