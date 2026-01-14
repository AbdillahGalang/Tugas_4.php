<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mahasantri</title>
    <style>
        /* Desain Background Elegan */
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 40px 20px;
            color: #fff;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.5);
            width: 100%;
            max-width: 450px;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #2c5364;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 5px;
            color: #444;
        }

        input[type="text"], 
        input[type="password"], 
        input[type="number"], 
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            transition: 0.3s;
        }

        input:focus, select:focus {
            border-color: #2c5364;
            outline: none;
            box-shadow: 0 0 8px rgba(44, 83, 100, 0.2);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #2c5364;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background: #0f2027;
            transform: translateY(-2px);
        }

        /* Styling Hasil */
        .result-box {
            margin-top: 25px;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            max-width: 450px;
            color: #333;
            animation: fadeIn 0.5s ease;
        }

        .status-lulus {
            color: #27ae60;
            font-weight: bold;
            background: #e8f5e9;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .status-gagal {
            color: #c0392b;
            font-weight: bold;
            background: #fce4ec;
            padding: 5px 10px;
            border-radius: 4px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Penilaian Mahasantri</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" required placeholder="Masukkan Username">
        </div>

        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" required placeholder="Masukkan Password">
        </div>

        <div class="form-group">
            <label>Nilai Mahasantri:</label>
            <input type="number" name="nilai" required placeholder="Contoh: 85" min="0" max="100">
        </div>

        <div class="form-group">
            <label>Mata Kuliah:</label>
            <select name="matkul" required>
                <option value="">-- Pilih Mata Kuliah --</option>
                <option value="Informatika">Informatika</option>
                <option value="Informasi">Informasi</option>
            </select>
        </div>

        <button type="submit" name="proses">Proses Nilai</button>
    </form>
</div>

<?php
if (isset($_POST['proses'])) {
    $username = htmlspecialchars($_POST['username']);
    $nilai = $_POST['nilai'];
    $matkul = $_POST['matkul'];
    $kkm = 70;

    // Logika Penentuan Kelulusan
    if ($nilai >= $kkm) {
        $status = "LULUS";
        $classStatus = "status-lulus";
    } else {
        $status = "TIDAK LULUS";
        $classStatus = "status-gagal";
    }

    echo "<div class='result-box'>";
    echo "<h3 style='border-bottom: 2px solid #eee; padding-bottom: 10px;'>Hasil Penilaian</h3>";
    echo "<p><strong>Username:</strong> $username</p>";
    echo "<p><strong>Mata Kuliah:</strong> $matkul</p>";
    echo "<p><strong>Nilai:</strong> $nilai</p>";
    echo "<p><strong>Status:</strong> <span class='$classStatus'>$status</span></p>";
    
    if ($status == "LULUS") {
        echo "<p style='font-size: 0.9em; color: #666;'>Selamat! Pertahankan prestasi Anda.</p>";
    } else {
        echo "<p style='font-size: 0.9em; color: #666;'>Tetap semangat! Silakan ikuti perbaikan/remedial.</p>";
    }
    echo "</div>";
}
?>

</body>
</html>