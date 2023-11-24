# Backend Test Bitnat

Sample Backend API project built in Laravel v10.10

---

## About

This sample project was built by myself, Luis B. Mata, as a requirement on my hiring process. It features a "Virtual Library" which enables API consumers to get books listings -with some filtering- and authenticated users which have the "publisher" role to be able to add new books to the Library (project built in Laravel v10.10)

---

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/10.x#installation)

Clone the repository

    git clone git@github.com:gothinkster/backend-test-bitnat.git

Switch to the repo folder

    cd backend-test-bitnat

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Generate a new JWT authentication secret key

    php artisan jwt:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone git@github.com:gothinkster/backend-test-bitnat.git
    cd backend-test-bitnat
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan jwt:generate

**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

**_Note_** : to be able to have authorized User access with a "publisher" role, you have to manually modify such user field on the database, since by default, all users registered through the endpoint are set with the "basic" role

## API Specification

This application adheres to the api specifications set by the Bitnat team in accordance to their "Prueba back-end BITNAT - Latest" provided test.

---

# Code overview

## Dependencies

-   [jwt-auth](https://github.com/tymondesigns/jwt-auth) - For authentication using JSON Web Tokens
-   [Laravel-query-builder](https://spatie.be/docs/laravel-query-builder/v5/introduction) - For query string parameters parsing

## Environment variables

-   `.env` - Environment variables can be set in this file

**_Note_** : You can quickly set the database information and other variables in this file and have the application fully working.

---

# Testing API

Run the laravel development server

    php artisan serve

The api can now be accessed at

    http://localhost:8000/api

Request headers

| **Required** | **Key**       | **Value**          |
| ------------ | ------------- | ------------------ |
| Yes          | Content-Type  | application/json   |
| Optional     | Authorization | Bearer Token {JWT} |

---

# Authentication & Authorization

This applications uses JSON Web Token (JWT) to handle authentication and Custom "role" claims for authorization (through the Laravel Framork's native "Policy" feature). The token is passed with each request using the `Authorization` header with `Bearer Token` scheme.

---
