# About The Project

This is a shopping online page. Using Laravel Framework 7 for client side and Voyager for admin side.

## What is Voyager

Please visit this link https://voyager-docs.devdojo.com/getting-started/what-is-voyager 

## Prerequisites

Before you begin, ensure you have met the following requirements:

* node version: 14.*
* npm version: 6.14.*
* Laravel Framework 7.*

## Getting Started

To install this app, follow these steps:

### 1. Clone the app
```
git clone https://github.com/anotisme/PHP-Laravel.git 
```
or
```
git clone git@github.com:anotisme/PHP-Laravel.git
```
### 2. Using the app

Setup your database
* Duplicate .env.example and change to .env
* Fill out your database, your database username on .env file

You can import my database to your database to look through this app

Move to Project folder by 
```
cd Project
```
#### Run following commands:

Build node_modules folder
```
npm install
```

Build vendor folders
```
composer install
```
or
```
composer update
```

Build style  for the app
```
npm run dev
```

Create APP_KEY for the app
```
php artisan key:generate
```

Create the symbolic link for images folder of the app
```
php artisan storage:link
```
## Contact

If you want to contact me you can reach me at <notpn2017@gmail.com>.