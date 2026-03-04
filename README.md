<div align="center">
  <img src="admin/logo.png" alt="Logo" width="100" />
  <h1>🛒 Online Shop</h1>
  <p>A simple and responsive E-commerce web application built with native PHP and MySQL.</p>
</div>

<br />

## 📋 About The Project

This project is a fully functional, simple E-commerce web application designed with an Arabic user interface. It provides a platform for users to browse products, manage a shopping cart, and for administrators to manage the store's inventory.

### ✨ Key Features

*   **User Authentication**: Secure registration and login system for customers.
*   **Shopping Cart**: Users can seamlessly add products, update quantities, remove individual items, and clear their entire cart.
*   **Product Catalog**: A dynamic display of available products complete with images, names, and prices.
*   **Admin Dashboard**: A dedicated backend panel for administrators to perform CRUD (Create, Read, Update, Delete) operations on the product catalog.
*   **Responsive Design**: Built using HTML, CSS, and Bootstrap to ensure a mobile-friendly and accessible layout across all devices.
*   **Arabic UI**: The user interface is fully localized in Arabic (`عربة التسوق`, `تسجيل الدخول`, etc.).

### 🛠️ Built With

*   **Frontend**: HTML5, CSS3, Bootstrap
*   **Backend**: PHP (Native)
*   **Database**: MySQL

---

## 🚀 Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

You will need a local server environment capable of running PHP and MySQL, such as:
*   [XAMPP](https://www.apachefriends.org/index.html)
*   [WampServer](https://www.wampserver.com/en/)
*   [MAMP](https://www.mamp.info/)

### Installation

1.  **Clone or Download the Repository**
    Place the project folder (`Online_Shop`) inside your server's root directory:
    *   For XAMPP: `C:\xampp\htdocs\Online_Shop`
    *   For WAMP: `C:\wamp\www\Online_Shop`

2.  **Database Setup**
    *   Start Apache and MySQL from your local server control panel.
    *   Open phpMyAdmin in your browser (usually `http://localhost/phpmyadmin`).
    *   Create a new database named `shop_db`.
    *   Import the provided SQL file or run the queries manually to create the required tables (`users`, `cart`, `products`).
        *Note: If the SQL file mentions `user_info` but the code uses `users`, ensure the table is named `users` to match the `login.php` script.*

3.  **Configure Database Connection**
    *   Open `config.php` and any relevant configuration files in the `admin/` directory.
    *   Ensure the database connection details match your local environment.
    ```php
    $conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');
    ```

4.  **Run the Application**
    *   Open your web browser and navigate to: `http://localhost/Online_Shop`

---

## 📂 Project Structure

*   `index.php` - The main store page for browsing products and maintaining the shopping cart.
*   `login.php` & `register.php` - Pages for user authentication.
*   `config.php` - The main database configuration file.
*   `table database.sql` - The SQL schemas needed to initialize the project database.
*   `css/` - Custom stylesheets and Bootstrap CSS.
*   `admin/` - Directory for the admin dashboard (contains `products.php`, `insert.php`, `update.php`, `delete.php`, etc.).
*   `images/` & `admin/images/` - Dirs containing application logic images and product images.

---

## 👨‍💻 Developer

*   **Name:** Hassan Mohamed
*   **Email:** [hassanaamer048@gmail.com](mailto:hassanaamer048@gmail.com)

---

<div align="center">
  <sub>Built with ❤️ by Hassan Mohamed</sub>
</div>
