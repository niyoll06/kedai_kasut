<!-- Mulai HTML -->
<html>
<head>
    <!-- Mulai Bahagian <head> -->
    <style>
        /* Mulai CSS */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .login-container {
            display: flex;
            background-color: #f0f0f0; /* Warna kelabu */
            height: 100vh;
        }

        .login-form {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #fff; /* Warna putih */
        }

        h2 {
            margin-bottom: 20px;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #000; /* Warna hitam */
            color: #fff; /* Warna putih */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-image {
            flex: 1;
            background-image: url('gambar.jpg'); /* URL gambar */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            text-align: center;
            margin-top: 15%;
        }

        .btn {
            background-color: darkgrey;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
        }
        /* Tamat CSS */
    </style>
    <!-- Tamat Bahagian <head> -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Jika fail styles.css wujud -->
    <title>Paparan Login</title>
</head>
<!-- Tamat HTML Bahagian <head> -->

<body>
    <!-- Mulai Bahagian <body> -->
    <div class="login-container">
        <div class="login-form">
            <h2>LOG IN </h2>
            <form>
                <label for="test">Nama Pengguna:</label>
                <input type="text" id="username" name="username" method="get" required>
                <label for="password">Kata Laluan:</label>
                <input type="password" id="password" name="password" required>
                <a button type="submit" id="loginBtn" href="index2.php" class="btn">LOG IN</a></button>
            </form>
        </div>
        <div class="login-image">
            <img src="gbr3.jpg" alt="Gambar">
        </div>
    </div>

    <script>
        // Mulai JavaScript
        document.getElementById("loginBtn").addEventListener("click", function(event) {
            event.preventDefault(); 
            
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username ) {
                alert("Login Berhasil!"); // Tampilkan pesan login berhasil
                window.location.href = "index2.php"; // Alihkan pengguna ke halaman yang diinginkan setelah login berhasil
            } 
            else {
                alert("Login Gagal. Silakan coba lagi."); 
            }
        });
        // Tamat JavaScript
    </script>
    <!-- Tamat Bahagian <body> -->
</body>
<!-- Tamat HTML Bahagian <body> -->
</html>
<!-- Tamat HTML -->
