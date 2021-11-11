<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore Website - Administration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../public/admin/css/base.css">
    <link rel="stylesheet" href="../public/admin/css/style.css">
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li><a href="http://localhost/mvc-php/admin/"><span class="icon"></span><span class="title"><h2>Bookstore</h2></span></a></li>
                <li><a href="http://localhost/mvc-php/admin"><span class="icon"><i class="fas fa-home"></i></span><span class="title">Dashboard</span></a></li>
                <li><a href="http://localhost/mvc-php/admin/user"><span class="icon"><i class="fas fa-user-cog"></i></span><span class="title">Users</span></a></li>
                <li><a href="http://localhost/mvc-php/admin/customer"><span class="icon"><i class="fas fa-users"></i></span><span class="title">Customers</sp</li>
                <li><a href="http://localhost/mvc-php/admin/category"><span class="icon"><i class="fas fa-list"></i></span><span class="title">Category</span></a> </li>
                <li><a href="http://localhost/mvc-php/admin/book"><span class="icon"><i class="fas fa-book"></i></span><span class="title">Book</span></a> </li>
                <li><a href="http://localhost/mvc-php/admin/order"><span class="icon"><i class="fas fa-shopping-cart"></i></span><span class="title">Order</span></a></li>
                <li><a href="http://localhost/mvc-php/admin/review"><span class="icon"><i class="fas fa-comment-dots"></i></span><span class="title">Review</span></a></li>
                <li><a href="http://localhost/mvc-php/admin/supplier"><span class="icon"><i class="fas fa-house-user"></i></span><span class="title">Supplier</span></a></li>
                <li><a href="http://localhost/mvc-php/admin/inventory"><span class="icon"><i class="fas fa-shopping-cart"></i></span><span class="title">Inventory</span></a></li>
                
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu()">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="search">
                    <input type="text" id="search" placeholder="Search...">
                    <button class="btn-search"><i class="fas fa-search"></i></button>
                </div>

                <div class="personal">
                    <span class="bell"><i class="fas fa-bell"></i></span>
                    <span class="setting"><i class="fas fa-cog"></i></span>
                    <span><strong>Admin</strong></span>
                </div>
            </div>
       