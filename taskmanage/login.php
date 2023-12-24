

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body style = "background: #181824">
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form method="POST" action="logincode.php" >
        <input type="text" placeholder="Enter your email" name="email" required>
        <input type="password" placeholder="Enter your password" name="password" required>
        <input type="submit" class="button" value="Login" name="submit">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
      <form method="POST" action="registercode.php">
        <input type="text" placeholder="Enter your email" name="emailr" required>
        <input type="password" placeholder="Create a password" name="passr" required>
        <input type="password" placeholder="Confirm your password" name="cpassr" required>
        <input type="submit" class="button" value="Signup" name="submit">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>