# Microfinance Solution for a sacco

Built on Laravel 5.6

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

PHP 7
MySQL

### Installing

A step by step series of examples that tell you how to get a development env running

On your terminal open mysql

```
mysql -u root -p;
```

Create a database

```
CREATE DATABASE sacco_db;
```

Exit

```
quit;
```

Clone the repository

```
git clone https://github.com/masitsa/sacco.git
```

Access the .env file in your root directory and configure your database

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<your databse name>
DB_USERNAME=<your databse username>
DB_PASSWORD=<your databse password>
```

In your terminal change directory to the root of your project

```
cd c:\directory\project_folder
```

Install PHP Dependancies

```
composer install
```

Migrate your database

```
php artisan migrate
```

Run the project

```
php artisan serve
```

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
