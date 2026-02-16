<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangu Shopping</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #ff9999;
            --main-red: #cc0000;
            --white: #ffffff;
            --black: #000000;
            --card-bg: rgba(255, 255, 255, 0.9);
            --input-bg: #ffffff;
            --text-secondary: #555555;
            --header-bg: #ff9999;
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
        }

        /* Header Styles */
        header {
            background-color: var(--header-bg);
            padding: 1rem 5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 2px solid rgba(0,0,0,0.05);
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            height: 40px;
            margin-right: 10px;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: #006633;
            text-transform: uppercase;
            line-height: 1;
        }

        .logo-text span {
            display: block;
            color: #003366;
            font-size: 0.9rem;
            letter-spacing: 2px;
        }

        .search-bar {
            flex: 1;
            margin: 0 5%;
        }

        .search-bar form {
            display: flex;
            position: relative;
            align-items: center;
        }

        .search-bar input {
            width: 100%;
            padding: 0.7rem 1.5rem;
            padding-right: 100px;
            border-radius: 30px;
            border: 2px solid var(--black);
            outline: none;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .search-bar input:focus {
            border-color: #00AA44;
            box-shadow: 0 0 0 4px rgba(0, 170, 68, 0.1);
        }

        .search-bar button {
            position: absolute;
            right: 5px;
            background-color: #00AA44;
            color: var(--white);
            border: none;
            padding: 0.5rem 1.2rem;
            border-radius: 25px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s ease;
            font-size: 0.8rem;
            text-transform: uppercase;
        }

        .search-bar button:hover {
            background-color: #008833;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 170, 68, 0.4);
        }

        .search-bar button:active {
            transform: translateY(0);
            box-shadow: 0 2px 6px rgba(0, 170, 68, 0.4);
        }

        .auth-links {
            display: flex;
            gap: 1.5rem;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .auth-links a {
            text-decoration: none;
            color: var(--black);
            transition: color 0.3s;
        }

        .auth-links a:hover {
            color: var(--main-red);
        }

        /* Container Styles */
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        section {
            background-color: var(--bg-color);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            border: 2px solid var(--black);
            text-align: center;
        }

        h2 {
            font-size: 3rem;
            font-weight: 700;
            color: var(--main-red);
            margin-bottom: 0.2rem;
            text-transform: none;
        }

        .section-desc {
            font-size: 1rem;
            color: var(--black);
            margin-bottom: 2rem;
        }

        /* Grid Layouts */
        .grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
        }

        /* Card Styles */
        .card {
            background-color: var(--white);
            border: 2px solid var(--black);
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .card-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-bottom: 2px solid var(--black);
        }

        .card-content {
            padding: 1rem;
        }

        .card-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .card-info {
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        /* Movie specific */
        .movie-card {
            padding: 1.5rem;
        }

        .movie-img {
            width: 100%;
            height: 320px;
            border-radius: 12px;
            object-fit: cover;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
        }

        .movie-title {
            font-size: 1.5rem;
            font-weight: 600;
        }

        /* Newsletter Styles */
        .newsletter-form {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .newsletter-form input {
            width: 100%;
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            border: 2px solid var(--black);
            outline: none;
            font-size: 1rem;
        }

        /* Fake Image Placeholders */
        .img-placeholder {
            background-color: #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ccc;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            h2 { font-size: 2rem; }
            header { flex-wrap: wrap; }
            .search-bar { order: 3; margin: 1rem 0 0 0; width: 100%; }
        }
    </style>
</head>
<body>

    <header>
        <div class="logo-container">
            <img src="./assets/bangu.png" alt="Bangu Shopping" style="height: 60px;">
        </div>
        <div class="search-bar">
            <form method=get>
            <input type="text" placeholder="Search..." name="q">
            <button type="submit">Search</button>
            </form>
        </div>
        <div class="auth-links">
            <a href="/login.php">Login</a>
        </div>
    </header>

    <div class="container">
        
        <!-- Bangu Events Section -->
        <section id="events">
            <h2>Bangu Events</h2>
            <p class="section-desc">Search for more events</p>
            
            <div class="grid-3">
                <?php
                require_once __DIR__ . "/../src/search.php";
                ?>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section id="newsletter">
            <h2>Bangu Newsletter</h2>
            <p class="section-desc">Subscribe to be updated about events in Bangu</p>
            
            <form class="newsletter-form" onsubmit="return false;">
                <input type="email" placeholder="Email">
                <input type="text" placeholder="Name">
            </form>
        </section>

        <!-- CineBangu Section -->
        <section id="cinebangu">
            <h2>CineBangu</h2>
            <p class="section-desc">Movies at Bangu</p>
            
            <div class="grid-4">
                <?php
                require_once __DIR__ . "/../src/film.php";
                ?>
            </div>
        </section>

    </div>

</body>
</html>
