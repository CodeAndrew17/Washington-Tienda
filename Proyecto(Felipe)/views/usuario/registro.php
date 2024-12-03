<h1>Registrarse</h1>


<form action="<?=base_url?>usuario/save" method="POST">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" placeholder = "Ingrese el nombre" required/>

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" placeholder = "Ingrese apellidos" required/>

    <label for="email">Email</label>
    <input type="email" name="email" placeholder = "Ingrese el email" required/>

    <label for="password">Contraseña</label>
    <input type="password" name="password" required/>

    <input type="submit" value="Registrarse">


</form>