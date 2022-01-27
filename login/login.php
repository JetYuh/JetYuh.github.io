
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css" />
</head>
<title> Login page</title>
<body>
  <h1 align="center"> Log In</h1>
  <form method="post" action="loginserv.php">
    <input type="text" name="email" placeholder="Email" /><br /><br />
    <input type="password" name="pwd" placeholder="Password" /><br /><br />
    <input type="submit" value="Log In" />
  </form>
  <span><?php echo $error; ?></span>
</body>
</html>
