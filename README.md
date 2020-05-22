<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/felipejcz/RESTful-Laravel-Api/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/tymon/jwt-auth"><img src="http://img.shields.io/packagist/v/tymon/jwt-auth.svg?style=flat-square" alt="Used JWT Version"></a>
</p>

# RESTful-Laravel-Api
This project is a restful application using laravel and mysql database.

### Project contains:
- [X] Use Json Web Token.
- [X] Use Mysql database.
- [X] Create and use Migrations.
- [X] Create and use Factories.
- [X] Create and use Seeders.
- [X] Create CRUD for(Category, Product).
- [X] Create routes for(Category, Product).

# Observations

## Use curl for testing laravel api

```
<?php

### FOR authentication in JWT and receive token using curl 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "localhost:8000/api/login");
// SSL important
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ['email'=>'felipejcz@gmail.com','password'=>'teste123']);
$output = curl_exec($ch);
curl_close($ch);
echo $output;

### FOR show category list using curl 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "localhost:8000/api/category?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNTg5OTI3NzUxLCJleHAiOjE1ODk5MzEzNTEsIm5iZiI6MTU4OTkyNzc1MSwianRpIjoialdOMVl6YkhYR1RmTW5aciIsInN1YiI6MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.EHmj3BaIVajqqPU67DlKyxjBBeqyi0LiLVnzUmKy0t4");
// SSL important
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
echo $output;

### FOR show user details using curl 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "localhost:8000/api/me?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNTg5OTI3NzUxLCJleHAiOjE1ODk5MzEzNTEsIm5iZiI6MTU4OTkyNzc1MSwianRpIjoialdOMVl6YkhYR1RmTW5aciIsInN1YiI6MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.EHmj3BaIVajqqPU67DlKyxjBBeqyi0LiLVnzUmKy0t4");
// SSL important
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$output = curl_exec($ch);
curl_close($ch);
echo $output;


### FOR LOGOUT using curl 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "localhost:8000/api/logout?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNTg5OTI3NzUxLCJleHAiOjE1ODk5MzEzNTEsIm5iZiI6MTU4OTkyNzc1MSwianRpIjoialdOMVl6YkhYR1RmTW5aciIsInN1YiI6MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.EHmj3BaIVajqqPU67DlKyxjBBeqyi0LiLVnzUmKy0t4");
// SSL important
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$output = curl_exec($ch);
curl_close($ch);
echo $output;
```
