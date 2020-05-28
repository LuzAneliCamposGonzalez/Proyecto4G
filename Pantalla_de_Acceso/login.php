  
<?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        header('Location: /Control_de_Errores_en_PHP');
      }
      require 'database.php';

      if (!empty($_POST['id']) && !empty($_POST['password'])) {
          $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE id = :id');
          $records->bindParam(':id', $_POST['id']);
          $records->execute();
          $results = $records->fetch(PDO::FETCH_ASSOC);

          $message = '';

          if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
              $_SESSION['user_id'] = $results['id'];
              header("Location: /Control_de_Errores_en_PHP");
          } else {
              $message = 'Sorry, el usuario o contraseña no coinciden';
          }
      }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body style='background: black;'>

    <?php if(!empty($message)): ?>
        <p> <?= $message ?></p>
    <?php endif; ?>

    <center>
    <h1 style="color: white;">Login</h1>
    <form action="formulario.html" method="POST">
        
        <br>

        <!-- USERNAME -->
        <h3><label style="color: white;" for="username">Username</label>
        <input name="email" type="text" placeholder="Enter your email">

        <br>
        <br>

        <!-- PASSWORD -->
        <h3><label style="color: white;" for="password">Password</label>
        <input name="password" type="password" placeholder="Enter your Password">

        <br>
        <br>
        <br>

        <!-- Button -->
        <input type="submit" value="Entrar">

    </center>
    </form>
    </body>
</html>