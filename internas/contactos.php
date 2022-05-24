<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera App</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>

<body>
    <header class="cabeceraPrincipal">
        <h1> Mama Lola </h1>

        <section>
            <nav>
                <a href="">Register</a>
                <a href="">Login</a>
                <input type="search" value="Buscar">
            </nav>
        </section>
    </header>

    <nav class="menuPrincipal">
        <a href="../index.html">Inicio</a>
        <a href="prueba.php">Servicios</a>
        <a href="">Portafolio</a>
        <a href="">Clientes</a>
        <a href="internas/contactos.php">Contactos</a>
    </nav>

    <main>
        <h2 class="h2Home">CONTACTOS</h2>
        <form method="post" action="procesar.php">
            <div class="grupoInput">
                <label for="nombres">Nombres</label>
                <input type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre">
            </div>
            <div class="grupoInput">
                <label for="nombres">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos">
            </div>
            <div class="grupoInput">
                <label for="correo">Correo</label>
                <input type="email" name="correo" id="correo" placeholder="Ingrese su correo electronico">
            </div>
            <div class="grupoInput">
                <label for="tipoUser">Tipo de Usuario</label>
                <select name="tipoUser" id="tipoUser">
                    <option value="1">Administrador</option>
                    <option value="2">Colaborador</option>
                </select>
            <div class="grupoInput">
                <button type="submit" value="Procesar">Procesar</button>
            </div>
        </form>
    </main>
    
    <footer class="piePagina">
        <h6>Derechos Reservados</h6>
    </footer>
</body>

</html>