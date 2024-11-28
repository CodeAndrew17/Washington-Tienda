<h1>registrarse</h1>
<form action="<?=base_url?>usuario/save" method="POST">
    <label for="name">Nombre</label> 
    <input type="text" name="nombre">

    <label for="apellido">Apellido</label>
    <input type="text" name="apellidos">

    <label for="email">email</label>
    <input type="email" name="email">

    <label for="contraseña">contraseña</label>
    <input type="password" name="password">

    <input type="submit" value="Registrarse">
</form>