<?php 
// Must be first line in file
session_start();
ob_start();
$pageTitle = $pageTitle ?? 'Professional Video Solutions';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4Max Video Team - <?= htmlspecialchars($pageTitle) ?></title>
    
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        <?php include './assets/css/style.css'; ?>
        .flame { 
            animation: flame 1.2s ease-in-out infinite alternate;
            transform-origin: center;
        }
        @keyframes flame {
            0% { transform: scale(1) rotate(-2deg); }
            100% { transform: scale(1.05) rotate(2deg); }
        }
    </style>
</head>
<body class="bg-black text-white font-[Poppins]">
<!-- Loading Screen -->
<div class="loader fixed inset-0 bg-black z-[999] flex items-center justify-center">
    <div class="flame text-red-500 text-6xl">🔥</div>
</div>

<header class="fixed w-full z-50 bg-black/90 backdrop-blur-md border-b border-red-900/30">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="index.php" class="flex items-center gap-3">
            <img src="./assets/images/logo.jpg" class="h-14 flame" alt="Logo">
            <span class="text-2xl font-bold bg-gradient-to-r from-red-500 to-orange-400 bg-clip-text text-transparent">
                4MAX VIDEO TEAM
            </span>
        </a>
        
        <div class="hidden md:flex items-center gap-8">
            <a href="index.php" class="hover:text-red-500 transition-colors">Home</a>
            <a href="about.php" class="hover:text-red-500 transition-colors">About</a>
            <a href="services.php" class="hover:text-red-500 transition-colors">Services</a>
            <a href="products.php" class="hover:text-red-500 transition-colors">Products</a>
            <a href="booking.php" class="bg-red-600 px-6 py-2 rounded-full hover:bg-red-700 transition-colors">Book Now</a>
        </div>
        
        <!-- Mobile Menu Button -->
        <button id="menuBtn" class="md:hidden text-2xl">
            <i class="fas fa-bars"></i>
        </button>
    </nav>
    
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden absolute top-full w-full bg-black/95 hidden">
        <div class="container mx-auto px-6 py-4 flex flex-col gap-4">
            <a href="index.php" class="py-2 border-b border-red-900/30">Home</a>
            <a href="about.php" class="py-2 border-b border-red-900/30">About</a>
            <a href="services.php" class="py-2 border-b border-red-900/30">Services</a>
            <a href="products.php" class="py-2 border-b border-red-900/30">Products</a>
            <a href="booking.php" class="py-2 text-red-500 font-bold">Book Now</a>
        </div>
    </div>
</header>
<main class="pt-32">