<?php
$error = null;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $error = require_once __DIR__ . "/../src/auth.php";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bangu Shopping</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #ff9999;
            --main-red: #cc0000;
            --white: #ffffff;
            --black: #000000;
            --green: #00AA44;
            --green-hover: #008833;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }

        body {
            background-color: var(--white);
            color: var(--black);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background-color: var(--bg-color);
            border: 2px solid var(--black);
            border-radius: 20px;
            padding: 3rem 2rem;
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-shadow: 10px 10px 0px var(--black);
        }

        .logo-container {
            margin-bottom: 2rem;
        }

        .logo-container img {
            height: 80px;
        }

        h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--main-red);
            margin-bottom: 0.5rem;
        }

        p {
            font-size: 1rem;
            margin-bottom: 2rem;
            font-weight: 400;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }

        .input-group {
            text-align: left;
        }

        .input-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .input-group input {
            width: 100%;
            padding: 0.8rem 1.2rem;
            border-radius: 30px;
            border: 2px solid var(--black);
            outline: none;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .input-group input:focus {
            border-color: var(--green);
            box-shadow: 0 0 0 4px rgba(0, 170, 68, 0.1);
        }

        .login-btn {
            background-color: var(--green);
            color: var(--white);
            border: 2px solid var(--black);
            padding: 0.8rem;
            border-radius: 30px;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-top: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .login-btn:hover {
            background-color: var(--green-hover);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 170, 68, 0.3);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .footer-links {
            margin-top: 1.5rem;
            font-size: 0.9rem;
        }

        .footer-links a {
            color: var(--black);
            text-decoration: none;
            font-weight: 600;
        }

        .footer-links a:hover {
            text-decoration: underline;
            color: var(--main-red);
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-container {
                margin: 1rem;
                padding: 2rem 1.5rem;
                box-shadow: 5px 5px 0px var(--black);
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="logo-container">
            <a href="/index.php">
                <img src="./assets/bangu.png" alt="Bangu Shopping">
            </a>
        </div>
        
        <h2>LOGIN</h2>
        <p>Acesse sua conta Bangu</p>
        <?php
        if($error!=null){
            echo '<p style="color:red; font-weight:600; margin-bottom:15px;">'.htmlspecialchars($error).'</p>';
        }
        ?>
        <form class="login-form" method="POST">
            <div class="input-group">
                <label for="username">User</label>
                <input type="text" id="username" name="username" placeholder="Seu usuário..." required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Sua senha..." required>
            </div>

            <button type="submit" class="login-btn">Entrar</button>
        </form>

        <div class="footer-links">
            <p><a href="/index.php">← Voltar para o início</a></p>
        </div>
    </div>

</body>
</html>
