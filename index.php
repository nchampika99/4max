<?php 
$pageTitle = "Home";
include 'includes/header.php'; 
?>

<section class="container mx-auto px-6" data-aos="fade-up">
    <div class="hero-video relative rounded-3xl overflow-hidden">
        <video autoplay muted loop playsinline class="w-full h-[600px] object-cover">
            <source src="./assets/video/hero.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent flex items-end pb-20 px-4">
            <div class="text-center w-full">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6">Professional Video Solutions</h1>
            </div>
        </div>
    </div>
    <center><a href="./booking.php" class="inline-block bg-red-600 hover:bg-red-700 px-8 py-4 rounded-full text-lg md:text-xl 
                   transition-all duration-300 transform hover:scale-105 shadow-xl shadow-red-900/30 mt-3">
                    Start Your Project Now
                </a></center>
</section>

<!-- Add actual content sections here -->

<?php include 'includes/footer.php'; ?>