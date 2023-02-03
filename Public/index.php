<?php

$pdo = require_once '../DBConn.php';

$statement = $pdo->prepare('SELECT * FROM products');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<?php require_once '../views/partials/header.php'; ?>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a href="" class="navbar-brand text-center">Product List</a>
            <div>
                <a href="create.php" type="button" class="btn btn-success">ADD</a>
                <a href="/public/delete.php"><button type="submit" name="delete" class="btn btn-danger" form="product_form">MASS DELETE</button></a>
            </div>
        </div>
    </nav>
    <hr>
    </div>
    <form method="POST" id="product_form">
        <?php foreach ($products as $product) { ?>
            <div class="card text-center border-secondary col-4 ms-3 d-inline-block" style="max-width: 18rem;">
                <div class="card-body text-dark">
                    <div class="form-check">
                        <input type="checkbox" name="checkedProducts" class="delete-checkbox form-check-input" value="<?php echo $product['id'] ?>">
                    </div>
                    <p id="sku"><?php echo $product['sku'] ?></p>
                    <p id="name"><?php echo $product['name'] ?></p>
                    <p id="price"><?php echo $product['price'], " $" ?></p>
                    <p><?php require("product_details.php") ?></p>
                </div>
            </div>
        <?php } ?>
    </form>



</body>
<?php require_once '../views/partials/footer.php' ?>

</html>


