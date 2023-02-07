<?php
// Verificar si se ha enviado el formulario
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Recuperar los datos del formulario
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  // Validar los datos
  if(empty($username) || empty($email) || empty($password)) {
    echo 'Por favor, complete todos los campos.';
  } else {
    // Conectar a la base de datos
    $conn = mysqli_connect('localhost', 'root', '', 'database_name');
    
    // Verificar si la conexión es exitosa
    if(!$conn) {
      die("Error de conexión: " . mysqli_connect_error());
    }
    
    // Preparar la consulta para insertar los datos en la base de datos
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    
    // Ejecutar la consulta
    if(mysqli_query($conn, $sql)) {
      echo 'Usuario registrado con éxito.';
    } else {
      echo 'Error al registrar el usuario: ' . mysqli_error($conn);
    }
    
    // Cerrar la conexión
    mysqli_close($conn);
  }
}
?>

<!-- Formulario de registro -->
<form action="" method="post">
  <label for="username">Nombre de usuario:</label>
  <input type="text" name="username" id="username">
  
  <label for="email">Correo electrónico:</label>
  <input type="email" name="email" id="email">
  
  <label for="password">Contraseña:</label>
  <input type="password" name="password" id="password">
  
  <input type="submit" value="Registrarse">
</form>
