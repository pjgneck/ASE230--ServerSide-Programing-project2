# Inventory System API (Laravel)

This is a Laravel-based REST API for a simple inventory system.

## Getting Started

### Prerequisites

- PHP >= 8.2
- Composer
- MySQL

### Installation

1.  **Clone the repository** (or download the files).
2.  **Navigate to the `laravel` directory:**
    ```bash
    cd laravel
    ```
3.  **Install PHP dependencies:**
    ```bash
    composer install
    ```
4.  **Create a copy of the `.env.example` file and name it `.env`:**
    ```bash
    cp .env.example .env
    ```
5.  **Generate an application key:**
    ```bash
    php artisan key:generate
    ```
6.  **Configure your database in the `.env` file.**
    Make sure you have a database created and the credentials are correct.
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=inventory_system
    DB_USERNAME=root
    DB_PASSWORD=password123
    ```
7.  **Run the database migrations and seeders:**
    ```bash
    php artisan migrate:fresh --seed
    ```
8.  **Start the development server:**
    ```bash
    php artisan serve
    ```
The API will be available at `http://127.0.0.1:8000`.

## API Endpoints

All endpoints are prefixed with `/api`.

### Authentication

-   `POST /signup` - Register a new user.
-   `POST /login` - Login and get an authentication token.

### Departments

-   `GET /departments` - Get all departments.
-   `GET /departments/{id}` - Get a specific department.
-   `POST /departments` - Create a new department.
-   `PUT /departments/{id}` - Update a department.
-   `DELETE /departments/{id}` - Delete a department.

### Users

-   `GET /users` - Get all users.
-   `GET /users/{id}` - Get a specific user.
-   `POST /users` - Create a new user.
-   `PUT /users/{id}` - Update a user.
-   `DELETE /users/{id}` - Delete a user.

### Inventories

-   `GET /inventories` - Get all inventories.
-   `GET /inventories?department_id={id}` - Get inventories by department.
-   `GET /inventories/{id}` - Get a specific inventory.
-   `POST /inventories` - Create a new inventory.
-   `PUT /inventories/{id}` - Update an inventory.
-   `DELETE /inventories/{id}` - Delete an inventory.
-   `GET /inventories/department/{id}` - Get inventories by department.

### Items

-   `GET /items` - Get all items.
-   `GET /items?inventory_id={id}` - Get items by inventory.
-   `GET /items/{id}` - Get a specific item.
-   `POST /items` - Create a new item.
-   `PUT /items/{id}` - Update an item.
-   `DELETE /items/{id}` - Delete an item.
-   `GET /items/inventory/{id}` - Get items by inventory.