<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Koneksi ke database
    $host = "localhost";  // Server database
    $user = "root";       // Username database
    $pass = "";           // Password database (kosong di XAMPP)
    $dbname = "jombang";  // Nama database

    try {
        // Membuat koneksi menggunakan PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Menyimpan data ke tabel `feedback`
        $sql = "INSERT INTO feedback (nama, email, pesan) VALUES (:nama, :email, :pesan)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nama' => $nama,
            ':email' => $email,
            ':pesan' => $pesan
        ]);

        echo "Terima kasih atas kritik dan saran Anda!";
    } catch (PDOException $e) {
        echo "Gagal menyimpan data: " . $e->getMessage();
    }
}
?>


