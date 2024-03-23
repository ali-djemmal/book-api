# Book API

This repository contains the source code for a RESTful API built with Laravel for managing books.

## Technologies Used
- Laravel
- SQL Server
- Git

## Setup and Installation

### Prerequisites
- PHP >= 8.0.13
- Composer
- SQL Server
- Git


### Navigate to Project Directory And Install Dependencies
- command : composer install
### Environment Configuration
- Create a .env file in the root directory and configure the database connection for SQL Server:
- DB_CONNECTION=sqlsrv
- DB_HOST=DESKTOP-7V70CRU --> server name of sqlserver
- DB_PORT=
- DB_DATABASE=book_api
- DB_USERNAME=root
- DB_PASSWORD=api123456

### Generate Application Key

- command : Generate Application Key
### Run Migrations
- command : php artisan migrate
## Start Development Server
- command : php artisan server

## API Endpoints

### Create a New Book (POST): /api/v1/books

### Retrieve a List of Books with Pagination (GET): /api/v1/books

### Retrieve a Single Book by ID (GET): /api/v1/books/{id}

### Update a Book (PUT): /api/v1/books/{id}

### Delete a Book (DELETE): /api/v1/books/{id}






