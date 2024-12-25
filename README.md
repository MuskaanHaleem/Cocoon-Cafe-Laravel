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

### Categories

1. **Get All Categories**
   - **Method:** `GET`
   - **Endpoint:** `/api/categories`
   - **Response:**
     ```json
     [
       { "id": 1, "name": "Breakfast" },
       { "id": 2, "name": "Lunch" }
     ]
     ```

2. **Create Category**
   - **Method:** `POST`
   - **Endpoint:** `/api/categories`
   - **Request Body:**
     ```json
     { "name": "Category Name" }
     ```

3. **Update Category**
   - **Method:** `PUT`
   - **Endpoint:** `/api/categories/{id}`
   - **Request Body:**
     ```json
     { "name": "Updated Name" }
     ```

4. **Delete Category**
   - **Method:** `DELETE`
   - **Endpoint:** `/api/categories/{id}`

---

## Troubleshooting

### Common Issues and Fixes

#### 1. **Error 500**
   - Check the logs at `storage/logs/laravel.log` for detailed error information.
   - Ensure your `.env` file is correctly configured.

#### 2. **Assets Not Loading**
   - Rebuild frontend assets by running:
     ```bash
     npm run dev
     ```

#### 3. **Database Issues**
   - Ensure MySQL service is running.
   - Verify database credentials in the `.env` file.

#### 4. **Passport Errors**
   - If you encounter authentication issues, re-install Passport keys by running:
     ```bash
     php artisan passport:install
     ```

---

## Contribution Guide

1. **Create a Branch**
   ```bash
   git checkout -b feature/your-feature-name

2. **Commit your chnages**
   ```bash
   git commit -m "Add feature"

3. **Push and create a Pull request**
   ```bash
   git push origin feature/your-feature-name
 

### Author
Muskaan Haleem
