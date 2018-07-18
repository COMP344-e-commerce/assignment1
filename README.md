# COMP344 Assignment 1 2018 2 
This is COMP344 assignment 1 2018 done by group 2. It's a online textbook store. 

# How to use
- Configure `config.php` to ensure the application can connect to your database.
- Upload all the files to a php web server.
- Navigate to `install.php` to setup the application. <http://202.118.249.4/~ausstu2/install.php>
- Navigate home page <http://202.118.249.4/~ausstu2/>

# Features
- Register, login, logout (done)
- Display textbooks for the logged in users (planned) 
- Wish list (planned)
- Shopping cart (planned)
- Shopping cart (planned)

# Urls (not even routes because I have no idea how to implement MVC in PHP)

| URL                | HTTP method | Response  | Description                                   |
|--------------------|-------------|-----------|-----------------------------------------------|
| /                  | GET         | text/html | Home page                                     |
| /install.php       | GET         | text/html | Drop all tables then then recreate all tables |
| /account.php       | GET         | text/html | Register new user or login                    |
| /register.php      | POST        | text/html | Register new user                             |
| /login.php         | POST        | text/html | Login                                         |
| /addresses.html    | POST        | text/html | Group contribution form                       |