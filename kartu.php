<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $pesan = htmlspecialchars($_POST['pesan']);
    $warna = htmlspecialchars($_POST['warna']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Ucapan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: <?php echo $warna; ?>;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2em;
            color: #333;
        }

        .button {
            background-color: #4a90e2;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .button:hover {
            background-color: #357abd;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>Untuk <?php echo $nama; ?></h1>
        <p><?php echo nl2br($pesan); ?></p>
        <a href="index.php" class="button">Buat Lagi</a>
    </div>
</body>

</html>