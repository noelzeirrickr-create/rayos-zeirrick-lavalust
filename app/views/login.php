<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        :root {
            --bg: #0b0b0b;
            --bg-soft: #121212;
            --panel: #1a1a1a;
            --panel-2: #222222;
            --gold: #d4af37;
            --gold-soft: #f3d77a;
            --gold-deep: #9a7b14;
            --text: #f5f1e8;
            --muted: #c7b98c;
            --border: rgba(212, 175, 55, 0.35);
            --danger: #ff5a5a;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background:
                radial-gradient(circle at top, rgba(212, 175, 55, 0.18), transparent 35%),
                linear-gradient(135deg, #050505 0%, #101010 45%, #0a0a0a 100%);
            color: var(--text);
            font-family: Arial, Helvetica, sans-serif;
        }

        .login-card {
            width: min(100%, 430px);
            background: rgba(20, 20, 20, 0.96);
            border: 1px solid var(--border);
            border-radius: 18px;
            box-shadow: 0 0 28px rgba(212, 175, 55, 0.12);
            padding: 32px 28px;
        }

        h1 {
            margin: 0 0 8px;
            font-size: 2rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--gold-soft);
            text-align: center;
        }

        .subtitle {
            margin: 0 0 24px;
            text-align: center;
            color: var(--muted);
            font-size: 0.92rem;
        }

        .alert {
            background: rgba(255, 90, 90, 0.08);
            border: 1px solid rgba(255, 90, 90, 0.35);
            color: #ffb3b3;
            padding: 10px 12px;
            border-radius: 10px;
            margin-bottom: 18px;
        }

        form {
            display: grid;
            gap: 16px;
        }

        label {
            font-size: 0.82rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--gold-soft);
        }

        input {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid var(--border);
            background: var(--bg-soft);
            color: var(--text);
            outline: none;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        input:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.15);
        }

        button {
            border: none;
            border-radius: 10px;
            padding: 13px 18px;
            font-size: 0.96rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            background: linear-gradient(135deg, var(--gold) 0%, var(--gold-soft) 100%);
            color: #111;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 10px 24px rgba(212, 175, 55, 0.25);
        }

        button:hover {
            transform: translateY(-1px);
            box-shadow: 0 14px 26px rgba(212, 175, 55, 0.35);
        }
    </style>
</head>

<body>
    <div class="login-card">
        <h1>Login</h1>
        <p class="subtitle">Welcome back</p>

        <?php if (!empty($error)): ?>
            <div class="alert">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="/login">
            <div>
                <label for="username">Username</label>
                <input id="username" type="text" name="username" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>