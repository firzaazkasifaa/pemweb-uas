<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kritik dan Saran</title>
</head>
<body>
    <h1>Form Kritik dan Saran</h1>
    <form action="submit_feedback.php" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="pesan">Kritik dan Saran:</label><br>
        <textarea id="pesan" name="pesan" rows="5" required></textarea><br><br>
        
        <button type="submit">Kirim</button>
    </form>
</body>
</html>

