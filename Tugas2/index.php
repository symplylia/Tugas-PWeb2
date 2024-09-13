<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        /* Navbar styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-logo {
            font-size: 24px;
            color: white;
            font-weight: bold;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 1px;
            transition: color 0.3s, background 0.3s;
            border-radius: 30px;
        }

        .navbar a:hover {
            background-color: #04AA6D;
            color: white;
        }

        .navbar a.active {
            background-color: #04AA6D;
            color: white;
        }

        /* Content styling */
        .content {
            text-align: center;
            padding: 50px;
            background-color: #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin: 30px 10%;
            border-radius: 15px;
        }

        h1 {
            color: #333;
            font-size: 42px;
        }

        p {
            font-size: 18px;
            color: #555;
            line-height: 1.5;
        }

        /* Button styling */
        .button {
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            color: white;
            background-color: #04AA6D;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin: 10px;
            display: inline-block;
        }

        .button:hover {
            background-color: #038857;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-logo">My Website</div>
        <a class="active" href="index.php">Home</a>
        <a href="mhs_TiB.php">Mahasiswa TiB</a>
        <a href="students.php">Students</a>
        <a href="address.php">Address</a>
        <a href="khusus.php">Khusus</a>
    </div>

    <!-- Main content -->
    <div class="content">
        <h1>Welcome to the Homepage</h1>
        <p>Explore various features to display Student Data.</p>

        <a href="mhs_TiB.php" class="button">Mahasiswa TiB</a>
        <a href="students.php" class="button">Students</a>
        <a href="address.php" class="button">Address</a>
        <a href="khusus.php" class="button">Khusus</a>
    </div>

</body>
</html>
