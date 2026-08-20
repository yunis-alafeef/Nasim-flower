<?php
session_start();
// سأضيف لاحقاً منطق الجلسة وإدارة المستخدم
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نسيم فلور - متجر الهدايا</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <a href="index.php" class="logo">نسيم <span>فلور</span></a>
                
                <ul class="nav-links">
                    <li><a href="index.php">الرئيسية</a></li>
                    <li><a href="products.php">المنتجات</a></li>
                    <li><a href="about.php">من نحن</a></li>
                    <li><a href="contact.php">اتصل بنا</a></li>
                </ul>
                
                <div class="nav-actions">
                    <div class="cart-icon">
                        <a href="cart.php">🛒</a>
                        <span class="cart-count">0</span>
                    </div>
                    <div class="user-icon">
                        <a href="login.php">👤</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>