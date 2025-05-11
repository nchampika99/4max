<?php
$pageTitle = "Products";
include 'includes/header.php';
require_once 'includes/db_connect.php';

try {
    $stmt = $pdo->query("SELECT * FROM products WHERE status = 'Available'");
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Error loading products: " . $e->getMessage());
}
?>

<section class="container mx-auto px-6 py-20" data-aos="fade-up">
    <h2 class="text-4xl font-bold mb-12 text-center">Equipment & Gear</h2>
    
    <!-- Product Filters -->
    <div class="flex flex-wrap gap-4 mb-12 justify-center">
        <button class="filter-btn px-6 py-2 rounded-full bg-red-600" data-filter="all">All</button>
        <button class="filter-btn px-6 py-2 rounded-full bg-gray-800 hover:bg-gray-700" data-filter="Camera">Cameras</button>
        <button class="filter-btn px-6 py-2 rounded-full bg-gray-800 hover:bg-gray-700" data-filter="Lighting">Lighting</button>
        <button class="filter-btn px-6 py-2 rounded-full bg-gray-800 hover:bg-gray-700" data-filter="Audio">Audio</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php foreach ($products as $product): ?>
        <div class="product-item bg-gray-900 rounded-xl p-6 transition-all hover:shadow-2xl hover:shadow-red-900/20" 
             data-category="<?= htmlspecialchars($product['category']) ?>">
            <div class="relative overflow-hidden rounded-xl mb-4 h-64">
                <img src="images/products/<?= htmlspecialchars($product['image_filename']) ?>" 
                     alt="<?= htmlspecialchars($product['name']) ?>" 
                     class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                <?php if($product['type'] === 'Rent'): ?>
                <div class="absolute top-4 right-4 bg-red-600 text-xs px-3 py-1 rounded-full">RENTAL</div>
                <?php endif; ?>
            </div>
            
            <h3 class="text-xl font-bold mb-2"><?= htmlspecialchars($product['name']) ?></h3>
            <p class="text-gray-400 mb-4"><?= htmlspecialchars($product['description']) ?></p>
            
            <div class="flex justify-between items-center">
                <div>
                    <span class="text-red-500 text-2xl font-bold">Rs. <?= number_format($product['price'], 2) ?></span>
                    <?php if($product['type'] === 'Rent'): ?>
                        <span class="text-sm text-gray-500">/ <?= htmlspecialchars($product['price_period']) ?></span>
                    <?php endif; ?>
                </div>
                <a href="https://wa.me/94766237857?text=<?= urlencode("Interested in: {$product['name']} (Price: Rs.{$product['price']})") ?>" 
                   class="bg-green-600 text-white px-4 py-2 rounded-full flex items-center gap-2 hover:bg-green-700 transition-colors">
                    <i class="fab fa-whatsapp"></i> Inquire
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<script>
// Product Filtering
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const filter = btn.dataset.filter;
        document.querySelectorAll('.product-item').forEach(item => {
            item.style.display = (filter === 'all' || item.dataset.category === filter) ? 'block' : 'none';
        });
        
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('bg-red-600'));
        btn.classList.add('bg-red-600');
    });
});
</script>

<?php include 'includes/footer.php'; ?>