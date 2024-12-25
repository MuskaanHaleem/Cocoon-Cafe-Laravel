# Cocoon Cafe

## Project Overview
Cocoon Cafe is a web application for managing cafe operations. It provides APIs for managing categories, image uploads, and other functionalities. Built with Laravel, it ensures a smooth backend experience.

---

## Key Features
- Manage categories (CRUD functionality).
- Image uploads for menus and categories.
- Role-based authentication using Laravel Passport.
- Clean and modular structure.

---

## Quick Setup Guide
### Requirements
- PHP >= 8.1
- Composer
- MySQL
- Node.js and npm
- XAMPP/WAMP for local development

### Steps to Install
1. Clone the repository:

   ```bash
   git clone <repository-url>
   cd cocoon-cafe

2. Install backend dependencies:

   ```bash 
   composer install

3. Install frontend dependencies and build assets:

   ```bash
   npm install
   npm run dev

4. Copy the .env file:

   ```bash
   cp .env.example .env
   Update .env with your database and app details.

6. Set up the database:

   ```bash
   php artisan migrate

7. Generate app keys and Passport keys:

   ```bash
   php artisan key:generate
   php artisan passport:install

8. Start the server:

   ```bash
   php artisan serve

## API Endpoints
Categories

1. Get All Categories

GET /api/categories

Response:
  
json
Copy code
[
  { "id": 1, "name": "Breakfast" },
  { "id": 2, "name": "Lunch" }
]

2. Create Category

POST /api/categories
Body:

json
Copy code
{ "name": "Category Name" }

3. Update Category

PUT /api/categories/{id}
Body:

json
Copy code
{ "name": "Updated Name" }

4. Delete Category

DELETE /api/categories/{id}

## Troubleshooting

Error 500

Check storage/logs/laravel.log for details.
Verify .env configuration.
Assets Not Loading

Run npm run dev again.
Database Issues

Check if MySQL is running.
Verify .env database credentials.
Passport Errors

Re-run:
    ```bash
    Copy code
    php artisan passport:install
    Contribution Guide

Create a branch:
    ```bash
    Copy code
    git checkout -b feature/your-feature-name

Commit your changes:
    ```bash
    Copy code
    git commit -m "Add feature"
    Push and create a pull request.

### Author
Muskaan Haleem
