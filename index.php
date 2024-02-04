<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HZ</title>
    <style>
        /* Style for the body */
        body {
            background-color: white;
        }

        /* Style for the header */
        .header {
            text-align: center;
        }

        /* Style for the navigation menu */
        .navigasi {
            list-style-type: none;
            padding: 18px 0;
            text-align: center;
            background-color: #333;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .navigasi li {
            display: inline-block;
            margin-right: 20px;
        }

        .navigasi a {
            text-decoration: none;
            color: white;
            padding: 12px 25px;
            border: 1px solid #333;
            transition: all 0.3s;
            background-color: #333;
        }

        .navigasi a:hover {
            background-color: #555;
            border: 1px solid #555;
        }

        /* Style for the left and right images */
        .gambar-kiri, .gambar-kanan {
            width: 50%;
            float: left;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .gambar-kiri img, .gambar-kanan img {
            max-width: 73%;
            height: auto;
        }

        .gambar-kiri p, .gambar-kanan p {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>	

    <!-- Header with a clickable image -->
    <div class="header">
        <a href="login.php"><img src="gbr1.png" style="height: 170px; width: 1230px;"></a>
    </div>

    <!-- Navigation menu -->
    <ul class="navigasi">
        <li><a href="nike.php">NIKE</a></li>
        <li><a href="aj.php">JORDAN</a></li>
        <li><a href="adidas.php">ADIDAS</a></li>
        <li><a href="nb.php">NB</a></li>
        <li><a href="puma.php">PUMA</a></li>
    </ul>

    <!-- Left image and description -->
    <div class="gambar-kiri">
        <img src="gbr2.png" alt="Gambar Kiri">
        <p><strong>Air Force 1 'Special Milano'</strong></p>
    </div>
    
    <!-- Right image and description -->
    <div class="gambar-kanan">
        <img src="image 4.png" alt="Gambar Kanan">
        <p><strong>Air Force 1 '07'</strong></p>
    </div>

</body>
</html>
