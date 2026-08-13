# Sportswear Website - E-Commerce Platform

A modern Laravel-based e-commerce platform for sportswear products

---

## Table of Contents

- [About](#about)
- [System Requirements](#system-requirements)
- [Installation](#installation)
- [Project Structure](#project-structure)
- [Features](#features)
- [API Documentation](#api-documentation)
- [Useful Commands](#useful-commands)
- [Troubleshooting](#troubleshooting)
- [Contributing](#contributing)
- [License](#license)

---

## About

**Sportswear Website** is a modern e-commerce platform built with **Laravel 9** and **Vite**, providing a complete solution for managing and selling sportswear products.

### Key Features:
- Full-featured admin interface
- Product and category management
- Secure authentication system
- Modern frontend interface (Vite + JavaScript)
- RESTful API for data operations
- MySQL database support

---

## System Requirements

| Tool | Version | Notes |
|------|---------|-------|
| **PHP** | 8.0.2+ | Required |
| **Composer** | 2.0+ | PHP dependency manager |
| **Node.js** | 14.0+ | For Vite build tool |
| **npm** or **pnpm** | 6.0+ | JavaScript package manager |
| **MySQL** | 5.7+ | Database |

---

## Installation

### Step 1: Clone the Project
```bash
git clone <repository-url>
cd SPORTSWEAR
```

### Step 2: Install PHP Dependencies
```bash
composer install
```

### Step 3: Install Node Dependencies
```bash
npm install
```

### Step 4: Create Environment File
```bash
cp .env.example .env
```

Then, update the following in `.env`:
```env
APP_NAME=Sportswear
APP_ENV=local
APP_KEY=  # Will be generated in next step
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sportswear_website
DB_USERNAME=root
DB_PASSWORD=
```

### Step 5: Generate Application Key
```bash
php artisan key:generate
```

### Step 6: Run Migrations (Create Database Tables)
```bash
php artisan migrate
```

### Step 7: Seed Database (Optional)
```bash
php artisan db:seed
```

### Step 8: Run Development Servers

**Terminal 1 - Vite Development Server:**
```bash
npm run dev
```

**Terminal 2 - Laravel Development Server:**
```bash
php artisan serve
```

Access the application at: **http://localhost:8000**

---

## Project Structure

```
SPORTSWEAR/
├── app/
│   ├── Console/           # Artisan commands
│   ├── Exceptions/        # Exception handlers
│   ├── Http/
│   │   ├── Controllers/   # Application controllers
│   │   ├── Middleware/    # HTTP middleware
│   │   └── Kernel.php     # HTTP kernel
│   ├── Models/            # Eloquent models
│   └── Providers/         # Service providers
├── config/                # Configuration files
├── database/
│   ├── factories/         # Model factories
│   ├── migrations/        # Database migrations
│   └── seeders/           # Database seeders
├── public/
│   ├── backend/           # Admin assets (CSS, JS)
│   ├── fronttend/         # Frontend assets
│   └── index.php          # Entry point
├── resources/
│   ├── css/               # CSS files
│   ├── js/                # JavaScript files
│   └── views/             # Blade templates
│       ├── admin/         # Admin panel views
│       ├── index.blade.php
│       └── welcome.blade.php
├── routes/
│   ├── api.php            # API routes
│   ├── web.php            # Web routes
│   └── ...
├── storage/               # File storage
├── tests/                 # Test files
├── .env.example           # Environment example
├── composer.json          # PHP dependencies
├── package.json           # Node dependencies
├── phpunit.xml            # PHPUnit configuration
└── vite.config.js         # Vite configuration
```

---

## Features

### Admin Panel
- User login/logout
- Horizontal menu management
- Vertical menu management
- Product category management
- Sportswear product management

### Product Management
- Add/Edit/Delete products
- Product categorization
- Product images
- Detailed product descriptions

### Security
- Authentication with Laravel Sanctum
- CSRF token validation
- Secure password hashing

### Frontend
- Homepage
- Responsive interface
- Vite integration for hot reload

---

## API Documentation

### Main Endpoints (in `routes/api.php`):

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/products` | List all products |
| GET | `/api/products/{id}` | Get product details |
| POST | `/api/products` | Create product (Admin) |
| PUT | `/api/products/{id}` | Update product (Admin) |
| DELETE | `/api/products/{id}` | Delete product (Admin) |

---

## Useful Commands

```bash
# Create a new migration
php artisan make:migration create_products_table

# Create a new model
php artisan make:model Product

# Create a new controller
php artisan make:controller ProductController

# Run tests
php artisan test

# Clear cache
php artisan cache:clear
php artisan config:clear

# View all routes
php artisan route:list
```

---

## Troubleshooting

### Error: `composer: command not found`
**Solution:**
- Install Composer from https://getcomposer.org/download/
- Or use Laragon/XAMPP (includes composer)

### Error: Database connection refused
**Solution:**
- Verify MySQL is running: `mysql -u root`
- Create database: `CREATE DATABASE sportswear_website;`
- Update `.env` with correct database credentials

### Error: `php: command not found`
**Solution:**
- Install PHP from https://www.php.net/downloads
- Or use Laragon: https://laragon.org/

### npm run dev not working
**Solution:**
```bash
npm install  # Reinstall dependencies
npm run dev  # Run Vite again
```

---

## Contributing

We welcome all contributions! Please follow these steps:

1. Fork the project
2. Create a new branch: `git checkout -b feature/feature-name`
3. Commit your changes: `git commit -m 'Add new feature'`
4. Push to the branch: `git push origin feature/feature-name`
5. Create a Pull Request

---

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

## Support

If you have any questions or issues, please:
- Create an issue on GitHub
- Contact the development team

---

**Version:** 1.0.0  
**Framework:** Laravel 9  
**Build Tool:** Vite  
**Last Updated:** 2026
