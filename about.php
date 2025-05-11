<?php
$pageTitle = "About Us";
include 'includes/header.php';
?>

<section class="container mx-auto px-6 py-20">
    <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
        <h2 class="text-4xl font-bold mb-8">Who We Are</h2>
        <p class="text-gray-400 text-lg leading-relaxed mb-12">
            Since 2015, 4Max Video Team has been delivering exceptional video production services across Sri Lanka. 
            Our team of creative professionals is dedicated to transforming your vision into compelling visual stories.
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-12 mb-20">
        <div class="bg-gray-900 rounded-2xl p-8" data-aos="fade-right">
            <h3 class="text-2xl font-bold mb-4 text-red-500">Our Mission</h3>
            <p class="text-gray-400">
                To empower businesses and individuals through innovative video solutions that captivate audiences 
                and deliver measurable results.
            </p>
        </div>
        
        <div class="bg-gray-900 rounded-2xl p-8" data-aos="fade-left">
            <h3 class="text-2xl font-bold mb-4 text-red-500">Our Vision</h3>
            <p class="text-gray-400">
                To be Sri Lanka's most trusted video production partner, setting new standards in creative 
                storytelling and technical excellence.
            </p>
        </div>
    </div>

    <div class="py-20" data-aos="fade-up">
        <h2 class="text-4xl font-bold mb-16 text-center">Our Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Team Members -->
            <div class="bg-gray-900 rounded-xl p-6 text-center">
                <div class="relative w-48 h-48 rounded-full overflow-hidden mx-auto mb-6">
                    <img src="images/team/director.jpg" 
                         alt="Director" 
                         class="w-full h-full object-cover hover:scale-110 transition-transform">
                </div>
                <h3 class="text-xl font-bold mb-2">Randima Wijerathna</h3>
                <p class="text-red-500 mb-2">Creative Director</p>
                <p class="text-gray-400 text-sm">10+ years in film production</p>
            </div>
            <!-- Add more team members -->
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>