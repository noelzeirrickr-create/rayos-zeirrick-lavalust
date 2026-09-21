<!DOCTYPE html>
<html>
<head>
    <title>Product Management</title>
</head>

<body>

<h1>Product Management</h1>

<a href="/products/create">Add Product</a>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

    <?php foreach ($products as $product): ?>

        <tr>
            <td><?= $product['id']; ?></td>
            <td><?= htmlspecialchars($product['product_name']); ?></td>
            <td><?= htmlspecialchars($product['description']); ?></td>
            <td>₱<?= number_format($product['price'], 2); ?></td>
            <td><?= $product['quantity']; ?></td>

            <td>
                <a href="/products/edit/<?= $product['id']; ?>">
                    Edit
                </a>

                <a href="/products/delete/<?= $product['id']; ?>"
                   onclick="return confirm('Delete this product?')">
                    Delete
                </a>
            </td>
        </tr>

    <?php endforeach; ?>

    </tbody>
</table>
<a href="/logout">Logout</a>
</body>
</html>