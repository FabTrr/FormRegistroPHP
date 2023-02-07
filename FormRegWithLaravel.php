<!-- Formulario de registro -->
<form action="{{ route('users.store') }}" method="post">
  @csrf
  <label for="username">Nombre de usuario:</label>
  <input type="text" name="username" id="username">
  
  <label for="email">Correo electrónico:</label>
  <input type="email" name="email" id="email">
  
  <label for="password">Contraseña:</label>
  <input type="password" name="password" id="password">
  
  <input type="submit" value="Registrarse">
</form>