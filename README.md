# RESTful-Laravel-Api
This project is a restful application using laravel and mysql database

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
