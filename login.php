<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="./css/style_login.css" />
  </head>
  <body>

    <div class="form-container">
      <h2>Login</h2>
      <form action="#" method="post">
        <input type="email" name="email" placeholder="Email" required />
        <input
          type="password"
          name="password"
          placeholder="Password"
          required
        />
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="./register.php">Sign up</a></p>

         <div class="back-home">
         <a href="home.php">← Back to Home</a>
         </div>

        

      </form>
    </div>
  </body>
</html>
