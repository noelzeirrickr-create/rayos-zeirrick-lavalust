<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Add Product</title>
    <style>
        :root {
            --bg: #090909;
            --bg-soft: #121212;
            --panel: #181818;
            --gold: #d4af37;
            --gold-soft: #f4d26a;
            --text: #f5f1e8;
            --muted: #d8c893;
            --border: rgba(212, 175, 55, 0.35);
        }

        * { box-sizing: border-box; }
=======

    <title>Add Product</title>

    <style>
        * {
            box-sizing: border-box;
        }
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1

        body {
            margin: 0;
            min-height: 100vh;
<<<<<<< HEAD
            display: grid;
            place-items: center;
            background:
                radial-gradient(circle at top, rgba(212, 175, 55, 0.12), transparent 30%),
                linear-gradient(135deg, #050505 0%, #101010 100%);
            color: var(--text);
            font-family: Arial, Helvetica, sans-serif;
            padding: 24px;
        }

        .card {
            width: min(100%, 600px);
            background: rgba(20, 20, 20, 0.96);
            border: 1px solid var(--border);
            border-radius: 18px;
            box-shadow: 0 18px 30px rgba(212, 175, 55, 0.1);
            padding: 28px;
        }

        h1 {
            margin: 0 0 18px;
            color: var(--gold-soft);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            font-size: 1.8rem;
        }

        form {
            display: grid;
            gap: 16px;
=======
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
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1
        }

        label {
            display: block;
<<<<<<< HEAD
            margin-bottom: 8px;
            color: var(--gold-soft);
            text-transform: uppercase;
            letter-spacing: 0.06em;
            font-size: 0.75rem;
        }

        input, textarea {
            width: 100%;
            border: 1px solid var(--border);
            background: var(--bg-soft);
            color: var(--text);
            border-radius: 10px;
            padding: 12px 14px;
            resize: vertical;
            outline: none;
        }

        input:focus, textarea:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.15);
=======
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
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1
        }

        .actions {
            display: flex;
<<<<<<< HEAD
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 8px;
        }

        .btn {
            border: none;
            border-radius: 10px;
            padding: 12px 18px;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            cursor: pointer;
            text-decoration: none;
        }

        .btn.primary {
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-soft) 100%);
            color: #111;
        }

        .btn.secondary {
            background: transparent;
            border: 1px solid var(--border);
            color: var(--text);
=======
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
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1
        }
    </style>
</head>

<body>
<<<<<<< HEAD
    <div class="card">
        <h1>Add Product</h1>

        <form method="POST" action="/products/store">
            <div>
                <label>Product Name</label>
                <input type="text" name="product_name" required>
            </div>

            <div>
                <label>Description</label>
                <textarea name="description" rows="5"></textarea>
            </div>

            <div>
                <label>Price</label>
                <input type="number" name="price" step="0.01" required>
            </div>

            <div>
                <label>Quantity</label>
                <input type="number" name="quantity" required>
            </div>

            <div class="actions">
                <button class="btn primary" type="submit">Save Product</button>
                <a href="/products" class="btn secondary">Cancel</a>
            </div>
        </form>
    </div>
=======

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

>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1
</body>
</html>