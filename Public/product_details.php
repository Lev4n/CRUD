<?php

if (!empty($product['weight'])) {
    echo "Weight: " . $product['weight'] . "KG";
} else if (!empty($product['size'])) {
    echo "Size: " . $product['size'] . "MB";
} else if (!empty($product['height'] && $product['width'] && $product['length'])) {
    echo "Dimension: " . $product['height'] . "x" . $product['width'] . "x" . $product['length'];
} else {
}
