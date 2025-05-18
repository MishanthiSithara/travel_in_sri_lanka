<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="/admin/css/style.css" />
  </head>
  <body>
    <div class="form-container">
      <h2>Register</h2>
      <form action="#" method="post">
        <input type="text" name="name" placeholder="Full Name" required />
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
        <p>Already have an account? <a href="/admin/login.php">sign in</a></p>
      </form>
    </div>
  </body>
</html>
