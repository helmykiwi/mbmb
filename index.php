<?php
?>
<!DOCTYPE html>
<html lang="ms">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - EKSA MBMB</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <main class="login-page">
    <h1>Login Portal EKSA MBMB</h1>
    <form action="main.php" method="post">
      <label for="username">Nama Pengguna</label>
      <input type="text" id="username" name="username" required>
      
      <label for="password">Kata Laluan</label>
      <input type="password" id="password" name="password" required>
      
      <button type="submit">Login</button>
    </form>
  </main>
</body>
</html>
