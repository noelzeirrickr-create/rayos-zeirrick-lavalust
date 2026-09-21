<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <style>
        :root {
            --bg: #080808;
            --bg-soft: #121212;
            --panel: #181818;
            --panel-2: #202020;
            --gold: #d4af37;
            --gold-soft: #f6d66d;
            --text: #f5f1e8;
            --muted: #d8c893;
            --border: rgba(212, 175, 55, 0.28);
            --danger: #ff5a5a;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            background:
                radial-gradient(circle at top, rgba(212, 175, 55, 0.14), transparent 35%),
                linear-gradient(180deg, #050505 0%, #0f0f0f 100%);
            color: var(--text);
            font-family: Arial, Helvetica, sans-serif;
            padding: 32px 20px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            background: rgba(24, 24, 24, 0.96);
            border: 1px solid var(--border);
            border-radius: 18px;
            box-shadow: 0 18px 30px rgba(212, 175, 55, 0.08);
            overflow: hidden;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 14px;
            padding: 20px 26px;
            border-bottom: 1px solid var(--border);
            background: rgba(18, 18, 18, 0.9);
        }

        h1 {
            margin: 0;
            font-size: 1.8rem;
            color: var(--gold-soft);
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .actions {
            display: flex;
            gap: 12px;
            align-items: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 10px;
            border: 1px solid var(--border);
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-soft) 100%);
            color: #111;
            font-weight: 700;
        }

        .btn.secondary {
            background: transparent;
            color: var(--text);
            border: 1px solid var(--border);
        }

        .content {
            padding: 26px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: var(--panel);
            border-radius: 12px;
            overflow: hidden;
        }

        th, td {
            padding: 14px 16px;
            border-bottom: 1px solid var(--border);
            text-align: left;
            vertical-align: top;
        }

        th {
            background: rgba(212, 175, 55, 0.08);
            color: var(--gold-soft);
            text-transform: uppercase;
            letter-spacing: 0.06em;
            font-size: 0.72rem;
        }

        td {
            color: var(--text);
        }

        tbody tr:hover {
            background: rgba(212, 175, 55, 0.04);
        }

        .muted {
            color: var(--muted);
        }

        .actions-row {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .link {
            color: var(--gold-soft);
            text-decoration: none;
            font-weight: 600;
        }

        .link.danger {
            color: #ffb0b0;
        }

        .empty {
            text-align: center;
            color: var(--muted);
            padding: 26px 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="topbar">
            <h1>Product Management</h1>
            <div class="actions">
                <a class="btn" href="/products/create">Add Product</a>
                <a class="btn secondary" href="/logout">Logout</a>
            </div>
        </div>

        <div class="content">
            <table>
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
                    <?php if (!empty($products)): ?>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?= htmlspecialchars((string) $product['id']) ?></td>
                                <td><?= htmlspecialchars($product['product_name']) ?></td>
                                <td><?= htmlspecialchars($product['description']) ?></td>
                                <td>₱<?= number_format((float) $product['price'], 2) ?></td>
                                <td><?= htmlspecialchars((string) $product['quantity']) ?></td>
                                <td>
                                    <div class="actions-row">
                                        <a class="link" href="/products/edit/<?= urlencode((string) $product['id']) ?>">Edit</a>
                                        <a class="link danger" href="/products/delete/<?= urlencode((string) $product['id']) ?>" onclick="return confirm('Delete this product?')">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="empty">No products found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>