 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LaBoheme</title>
</head>
<body>
  <a href="../index.php">🔙BACK</a>
  <h2>Iniciar Sesión || Continue with your email</h2>
  <br>
  <form action="../config/sign_in.php" method="post">
    <label for="user_email">Email or username</label>
    <br>
    <input id="user_email" type="text" name="user_email" required>
    <br>
    <label for="user_password">Password</label>
    <br>
    
    <input id="user_password" type="text" name="user_password" required>
    <br>
    <br>
    
    <input type="submit" value="Continue">
    <hr>
  </form>
</body>
</html>
