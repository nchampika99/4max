</main>

<footer class="bg-black/80 border-t border-red-900/30 mt-20">
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-aos="fade-up">
            <!-- Logo and Social Links -->
            <div class="space-y-4" data-aos="fade-right" data-aos-delay="100">
                <a href="index.php" class="flex items-center gap-3">
                    <img src="./assets/images/logo.jpg" class="h-14 flame" alt="Logo">
                    <span class="text-2xl font-bold bg-gradient-to-r from-red-500 to-orange-400 bg-clip-text text-transparent">
                        4MAX VIDEO TEAM
                    </span>
                </a>
                <p class="text-gray-400 text-sm">Professional video solutions since 2015</p>
                <div class="flex gap-4">
                    <a href="https://www.facebook.com/maxvideoteam" class="text-red-500 hover:text-orange-400 transition-colors" aria-label="Facebook">
                        <i class="fab fa-facebook text-2xl"></i>
                    </a>
                    <a href="#" class="text-red-500 hover:text-orange-400 transition-colors" aria-label="Instagram">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                    <a href="https://www.youtube.com/@4maxvideoteam" class="text-red-500 hover:text-orange-400 transition-colors" aria-label="YouTube">
                        <i class="fab fa-youtube text-2xl"></i>
                    </a>
                    <a href="https://wa.me/94717281221" class="text-red-500 hover:text-orange-400 transition-colors" aria-label="WhatsApp">
                        <i class="fab fa-whatsapp text-2xl"></i>
                    </a>
                </div>
            </div>

            <!-- Products Links -->
            <div data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-lg font-bold mb-4 text-red-500">Products</h3>
                <ul class="space-y-2">
                    <li><a href="products.php?category=cameras" class="text-gray-400 hover:text-orange-400 transition-colors">Cameras</a></li>
                    <li><a href="products.php?category=lighting" class="text-gray-400 hover:text-orange-400 transition-colors">Lighting Gear</a></li>
                    <li><a href="products.php?category=audio" class="text-gray-400 hover:text-orange-400 transition-colors">Audio Equipment</a></li>
                    <li><a href="products.php?category=accessories" class="text-gray-400 hover:text-orange-400 transition-colors">Accessories</a></li>
                </ul>
            </div>

            <!-- Company Links -->
            <div data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-lg font-bold mb-4 text-red-500">Company</h3>
                <ul class="space-y-2">
                    <li><a href="about.php" class="text-gray-400 hover:text-orange-400 transition-colors">About</a></li>
                    <li><a href="services.php" class="text-gray-400 hover:text-orange-400 transition-colors">Services</a></li>
                    <li><a href="booking.php" class="text-gray-400 hover:text-orange-400 transition-colors">Book Now</a></li>
                    <li><a href="contact.php" class="text-gray-400 hover:text-orange-400 transition-colors">Contact</a></li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-red-900/30 mt-12 pt-8 text-center text-gray-500" data-aos="fade-up" data-aos-delay="400">
            <p class="text-sm">
                &copy; <?= date('Y') ?> 4Max Video Team. All rights reserved.<br>
                <span class="text-xs text-900/50">Developed by <a href="https://wa.me/94766237857" class="text-red-500 hover:text-orange-400 transition-colors" aria-label="WhatsApp"> Champika Nuwan</a></span>
            </p>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Initialize AOS animations
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-in-out-quad',
        offset: 120
    });

    // Hide loader
    window.addEventListener('load', () => {
        document.querySelector('.loader').style.display = 'none';
    });

    // Mobile menu toggle
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            const icon = menuBtn.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });
    }
</script>
</body>
</html>