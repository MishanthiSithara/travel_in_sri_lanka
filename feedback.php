<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Feedback Page</title>
  <link rel="stylesheet" href="./css/style_feedback.css" />
</head>
<body>
  <div class="container">
      <form class="feedback-form" action="handlers/submit_feedback.php" method="POST">
      <h2>Send Us Your Feedback</h2>
      
      <input type="text" name="name" placeholder="Your Name" required />
      
      <input type="email" name="email" placeholder="Your Email" required />
      
      <textarea name="feedback" rows="5" placeholder="Your Feedback" required></textarea>
      
      <button type="submit">Send Feedback</button>

       
        <div class="back-home">
         <a href="home.php">← Back to Home</a>
         </div>
    </form>
  </div>
</body>
</html>

