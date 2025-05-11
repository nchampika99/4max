<?php
$pageTitle = "Services";
include 'includes/header.php';
require_once 'includes/db_connect.php';

try {
    $services = $pdo->query("SELECT * FROM services")->fetchAll();
    $portfolio = $pdo->query("SELECT * FROM portfolio_items LIMIT 6")->fetchAll();
} catch(PDOException $e) {
    die("Error loading content: " . $e->getMessage());
}
?>

<section class="container mx-auto px-6 py-20" data-aos="fade-up">
    <h2 class="text-4xl font-bold mb-16 text-center">Our Creative Services</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
        <?php foreach ($services as $service): ?>
        <div class="service-card bg-gray-900 rounded-xl p-8 hover:shadow-2xl hover:shadow-red-900/20 transition-all">
            <div class="text-red-500 text-4xl mb-4">
                <i class="<?= htmlspecialchars($service['icon_class']) ?>"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4"><?= htmlspecialchars($service['title']) ?></h3>
            <p class="text-gray-400 mb-4"><?= htmlspecialchars($service['description']) ?></p>
            <ul class="text-gray-500 text-sm">
                <?php foreach (json_decode($service['features']) as $feature): ?>
                <li class="flex items-center gap-2 mb-2">
                    <i class="fas fa-check text-red-500 text-xs"></i>
                    <?= htmlspecialchars($feature) ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Portfolio section remains same -->
</section>

<?php include 'includes/footer.php'; ?>