<p align="center"><a href="#" target="_blank"><img src="https://freeton.org/img/39ea991054a0ff160407729187d43387.png" height="auto" width="auto"></a></p>

## Introduction

## Demo

View a live [demo here](http://tonwinners.com).

Admin:

```
Login: admin@freeton.net
Password: password
```

Publisher:

```
Login: publisher@freeton.net
Password: password
```

User:

```
Login: user@freeton.net
Password: password
```

## Installation

To install Free-Ton-Winners, you'll want to clone or download this repo:

```
git clone https://github.com/Timuchen/Free-TON-Winners.git project_name
```

Next, we can install Free-Ton-Winners with these **4 simple steps**:

### 1. Create a New Database

During the installation we need to use a MySQL database. You will need to create a new database and save the credentials for the next step.

### 2. Copy the `.env.example` file

We need to specify our Environment variables for our application. You will see a file named `.env.example`, you will need to duplicate that file and rename it to `.env`.

Then, open up the `.env` file and update your _DB_DATABASE_, _DB_USERNAME_, and _DB_PASSWORD_ in the appropriate fields. You will also want to update the _APP_URL_ to the URL of your application.

```bash
APP_URL=http://tonwinners.test

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tonwinners
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Add Composer Dependencies

Next, we will need to install all our composer dependencies by running the following command:

```php
composer install
```

### 4. Run Migrations and Seeds

We need to migrate our database structure into our database, which we can do by running:

```php
php artisan migrate
```

<br>

🎉 And that's it! You will now be able to visit your URL and see your Free-Ton-Winners application up and running.
