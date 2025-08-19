<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === 'gerex2025' && $password === 'UCSisTHEbestUKM!!!') {
    $_SESSION['loggedin'] = true;
    setcookie('user', "SobatMahakarya", time() + 3600);
    header('Location: index.php');
    exit;
  } else {
    $error = "Invalid username or password.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>DIMENSI GEREX - Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Montserrat:wght@600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Montserrat", "Fredoka One", sans-serif;
      min-height: 100vh;
      overflow: hidden;
    }

    .background {
      position: fixed;
      width: 100vw;
      height: 100vh;
      top: 0;
      left: 0;
      z-index: 1;
      background: linear-gradient(120deg, #ffb347 0%, #ff6961 50%, #c86dd7 100%);
      animation: gradientMove 12s ease-in-out infinite alternate;
    }

    @keyframes gradientMove {
      0% {
        background-position: 0 0;
      }

      100% {
        background-position: 100vw 100vh;
      }
    }

    /* Abstract shapes for playful effect */
    .shape {
      position: absolute;
      filter: blur(2px);
      opacity: 0.42;
      z-index: 2;
    }

    .shape1 {
      top: -70px;
      left: -110px;
      width: 410px;
      height: 220px;
      background: radial-gradient(circle, #ffb347 70%, #c86dd7 100%);
      border-radius: 60% 40% 60% 70%;
      transform: rotate(-13deg);
    }

    .shape2 {
      bottom: -120px;
      right: -90px;
      width: 380px;
      height: 180px;
      background: linear-gradient(120deg, #ff6961 70%, #c86dd7 100%);
      border-radius: 50% 60% 40% 80%;
      transform: rotate(31deg);
    }

    .shape3 {
      top: 40%;
      left: 65%;
      width: 160px;
      height: 140px;
      background: linear-gradient(90deg, #c86dd7 70%, #ffb347 100%);
      border-radius: 60%;
      transform: translate(-50%, -50%) rotate(-10deg);
    }

    /* Decorative banners, resembling the image nuances */
    .decor {
      position: absolute;
      z-index: 3;
      opacity: 0.36;
      pointer-events: none;
    }

    .decor1 {
      top: 13%;
      left: 5%;
      width: 220px;
      height: 34px;
      background: linear-gradient(90deg, #ffb347 40%, #ff6961 100%);
      border-radius: 18px 40px 22px 40px;
      transform: rotate(-7deg);
    }

    .decor2 {
      top: 82%;
      right: 9%;
      width: 120px;
      height: 28px;
      background: linear-gradient(90deg, #c86dd7 40%, #ffb347 100%);
      border-radius: 20px 40px 18px 40px;
      transform: rotate(12deg);
    }

    .login-container {
      position: relative;
      z-index: 5;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-card {
      background: rgba(255, 255, 255, 0.15);
      border-radius: 30px;
      box-shadow: 0 8px 32px 0 #c86dd7aa;
      padding: 48px 32px 40px 32px;
      text-align: center;
      width: 340px;
      backdrop-filter: blur(2px);
    }

    .title {
      font-family: "Fredoka One", "Montserrat", sans-serif;
      font-size: 2.5rem;
      color: #ff6961;
      margin-bottom: 5px;
      letter-spacing: 2px;
      text-shadow: 2px 2px 0 #ffb347, 4px 4px 8px #c86dd7;
      font-weight: bold;
    }

    .subtitle {
      font-size: 1.1rem;
      color: #fff;
      margin-bottom: 28px;
      font-family: "Montserrat", sans-serif;
      letter-spacing: 1px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    input[type="text"],
    input[type="password"] {
      padding: 12px 18px;
      border-radius: 8px;
      border: none;
      background: rgba(255, 255, 255, 0.9);
      font-size: 1rem;
      color: #c86dd7;
      box-shadow: 0 2px 8px rgba(255, 105, 97, 0.07);
      transition: box-shadow 0.2s;
      font-family: "Montserrat", sans-serif;
      outline: none;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      box-shadow: 0 0 0 2px #ffb347;
    }

    button[type="submit"] {
      padding: 12px 0;
      border-radius: 8px;
      border: none;
      background: linear-gradient(90deg, #ffb347 0%, #ff6961 100%);
      color: #fff;
      font-size: 1.1rem;
      font-family: "Fredoka One", "Montserrat", sans-serif;
      font-weight: bold;
      letter-spacing: 2px;
      cursor: pointer;
      box-shadow: 0 2px 16px #ffb34777;
      transition: background 0.2s, box-shadow 0.2s;
    }

    button[type="submit"]:hover {
      background: linear-gradient(90deg, #ff6961 0%, #c86dd7 100%);
      box-shadow: 0 4px 24px #c86dd799;
    }
  </style>
</head>

<body>
  <div class="background">
    <div class="shape shape1"></div>
    <div class="shape shape2"></div>
    <div class="shape shape3"></div>
    <div class="decor decor1"></div>
    <div class="decor decor2"></div>
  </div>
  <div class="login-container">
    <div class="login-card">
      <h1 class="title">DIMENSI GEREX</h1>
      <p class="subtitle">Login to GERIGI x UKM Expo 2025</p>
      <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <?php if (isset($error)) : ?>
          <p style="color: red;"><?= $error ?></p>
        <?php endif; ?>
      </form>
    </div>
  </div>
</body>

</html>


<!-- JUST IN CASE I FORGOT -->
<!-- 
username: gerex2025
password: UCSisTHEbestUKM!!!
 -->