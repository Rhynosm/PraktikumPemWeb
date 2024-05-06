<!DOCTYPE html>
<html>
<head>
    <title>asianfoodmarketregisterpage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css">
</head>
<body>
    <header>
        <center>
            <img src="logo.jpeg" alt="" />
            <h1>Welcome To Asian Food Market</h1>
        </center>
        <a href="index.php" >Home</a>
        <a href="Login.php" >Login</a>
        <a href="Register.php" >Register</a>

    </header>
    <main>
        <div class="form-login">
            <center>
            <h2>Register To Your A-Mart Account Here!! </h2>
                <input type="email" id="email" name="email" placeholder="Email" />
            <br>
                <input type="number" id="number" name="phonenumber" placeholder="PhoneNumber" />
            </br>
            <br>
                <input type="text" id="username" name="username" placeholder="Username" /> 
            </br>
                <input type="password" id="pass" name="password" placeholder="Password" />
            </center>
            <center>
                <button onclick="myFunction()">Register</button>
            </center>
           </div>
    </main>
    <footer>
        <center>
            <p>&copy; 2023 Our Asian Food Market Website. All rights reserved.</p>
        </center>
    </footer>
    <script>
        function myFunction() {
            var email = document.getElementById("email").value;
            var number = document.getElementById("number").value;
            var username = document.getElementById("username").value;
            var pass = document.getElementById("pass").value;
            var alertBox = document.createElement("div");
            alertBox.classList.add("alert");
            alertBox.innerHTML = "Welcome, " + username + " AKUN ANDA SUDAH BERHASIL DIDAFTARKAN!";
            document.body.appendChild(alertBox);
            setTimeout(function() {
                alertBox.remove();
            }, 3000);
        }
    </script>
</body>
</html>