<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Kontak</h1>
        <nav>
            <ul>
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Hubungi Kami</h2>
        <form id="contactForm">
            <label for="name">Nama:</label>
            <input type="text" id="name" required>

            <label for="message">Pesan:</label>
            <textarea id="message" required></textarea>

            <button type="submit">Kirim</button>
        </form>
    </main>

    <footer>
        <p>&copy; Project 1 Praktikum Pemrograman Web 2</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>