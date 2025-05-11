<?php
$pageTitle = "Booking";
include 'includes/header.php';
require_once 'includes/db_connect.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare("INSERT INTO appointments 
            (name, email, phone_number, service_type, preferred_date, preferred_time, message)
            VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        $stmt->execute([
            htmlspecialchars($_POST['name']),
            filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
            htmlspecialchars($_POST['phone']),
            htmlspecialchars($_POST['service']),
            htmlspecialchars($_POST['date']),
            htmlspecialchars($_POST['time']),
            htmlspecialchars($_POST['message'])
        ]);
        
        $success = true;
    } catch(PDOException $e) {
        $error = "Booking failed: " . $e->getMessage();
    }
}
?>

<section class="container mx-auto px-6 py-20 min-h-screen">
    <div class="max-w-2xl mx-auto" data-aos="fade-up">
        <h2 class="text-4xl font-bold mb-12 text-center">Book Appointment</h2>
        
        <?php if(isset($success)): ?>
        <div class="bg-green-900/50 text-green-400 p-4 rounded-xl mb-8 text-center">
            <i class="fas fa-check-circle mr-2"></i>
            Booking successful! We'll contact you shortly.
        </div>
        <?php elseif(isset($error)): ?>
        <div class="bg-red-900/50 text-red-400 p-4 rounded-xl mb-8 text-center">
            <i class="fas fa-times-circle mr-2"></i>
            <?= $error ?>
        </div>
        <?php endif; ?>

        <form method="POST" class="space-y-6">
            <div>
                <label class="block mb-2 font-medium">Full Name</label>
                <input type="text" name="name" required
                    class="w-full bg-gray-900 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-500 outline-none">
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block mb-2 font-medium">Email</label>
                    <input type="email" name="email" required
                        class="w-full bg-gray-900 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-500 outline-none">
                </div>
                
                <div>
                    <label class="block mb-2 font-medium">Phone</label>
                    <input type="tel" name="phone" required
                        class="w-full bg-gray-900 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-500 outline-none">
                </div>
            </div>

            <div>
                <label class="block mb-2 font-medium">Service Type</label>
                <select name="service" required
                    class="w-full bg-gray-900 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-500 outline-none">
                    <option value="">Select Service</option>
                    <option value="Event Coverage">Event Coverage</option>
                    <option value="Commercial Ads">Commercial Ads</option>
                    <option value="Drone Videography">Drone Videography</option>
                </select>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block mb-2 font-medium">Preferred Date</label>
                    <input type="date" name="date" required
                        class="w-full bg-gray-900 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-500 outline-none">
                </div>
                
                <div>
                    <label class="block mb-2 font-medium">Preferred Time</label>
                    <input type="time" name="time" required
                        class="w-full bg-gray-900 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-500 outline-none">
                </div>
            </div>

            <div>
                <label class="block mb-2 font-medium">Message</label>
                <textarea name="message" rows="4"
                    class="w-full bg-gray-900 rounded-lg px-4 py-3 focus:ring-2 focus:ring-red-500 outline-none"></textarea>
            </div>

            <button type="submit" 
                class="w-full bg-red-600 hover:bg-red-700 py-4 rounded-full font-medium transition-colors">
                Confirm Booking
            </button>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>