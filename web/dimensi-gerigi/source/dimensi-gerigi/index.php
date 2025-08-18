<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
  header('Location: login.php');
  exit;
}

$user = $_COOKIE['user'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>DIMENSI GERIGI Dashboard</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Montserrat:wght@600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Montserrat', 'Fredoka One', sans-serif;
      min-height: 100vh;
      overflow: hidden;
      /* Smooth gradient background, like image2 */
      background: linear-gradient(120deg, #FFB347 0%, #FF6961 50%, #C86DD7 100%);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .dashboard-card {
      background: rgba(255, 255, 255, 0.18);
      border-radius: 32px;
      box-shadow: 0 8px 36px 0 #c86dd7aa;
      padding: 48px 36px 40px 36px;
      text-align: center;
      min-width: 320px;
      max-width: 90vw;
      backdrop-filter: blur(4px);
      z-index: 2;
      animation: cardPop 1s cubic-bezier(.57, 1.53, .53, 1) 0s 1;
    }

    @keyframes cardPop {
      0% {
        transform: scale(0.9);
        opacity: 0;
      }

      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    .dashboard-title {
      font-family: 'Fredoka One', 'Montserrat', sans-serif;
      font-size: 2.2rem;
      color: #ff6961;
      margin-bottom: 12px;
      letter-spacing: 2px;
      font-weight: bold;
      text-shadow: 2px 2px 0 #ffb34799, 4px 4px 10px #c86dd7;
    }

    .highlight {
      color: #ffb347;
      text-shadow: 1px 1px 0 #ff6961, 0 0 8px #fff6;
    }

    .dashboard-message {
      font-size: 1.13rem;
      color: #fff;
      margin-bottom: 28px;
      font-family: 'Montserrat', sans-serif;
      letter-spacing: 1px;
      text-shadow: 0 0 8px #c86dd777;
    }

    .dashboard-flag {
      display: inline-block;
      padding: 12px 22px;
      font-size: 1.05rem;
      font-family: 'Fredoka One', 'Montserrat', sans-serif;
      background: linear-gradient(90deg, #ffb347 0%, #c86dd7 100%);
      color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 20px #c86dd799;
      letter-spacing: 1.5px;
      margin-top: 10px;
      user-select: all;
      border: 2px solid #ffb34788;
      transition: box-shadow 0.2s, transform 0.2s;
    }

    .dashboard-flag:hover {
      box-shadow: 0 4px 32px #ff696199;
      transform: scale(1.05);
    }

    @media (max-width: 520px) {
      .dashboard-card {
        padding: 20px 8px;
        font-size: 1rem;
        min-width: unset;
      }

      .dashboard-title {
        font-size: 1.4rem;
      }

      .dashboard-message {
        font-size: 1rem;
      }

      .dashboard-flag {
        font-size: 0.95rem;
        padding: 8px 12px;
      }
    }
  </style>
</head>

<body>
  <div class="dashboard-card">
    <div class="dashboard-title">
      Welcome to <br>
      <span class="highlight">DIMENSI GERIGI!</span>
    </div>
    <div class="dashboard-message">
      You have successfully logged in.<br>
      We hope you enjoy UKM Expo 2025.
    </div>
    <div class="dashboard-flag">
      <?= $user == 'Aro' ?  "UCS{w3lcome_t0_dimensi_g3r3x_2025}" : 'hmmmm who are you??? only Aro that can get the secret message' ?>
    </div>
  </div>
</body>

</html>