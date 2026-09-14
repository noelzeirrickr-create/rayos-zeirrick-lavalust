<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Product</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            padding: 40px 20px;
            background: #0d0d0d;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }

        .card {
            max-width: 650px;
            margin: auto;
            padding: 35px;
            background: #171717;
            border: 1px solid #d4af37;
            border-radius: 14px;

            box-shadow:
                0 10px 30px rgba(0, 0, 0, 0.6),
                0 0 15px rgba(212, 175, 55, 0.12);
        }

        h1 {
            margin-top: 0;
            margin-bottom: 30px;
            color: #d4af37;
            text-align: center;
            letter-spacing: 1px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            color: #d4af37;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;

            background: #0d0d0d;
            color: #ffffff;

            border: 1px solid #555555;
            border-radius: 8px;

            outline: none;

            transition: 0.3s ease;
        }

        input:focus,
        textarea:focus {
            border-color: #d4af37;

            box-shadow:
                0 0 6px rgba(212, 175, 55, 0.7),
                0 0 15px rgba(212, 175, 55, 0.25);
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .actions {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .btn {
            padding: 11px 18px;

            border: 1px solid #d4af37;
            border-radius: 8px;

            background: #000000;
            color: #d4af37;

            font-weight: bold;
            text-decoration: none;
            cursor: pointer;

            transition: 0.3s ease;
        }

        .btn:hover {
            background: #d4af37;
            color: #000000;

            box-shadow:
                0 0 8px #d4af37,
                0 0 18px rgba(212, 175, 55, 0.6),
                0 0 28px rgba(212, 175, 55, 0.3);

            transform: translateY(-1px);
        }

        .cancel {
            background: #000000;
            color: #ffffff;
            border: 1px solid #555555;
        }

        .cancel:hover {
            background: #111111;
            color: #d4af37;
            border-color: #d4af37;

            box-shadow:
                0 0 8px rgba(212, 175, 55, 0.7),
                0 0 18px rgba(212, 175, 55, 0.4);
        }

        .error {
            margin-bottom: 20px;
            padding: 12px;

            background: #2a1010;
            color: #ff7777;

            border: 1px solid #8b0000;
            border-radius: 8px;
        }

        @media (max-width: 600px) {

            .row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <main class="card">

        <h1>Add Product</h1>

        <?php if (!empty($error)): ?>

            <div class="error">
                <?= htmlspecialchars($error) ?>
            </div>

        <?php endif; ?>


        <form
            method="POST"
            action="<?= site_url('products/store') ?>"
        >

            <div class="form-group">

                <label>Product Name</label>

                <input
                    type="text"
                    name="product_name"
                    maxlength="100"
                    placeholder="Enter product name"
                    required
                >

            </div>


            <div class="form-group">

                <label>Description</label>

                <textarea
                    name="description"
                    placeholder="Enter product description"
                    required
                ></textarea>

            </div>


            <div class="row">

                <div class="form-group">

                    <label>Price</label>

                    <input
                        type="number"
                        name="price"
                        min="0"
                        step="0.01"
                        placeholder="0.00"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>Quantity</label>

                    <input
                        type="number"
                        name="quantity"
                        min="0"
                        step="1"
                        placeholder="0"
                        required
                    >

                </div>

            </div>


            <div class="actions">

                <button
                    class="btn"
                    type="submit"
                >
                    Save Product
                </button>


                <a
                    class="btn cancel"
                    href="<?= site_url('products') ?>"
                >
                    Cancel
                </a>

            </div>

        </form>

    </main>

</body>
</html>