<?php
$flag = require_once __DIR__ . "/../src/verify.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Bangu Shopping</title>
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
            --sidebar-width: 260px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }

        body {
            background-color: #f4f4f4;
            color: var(--black);
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            background-color: var(--bg-color);
            border-right: 2px solid var(--black);
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            z-index: 100;
        }

        .sidebar-header {
            padding: 2rem;
            text-align: center;
            border-bottom: 2px solid var(--black);
        }

        .sidebar-header img {
            width: 100%;
            max-width: 150px;
        }

        .nav-links {
            padding: 1rem 0;
            flex: 1;
        }

        .nav-item {
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            text-decoration: none;
            color: var(--black);
            font-weight: 600;
            transition: all 0.2s;
            border-left: 5px solid transparent;
        }

        .nav-item:hover, .nav-item.active {
            background-color: rgba(255, 255, 255, 0.3);
            border-left: 5px solid var(--main-red);
        }

        .sidebar-footer {
            padding: 1rem 2rem;
            border-top: 2px solid var(--black);
        }

        .logout-btn {
            color: var(--main-red);
            text-decoration: none;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            flex: 1;
            padding: 2rem;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .avatar {
            width: 40px;
            height: 40px;
            background-color: var(--green);
            border-radius: 50%;
            border: 2px solid var(--black);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background-color: var(--white);
            border: 2px solid var(--black);
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 4px 4px 0px var(--black);
            transition: transform 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-2px);
        }

        .stat-card h3 {
            font-size: 0.9rem;
            color: #666;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }

        .stat-card .value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--green);
        }

        /* Table Section */
        .table-container {
            background-color: var(--white);
            border: 2px solid var(--black);
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 6px 6px 0px var(--black);
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th {
            padding: 1rem;
            border-bottom: 2px solid #eee;
            color: #666;
            font-weight: 600;
            font-size: 0.9rem;
        }

        td {
            padding: 1rem;
            border-bottom: 1px solid #eee;
            font-weight: 500;
        }

        .role-badge {
            background-color: #eee;
            padding: 0.2rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .role-badge.admin {
            background-color: var(--bg-color);
            color: var(--main-red);
        }

        .action-btn {
            background: none;
            border: none;
            color: var(--green);
            font-weight: 700;
            cursor: pointer;
            text-decoration: underline;
        }

        /* User Add Form Styles */
        .table-header form {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .table-header form input {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            border: 2px solid var(--black);
            outline: none;
            font-size: 0.85rem;
            width: 150px;
            transition: all 0.2s;
        }

        .table-header form input:focus {
            border-color: var(--green);
        }

        .table-header form button {
            background-color: var(--black);
            color: var(--white);
            border: 2px solid var(--black);
            padding: 0.5rem 1.2rem;
            border-radius: 20px;
            font-weight: 700;
            cursor: pointer;
            font-size: 0.85rem;
            transition: all 0.2s;
        }

        .table-header form button:hover {
            background-color: var(--green);
            border-color: var(--green);
            transform: translateY(-1px);
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }
            .sidebar-header img, .nav-item span, .sidebar-footer span {
                display: none;
            }
            .main-content {
                margin-left: 70px;
            }
            .nav-item {
                padding: 1rem;
                justify-content: center;
            }
        }
    </style>
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-header">
            <a href="/index.php">
                <img src="./assets/bangu.png" alt="Bangu Shopping">
            </a>
        </div>
        
        <nav class="nav-links">
            <a href="#" class="nav-item active">
                <span>📊 Dashboard</span>
            </a>
            <a href="#" class="nav-item">
                <span>👥 Users</span>
            </a>
            <a href="#" class="nav-item">
                <span>🎭 Events</span>
            </a>
            <a href="#" class="nav-item">
                <span>🎬 Movies</span>
            </a>
            <a href="#" class="nav-item">
                <span>⚙️ Configs</span>
            </a>
        </nav>

        <div class="sidebar-footer">
            <a href="/login.php" class="logout-btn">
                <span>🚪 Logout</span>
            </a>
        </div>
    </aside>

    <main class="main-content">
        <header>
            <h1>Admin Dashboard</h1>
            <?php
            echo '<span style="color:red; font-weight:600; margin-bottom:15px;">'.$flag.'</span>';
            ?>
            <div class="user-info">
                <?php
                echo '<span>Welcome, <strong>'.$username.'</strong></span>';
                ?>
            </div>
        </header>

        <div class="stats-grid">
            <div class="stat-card">
                <h3>Sales of today</h3>
                <div class="value">R$ 1.250</div>
            </div>
            <div class="stat-card">
                <h3>Tickets CineBangu</h3>
                <div class="value">85</div>
            </div>
        </div>

        <div class="table-container">
            <div class="table-header">
                <h2>User Management</h2>
                
                <form action="" method="get">
                    <input type="hidden" name="action" value="add">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit">Add User</button>
                </form>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                    $useradded = require_once __DIR__ . "/../src/usermanager.php";
                    if($useradded!=""){
                        echo '<p>'.$useradded.'</p>';
                    }
                   ?>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>
