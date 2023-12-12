<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="./css/login.style.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="check_login.php" >
        <h3>Tizimga kirish</h3>

        <label for="username">Login</label>
        <input type="text" placeholder="Login" name="username">

        <label for="password">Parol</label>
        <input type="password" placeholder="Parol" name="password">

        <input type="submit" value="Kirish">
    </form>
</body>
</html>
