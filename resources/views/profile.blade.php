<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WLTugas2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #8B0000;
        }

        .profile-container {
            text-align: left;
            background-color: #00BFFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-container img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
            display: block;
            margin: 0 auto;
}

        .profile-container .info {
            background-color: #ddd;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="profile-container">
    <img src="{{ asset('assets/img/GTR R35.jpeg') }}" alt="mobil">
        <div class="info">
            <strong>Nama:</strong> <?= $nama ?>
        </div>
        <div class="info">
            <strong>Kelas:</strong> <?= $kelas ?>
        </div>
        <div class="info">
            <strong>NPM:</strong> <?= $npm ?>
        </div>
    </div>
</body>

</html>
