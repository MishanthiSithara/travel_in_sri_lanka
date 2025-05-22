<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard - Travel Agency</title>
  <link rel="stylesheet" href="./style_admin.css" />
</head>
<body>
  <div class="dashboard-container">
    <aside class="sidebar">
      <h2>Travel Admin</h2>
      <nav>
        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Manage Bookings</a></li>
          <li><a href="#">Packages</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Feedback</a></li>
          <li><a href="#">Logout</a></li>
          
        </ul>
      </nav>
    </aside>

    <main class="main-content">
      <header class="topbar">
        <h1>Dashboard</h1>
        <div class="user">
          <span>Admin</span>
          <img src="/image/user.png" alt="user icon" />
        </div>
      </header>

      <section class="cards">
        <div class="card">
          <h3>Total Bookings</h3>
          <p>120</p>
        </div>
        <div class="card">
          <h3>Packages</h3>
          <p>15</p>
        </div>
        <div class="card">
          <h3>Revenue</h3>
          <p>$12,000</p>
        </div>
      </section>
    </main>
  </div>
</body>
</html>
