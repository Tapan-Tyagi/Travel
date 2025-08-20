<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <section class="register">
      <h1>Register</h1>
      <form action="process_register.php" method="POST">
         <input type="text" name="fullname" placeholder="Full Name" required>
         <input type="email" name="email" placeholder="Email" required>
         <input type="password" name="password" placeholder="Password" required>
         <input type="password" name="confirm_password" placeholder="Confirm Password" required>
         <button type="submit">Register</button>
         <p>Already have an account? <a href="login.php">Login here</a></p>
      </form>
   </section>
</body>
</html>