<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1c</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 20px;
            
        }

        .row {
            display: flex;
        }

        .box {
            width: 60px;
            height: 60px;
            background-color: #fa8071;
            /* Warna merah */
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            border: 3px solid black;
            /* Border hitam */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="box">1</div>
        </div>
        <div class="row">
            <div class="box">2</div>
            <div class="box">3</div>
        </div>
        <div class="row">
            <div class="box">3</div>
            <div class="box">3</div>
            <div class="box">3</div>
        </div>
    </div>
</body>

</html>