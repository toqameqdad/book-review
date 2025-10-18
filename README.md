# Book Review Project
<p align="center"> <a href="https://laravel.com" target="_blank"> <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo"> </a> </p>
About

Book Review is a Laravel-based project for managing books and user reviews.
The application follows MVC architecture and is designed to be secure, responsive, and scalable.
This project is currently under development.

Features

User Authentication: Register, Login, Logout with secure password hashing (bcrypt).

Roles & Permissions: Admin, Writer, Viewer roles with specific access rights.

Books Management: Create, Edit, Delete books; view book details.

Reviews Management: Add reviews for books; view all reviews, and manage your own reviews.

Responsive UI: Built with TailwindCSS + Alpine.js for mobile, tablet, and desktop.

Navigation Components: Navbar with active link highlighting using NavLink component.

Technologies Used

Laravel (MVC Framework)

MariaDB

TailwindCSS

Alpine.js

HTML/CSS

Setup

Copy .env.example to .env and configure your environment variables.

Run composer install.

Run php artisan key:generate.

Set up your MariaDB database and update .env.

Run migrations: php artisan migrate.

Start the development server: php artisan serve.

Open the app in your browser: http://localhost:8000.

Notes

Do not commit your .env file to GitHub.

The project is actively in development and will receive regular updates.

Error handling, authentication, and role-based access control are implemented.
