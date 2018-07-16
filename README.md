# COMP344 assignment 1
This is COMP344 assignemnt 1

# How to use
- Configure `config.php` to ensure the application can connect to your database.
- Upload all the files to a php webserver.
- Navigate to `install.php` to setup the application. Example 
<http://202.118.249.4/~ausstu2/install.php>
- Navigate home page <http://202.118.249.4/~ausstu2/>

# Features
- Register, login, see books, log out, don't see books. 

# Urls (not even routes)

| URL           | HTTP method | Response  | Description                                   |
|---------------|-------------|-----------|-----------------------------------------------|
| /             | GET         | text/html | Home page                                     |
| /install.php  | GET         | text/html | Drop all tables then then recreate all tables |
| /account.php  | GET         | text/html | Register new user or login                    |
| /register.php | POST        | text/html | Register new user                             |
| /login.php    | POST        | text/html | Login                                         |