<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasantri (Method GET)</title>
    <style>
        /* Desain Background dan Font */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
            color: #333;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            color: #1e3c72;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"], select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .radio-group, .checkbox-group {
            margin: 10px 0;
        }

        .radio-group label, .checkbox-group label {
            display: inline;
            font-weight: normal;
            margin-right: 15px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #218838;
        }

        .result-box {
            margin-top: 30px;
            background: #f8f9fa;
            padding: 20px;
            border-left: 5px solid #1e3c72;
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Pendaftaran Mahasantri</h2>
    <form action="" method="GET">
        <div class="form-group">
            <label>Nama Lengkap:</label>
            <input type="text" name="nama" required placeholder="Masukkan nama lengkap">
        </div>

        <div class="form-group">
            <label>NIM:</label>
            <input type="text" name="nim" required placeholder="Masukkan NIM">
        </div>

        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <div class="radio-group">
                <input type="radio" name="jk" value="Laki-laki" id="l" required> <label for="l">Laki-laki</label>
                <input type="radio" name="jk" value="Perempuan" id="p"> <label for="p">Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label>Program Studi:</label>
            <select name="prodi" required>
                <option value="">-- Pilih Prodi --</option>
                <option value="DM">Digital Marketing (DM)</option>
                <option value="PPL">Pengembangan Perangkat Lunak (PPL)</option>
                <option value="Ekonomi">Ekonomi Syariah</option>
            </select>
        </div>

        <div class="form-group">
            <label>Hobi:</label>
            <div class="checkbox-group">
                <input type="checkbox" name="hobi[]" value="Ngoding" id="h1"> <label for="h1">Ngoding</label>
                <input type="checkbox" name="hobi[]" value="Membaca" id="h2"> <label for="h2">Membaca</label>
                <input type="checkbox" name="hobi[]" value="Desain" id="h3"> <label for="h3">Desain</label>
            </div>
        </div>

        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" rows="4" required placeholder="Masukkan alamat lengkap"></textarea>
        </div>

        <button type="submit" name="daftar">Daftar Sekarang</button>
    </form>
</div>

<?php
// Logika PHP menggunakan $_GET
if (isset($_GET['daftar'])) {
    $nama = htmlspecialchars($_GET['nama']);
    $nim = htmlspecialchars($_GET['nim']);
    $jk = $_GET['jk'];
    $prodi = $_GET['prodi'];
    $alamat = nl2br(htmlspecialchars($_GET['alamat']));
    
    // Menangani checkbox hobi
    $hobi = isset($_GET['hobi']) ? implode(", ", $_GET['hobi']) : "Tidak ada hobi yang dipilih";

    echo "<div class='result-box'>";
    echo "<h3>Konfirmasi Pendaftaran (Via GET)</h3>";
    echo "<table border='0' cellpadding='5'>";
    echo "<tr><td><strong>Nama</strong></td><td>: $nama</td></tr>";
    echo "<tr><td><strong>NIM</strong></td><td>: $nim</td></tr>";
    echo "<tr><td><strong>Jenis Kelamin</strong></td><td>: $jk</td></tr>";
    echo "<tr><td><strong>Prodi</strong></td><td>: $prodi</td></tr>";
    echo "<tr><td><strong>Hobi</strong></td><td>: $hobi</td></tr>";
    echo "<tr><td><strong>Alamat</strong></td><td>: $alamat</td></tr>";
    echo "</table>";
    echo "</div>";
}
?>

</body>
</html>