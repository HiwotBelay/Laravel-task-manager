# 🚀 Laravel Task Manager App

Welcome to my very first Laravel project — a **Task Manager** — built with ❤️ using **PHP, Laravel, and MySQL**.  
This marks the start of my backend web development journey, and I'm proud to share this milestone!

---

## 📸 Preview

<img src="https://i.imgur.com/2D1Z6eV.png" alt="Task Manager UI" width="700"/>

---

## 🛠️ Tech Stack

- **Laravel 12** – PHP backend framework  
- **MySQL** – Relational database  
- **Blade** – Laravel’s templating engine  
- **Tailwind CSS (via CDN)** – For modern responsive styling  
- **XAMPP** – Local development environment  
- **Composer** – Dependency manager for PHP  

---

## ✨ Features

- ✅ Create a task  
- ✏️ Edit tasks inline  
- ❌ Delete a task  
- 🔁 Toggle task status (complete / pending)  
- 💅 Clean, responsive UI with Tailwind  
- 🧠 Structured MVC (Model-View-Controller) architecture  

---

## 📦 Setup Instructions

```bash
# Clone the project
git clone https://github.com/your-username/task-manager.git
cd task-manager

# Install PHP dependencies
composer install

# Copy environment file and set up DB
cp .env.example .env

# Open .env and configure MySQL connection
# DB_DATABASE=task_manager_db
# DB_USERNAME=root
# DB_PASSWORD=

# Generate app key
php artisan key:generate

# Run migrations
php artisan migrate

# Start local server
php artisan serve
