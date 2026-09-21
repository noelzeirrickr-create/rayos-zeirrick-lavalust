<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        body {
            margin: 0;
            min-height: 100vh;
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
        }

        label {
            display: block;
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
        }

        .actions {
            display: flex;
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
        }
    </style>
</head>

<body>
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
</body>
</html>