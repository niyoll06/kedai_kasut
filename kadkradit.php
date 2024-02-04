<!DOCTYPE html>
<html lang="en">

<head>
    <title>HZ</title>
    <style>
        body {
            background-color: white;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header img {
            width: 100%;
            height: auto;
        }

        .navigasi {
            list-style-type: none;
            padding: 15px 0;
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

        .container {
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            text-align: center;
            margin: 0 auto;
            margin-top: 20px;
        }

        input {
            margin-bottom: 10px;
            width: calc(100% - 20px);
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <center>
    <div class="wrapper">
        <div class="header">
            <img src="nologin.jpg" style="height: 160px; width: 1080px;">
        </div>
        <ul class="navigasi">
            <li><a href="nike.php">NIKE</a></li>
            <li><a href="adidas.php">ADIDAS</a></li>
            <li><a href="nb.php">NB</a></li>
            <li><a href="puma.php">PUMA</a></li>
            <li><a href="nike.php">HOME</a></li>
        </ul>
        <p style="font-size: 14px; color: black; margin-top: 10px; margin-right: 73%;">HOME > NIKE > M0RE > CHECK OUT > BILLING DETAILS</p>

        <div class="container">
            <h1>CARD CREDIT DETAILS</h1>
            <div id="response-message"></div>
            <form id="credit-card-form">
                <label for="nama">Name:</label>
                <input type="text" id="nama" required>
                <label for="nomborKad">Number Card:</label>
                <input type="text" id="nomborKad" required>
                <label for="tarikhLuput">Expiration Date (MM/YY):</label>
                <input type="text" id="tarikhLuput" placeholder="MM/YY" required>
                total RM : 439.90
                <br>
                <button type="submit">PAY NOW</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById("credit-card-form").addEventListener("submit", function (event) {
            event.preventDefault();

            var username = document.getElementById("nama").value;
            var cardNumber = document.getElementById("nomborKad").value;
            var expirationDate = document.getElementById("tarikhLuput").value;

            if (username && cardNumber && expirationDate) {
                alert("Pembayaran Berhasil!");
                window.location.href = "donepay.php";
            } else {
                alert("Pembayaran Gagal. Silakan lengkapi semua detail.");
            }
        });
    </script>
</body>

</html>