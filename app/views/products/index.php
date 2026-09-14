<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Zei's Sari Sari Store</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #0d0d0d;
            color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        /* NAVIGATION */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 7%;
            background: #000000;
            color: #d4af37;
            border-bottom: 2px solid #d4af37;
            box-shadow: 0 3px 15px rgba(212, 175, 55, 0.2);
        }

        nav h2 {
            margin: 0;
            color: #d4af37;
            letter-spacing: 1px;
        }

        nav div {
            display: flex;
            align-items: center;
            gap: 15px;
            color: #ffffff;
        }

        /* MAIN CONTAINER */
        .container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        /* PAGE HEADER */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .page-header h1 {
            margin-bottom: 8px;
            color: #d4af37;
            font-size: 32px;
        }

        .page-header p {
            margin: 0;
            color: #b3b3b3;
        }

        /* CARD */
        .card {
            overflow-x: auto;
            padding: 25px;
            background: #171717;
            border: 1px solid #333333;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 14px;
            border-bottom: 1px solid #333333;
            text-align: left;
        }

        th {
            background: #000000;
            color: #d4af37;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
        }

        td {
            color: #eeeeee;
        }

        tbody tr {
            transition: 0.2s ease;
        }

        tbody tr:hover {
            background: #222222;
        }

        /* BUTTONS */
        .btn {
            display: inline-block;
            padding: 10px 16px;
            border: none;
            border-radius: 7px;
            background: #d4af37;
            color: #000000;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .btn:hover {
            background: #f5d76e;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(212, 175, 55, 0.3);
        }

        /* EDIT BUTTON */
        .edit {
            background: #d4af37;
            color: #000000;
        }

        .edit:hover {
            background: #f5d76e;
        }

       .delete {
    background: #000000;
    color: #d4af37;
    border: 1px solid #d4af37;
}

.delete:hover {
    background: #000000;
    color: #ffd700;
    border-color: #ffd700;
    box-shadow:
        0 0 8px #d4af37,
        0 0 16px rgba(212, 175, 55, 0.7),
        0 0 25px rgba(212, 175, 55, 0.4);
    transform: translateY(-1px);
}
        /* LOGOUT BUTTON */
        .logout {
            background: transparent;
            color: #d4af37;
            border: 1px solid #d4af37;
        }

        .logout:hover {
            background: #d4af37;
            color: #000000;
        }

        /* ACTION BUTTONS */
        .actions {
            display: flex;
            gap: 7px;
        }

        .actions form {
            margin: 0;
        }

        /* ALERTS */
        .alert {
            margin-bottom: 18px;
            padding: 13px 15px;
            border-radius: 7px;
            font-weight: bold;
        }

        .success {
            background: #173d20;
            color: #7ee787;
            border: 1px solid #2d6a3b;
        }

        .error {
            background: #441313;
            color: #ff7b7b;
            border: 1px solid #7f1d1d;
        }

        /* EMPTY MESSAGE */
        .empty {
            padding: 35px;
            text-align: center;
            color: #999999;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {

            nav {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }

            nav div {
                flex-direction: column;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 18px;
            }

            .actions {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <nav>
        <h2>✦ Zei's Sari Sari Store</h2>

        <div>
            <span>
                Welcome,
                <strong style="color:#d4af37;">
                    <?= htmlspecialchars($username ?? 'User') ?>
                </strong>
            </span>

            <a
                class="btn logout"
                href="<?= site_url('logout') ?>"
            >
                Logout
            </a>
        </div>
    </nav>

    <main class="container">

        <div class="page-header">

            <div>
                <h1>Products</h1>
                <p>Manage the available products in your store.</p>
            </div>

            <a
                class="btn"
                href="<?= site_url('products/create') ?>"
            >
                + Add Product
            </a>

        </div>

        <?php if (!empty($success)): ?>

            <div class="alert success">
                <?= htmlspecialchars($success) ?>
            </div>

        <?php endif; ?>


        <?php if (!empty($error)): ?>

            <div class="alert error">
                <?= htmlspecialchars($error) ?>
            </div>

        <?php endif; ?>


        <section class="card">

            <?php if (empty($products)): ?>

                <div class="empty">
                    No products found.
                </div>

            <?php else: ?>

                <table>

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($products as $product): ?>

                            <tr>

                                <td>
                                    #<?= (int) $product['id'] ?>
                                </td>

                                <td>
                                    <strong style="color:#d4af37;">
                                        <?= htmlspecialchars(
                                            $product['product_name']
                                        ) ?>
                                    </strong>
                                </td>

                                <td>
                                    <?= htmlspecialchars(
                                        $product['description']
                                    ) ?>
                                </td>

                                <td>
                                    <strong>
                                        ₱<?= number_format(
                                            (float) $product['price'],
                                            2
                                        ) ?>
                                    </strong>
                                </td>

                                <td>
                                    <?= (int) $product['quantity'] ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars(
                                        $product['created_at']
                                    ) ?>
                                </td>

                                <td>

                                    <div class="actions">

                                        <a
                                            class="btn edit"
                                            href="<?= site_url(
                                                'products/edit/' .
                                                $product['id']
                                            ) ?>"
                                        >
                                            Edit
                                        </a>

                                        <form
                                            method="POST"
                                            action="<?= site_url(
                                                'products/delete/' .
                                                $product['id']
                                            ) ?>"
                                            onsubmit="return confirm(
                                                'Are you sure you want to delete this product?'
                                            );"
                                        >

                                            <button
                                                class="btn delete"
                                                type="submit"
                                            >
                                                Delete
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            <?php endif; ?>

        </section>

    </main>

</body>
</html>