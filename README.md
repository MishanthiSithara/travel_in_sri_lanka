travel_in_sri_lanka

Here's a sample `README.md` file tailored for your **Travel in Sri Lanka Web-Based Tour Booking System** using HTML, CSS, JavaScript, PHP, and MySQL:

---

````markdown
# 🌴 Travel in Sri Lanka - Web-Based Tour Booking System

This is a complete web-based tour booking system for traveling in Sri Lanka. It allows users to browse tour packages, register and log in, make bookings, and view a gallery of tour destinations. An admin panel is provided to manage bookings and packages. The system is built using **HTML**, **CSS**, **JavaScript**, **PHP**, and **MySQL**.

## 🛠️ Tech Stack

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Server**: Apache (via XAMPP)

---

## 🔐 Features

### User Side
- User registration and login
- View available tour packages
- Book tours online
- Browse a photo gallery of destinations
- Contact/feedback form
- Responsive style

### Admin Side
- Admin login/logout
- Manage (Add/Edit/Delete) tour packages
- Manage bookings
- View registered users
- Delete users or bookings

---

## 🧰 Setup Instructions

1. **Clone or Download the Repository**

   ```bash
   git clone https://github.com/yourusername/sri-lanka-tour-booking.git
````

2. **Set Up Your Local Server**

   * Use XAMPP.
   * Place the project folder inside the `htdocs` directory (for XAMPP).

3. **Create the Database**

   * Open **phpMyAdmin**
   * Create a database named: `tour_booking`
   * Import the `tour_booking.sql` file from the `database/` folder.

4. **Configure Database Connection**

   * Open `connection.php` or similar config file.
   * Update the database credentials:

     ```php
     $conn = mysqli_connect("localhost", "root", "", "tour_booking");
     ```

5. **Run the Project**

   * Start Apache and MySQL via XAMPP.
   * Go to `http://localhost/sri-lanka-tour-booking/` in your browser.

---

## 📁 Project Structure

```text
sri-lanka-tour-booking/
├── admin/                  # Admin dashboard files
├── assets/                 # CSS, JS, Images
├── includes/               # Header, footer, and DB connection
├── user/                   # User dashboard files
├── gallery/                # Tour image gallery
├── login.php
├── logout.php
├── register.php
├── index.php
├── contact.php
├── database/
│   └── tour_booking.sql    # Database export
└── README.md
```

---

## 🔒 Admin Login (Sample)

* **Username:** `admin`
* **Password:** `admin123`

> You can change the default admin credentials in the database.

---

## 📸 Gallery Integration

The gallery page dynamically fetches tour destination images from the database. You can update images using the admin panel or directly in the `images/` folder and the database.

---

## 📌 Future Improvements

* Payment gateway integration (e.g., Stripe or PayPal)
* Email confirmation for bookings
* Multi-language support
* Responsive design improvements

---

## 📄 License

This project is for educational purposes. Feel free to customize and expand it as needed.

---

## 🤝 Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you'd like to change.

---

## ✉️ Contact

For questions or support, please reach out to \[[your.email@example.com](mailto:your.email@example.com)].

```

---

Let me know if you want the README customized with your name, GitHub link, screenshots, or any specific feature descriptions.
```
