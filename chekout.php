<!DOCTYPE html>
<html>
<head>
    <title>Form Check-Out</title>
    <style>
  
.header{
    padding-right:100px;
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
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        select {
            height: 40px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .payment-method {
    display: inline-block;
    width: 200px;
    text-align: center;
    margin: 10px;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.payment-method img {
    width: 100px;
    height: 90px;
    margin-bottom: 10px;
}
.payment-method img ,.grabpay{
    width: 150px;
    height: 70px;
    margin-bottom: 10px;
}



.payment-method label {
    cursor: pointer;
    
}

input[type="submit"] {
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}


.content {
    display: flex;
    justify-content: space-between;
    margin: 20px;
}


    </style>
</head>
<body>
<div class="header">
    <center>
    <img src="nologin.jpg" style="height: 160px; width: 1080px;">
</div>
    <ul class="navigasi">
        <li><a href="index.php">HOME</a></li>
        <li><a href="nike.php">NIKE</a></li>
        <li><a href="aj.php">JORDAN</a></li>
        <li><a href="adidas.php">ADIDAS</a></li>
        <li><a href="nb.php">NB</a></li>
        <li><a href="puma.php">PUMA</a></li>
    </ul>
    <p style="font-size: 14px; color: black; margin-top: 10px; margin-left: 50px;">HOME > NIKE > MORE > CHECK OUT</p>

    <div class="content">
        <div class="checkout-form">
            <h1>Check-Out</h1>
            <form action="proses_check_out.php" method="post">
                <label for="nama">Full Name:</label>
                <input type="text" id="nama" name="nama" required>

                <label for="alamat">Address:</label>
                <textarea id="alamat" name="alamat" rows="4" cols="50" required></textarea>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="nomor_telepon">Number Phone:</label>
                <input type="tel" id="nomor_telepon" name="nomor_telepon" required>

            </form>
        </div>

        <div class="payment-form">
            <h1>Choose Payment Method</h1>
            <div class="payment-method">
        <label for="kartu_kredit">
            <input type="radio" id="kartu_kredit" name="metode_pembayaran" value="kartu_kredit">
            <img src="pay/payment1.jpg" alt="card">
        </label>
    </div>

    <div class="payment-method">
        <label for="transfer_bank">
            <input type="radio" id="transfer_bank" name="metode_pembayaran" value="transfer_bank">
            <img src="pay/payment2.png" alt="grabpay">
        </label>
    </div>

    <div class="payment-method">
        <label for="paypal">
            <input type="radio" id="paypal" name="metode_pembayaran" value="paypal">
            <img src="pay/payment3.png" alt="paypal">
        </label>
    </div>
    <br>
                <a href="kadkradit.php"><input type="submit" value="Payment"></a>
            </form>
        </div>
    </div>
</body>
</html>
