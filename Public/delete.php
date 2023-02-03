<?php
$pdo = require_once '../DBConn.php';

if (isset($_POST['checkedProducts'])) {
    for ($i = 0; $i < count($_POST['checkedProducts']); $i++) {
        $delProducts = $_POST['checkedProducts'][$i];
        $statement = $pdo->prepare("DELETE FROM products WHERE id = '$delProducts'");
        $statement->execute();
        // header("Location: index.php");
    }
}