<?php
$pageTitle = "Contact";
include 'includes/header.php';
require_once 'includes/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare("INSERT INTO contact_messages 
            (name, email, phone_number, subject, message)
            VALUES (?, ?, ?, ?, ?)");
        
        $stmt->execute([
            htmlspecialchars($_POST['name']),
            filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
            htmlspecialchars($_POST['phone']),
            htmlspecialchars($_POST['subject']),
            htmlspecialchars($_POST['message'])
        ]);
        
        $success = true;
    } catch(PDOException $e) {
        $error = "Message sending failed: " . $e->getMessage();
    }
}
?>

<section class="container mx-auto px-6 py-20">
    <div class="max-w-4xl mx-auto" data-aos="fade-up">
        <h2 class="text-4xl font-bold mb-16 text-center">Contact Us</h2>
        
        <div class="grid md:grid-cols-2 gap-12">
            <div class="space-y-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 text-red-500">Visit Us</h3>
                    <p class="text-gray-400">
                        123 Video Street<br>
                        Colombo 00500<br>
                        Sri Lanka
                    </p>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4 text-red-500">Call Us</h3>
                    <p class="text-gray-400">
                        <a href="tel:+94771234567" class="hover:text-red-500 transition-colors">+94 77 123 4567</a><br>
                        <a href="tel:+94112345678" class="hover:text-red-500 transition-colors">+94 112 345 678</a>
                    </p>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4 text-red-500">Social Media</h3>
                    <div class="flex gap-4 text-2xl">
                        <a href="#" class="text-gray-400 hover:text-red-500 transition-colors">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-red-500 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-red-500 transition-colors">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div>
                <?php if(isset($success)): ?>
                <div class="bg-green-900/50 text-green-400 p-4 rounded-xl mb-8 text-center">
                    <i class="fas fa-check-circle mr-2"></i>
                    Message sent successfully!
                </div>
                <?php elseif(isset($error)): ?>
                <div class="bg-red-900/50 text-red-400 p-4 rounded-xl mb-8 text-center">
                    <i class="fas fa-times-circle mr-2"></i>
                    <?= $error ?>
                </div>
                <?php endif; ?>

                <form method="POST" class="space-y-6">
                    <div>
                        <input type="text" name="name" placeholder="Your Name" required
                            class="w-full bg-gray-900 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-500 outline-none">
                    </div>
                    
                    <div class="grid gap-6">
                        <input type="email" name="email" placeholder="Email Address" required
                            class="w-full bg-gray-900 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-500 outline-none">
                        
                        <input type="tel" name="phone" placeholder="Phone Number"
                            class="w-full bg-gray-900 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-500 outline-none">
                    </div>
                    
                    <div>
                        <input type="text" name="subject" placeholder="Subject" required
                            class="w-full bg-gray-900 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-500 outline-none">
                    </div>
                    
                    <div>
                        <textarea name="message" rows="4" placeholder="Your Message" required
                            class="w-full bg-gray-900 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-500 outline-none"></textarea>
                    </div>
                    
                    <button type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 py-4 rounded-full font-medium transition-colors">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>