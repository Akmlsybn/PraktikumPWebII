<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <title>Menu Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('perpus.jpg') 
            no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .menu-card {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .menu-card h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .menu-card .btn {
            margin-bottom: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="menu-card">
        <h1>Menu Buku Perpustakaan</h1>
        <a href="Member.php" class="btn btn-primary w-100">Member</a>
        <a href="Buku.php" class="btn btn-primary w-100">Buku</a>
        <a href="Peminjaman.php" class="btn btn-primary w-100">Peminjaman</a>
    </div>
</body>
</html>