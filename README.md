# Product API - Laravel Backend

A simple REST API for managing products built with Laravel.

## Requirements
- PHP 8.2 or higher
- Composer
- MySQL database
- Git

## Setup Instructions

### 1. Install Dependencies
```bash
composer install
```

### 2. Environment Configuration
```bash
# Copy environment file
copy .env.example .env

# Generate application key
php artisan key:generate
```

### 3. Database Setup
Edit `.env` file with your MySQL database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=aahaas_products
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Create the database in MySQL:
```sql
CREATE DATABASE aahaas_products;
```

### 4. Run Migrations and Seeders
```bash
# Run database migrations
php artisan migrate

# Seed database with sample data
php artisan db:seed
```

### 5. Start the Server
```bash
php artisan serve
```
Server will run on: `http://127.0.0.1:8000`

## API Endpoints

### Get All Products
- **URL**: `http://127.0.0.1:8000/api/products`
- **Method**: GET
- **Response**: JSON array of products

**Example Response:**
```json
[
  {
    "id": 1,
    "name": "Classic Mechanical Keyboard",
    "description": "Tactile mechanical switches, RGB backlight.",
    "price": "69.99",
    "image_url": "https://example.com/images/keyboard.jpg"
  }
]
```

## Project Structure
```
product-api-laravel/
├── app/
│   ├── Http/Controllers/Api/ProductController.php
│   └── Models/Product.php
├── database/
│   ├── migrations/create_products_table.php
│   └── seeders/ProductsTableSeeder.php
├── routes/api.php
└── .env
```

## Testing
Open browser or Postman and visit:
- `http://127.0.0.1:8000/api/products`

## Troubleshooting
- Make sure MySQL is running
- Check database credentials in `.env`
- Run `php artisan config:clear` after changing `.env`
- Ensure PHP and Composer are installed correctly
