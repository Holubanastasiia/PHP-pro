<?php
/**
 * @var array $users
 */
const DEFAULT_IMAGE = 'images/default-image.jpg'
?>

<?php include 'partials/head.php' ?>

<?php include 'partials/menu.php' ?>

<div class="container">
    <h1>Продукты</h1>
    <div class="col py-2">
        <a href="products/add">Добавить новый продукт</a>
    </div>
    <div class="row">
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <div class="card" style="width: 18rem; margin: 10px;">
                    <img src="<?php echo $product['image'] ?? DEFAULT_IMAGE ?>" class="card-img-top"
                         alt="<?php echo $product['name'] ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/products/view/id/<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a>
                        </h5>
                        <p class="card-text">
                            <?php echo $product['description'] ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            Нет продуктов
        <?php endif; ?>
    </div>
</div>

<?php include 'partials/footer.php';
