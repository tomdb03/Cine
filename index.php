<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Películas - Tomás Dalla Bona</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2? family = Roboto: ital, wght @ 0,100; 0,300; 0,400; 0,500; 0,700; 0,900; 1,300; 1,400; 1,500; 1,900 & display = swap " rel=" stylesheet ">
</head>

<body>
    <main>
        <!-- etiquetas -->

        <div class="contenedor__todo">
            <!--contenedor, creando objetos -->

            <div class="caja__trasera">
                <!-- cuadro azul de atras -->
                <div class="caja__trasera-login">
                    <button id="btn__iniciar-sesión">Volver</button>
                    <!--Botón con id para controlar en javascript-->
                </div>
                <div class="caja__trasera-register">
                    <!-- caja para registrarse-->
                    <h3>¿Deseas registrar una película?</h3>
                    <p>Aquí puedes registrar una película</p>
                    <button id="btn__registrarse">Registrar</button>
                    <!--Botón con id para controlar en javascript-->
                </div>
            </div>
            <!-- Formulario de Login y Registro -->
            <div class="contenedor__login-register">
                <!-- Login -->
                <form action="" class="formulario__login">
                    <h2>PÁGINA DE PELíCULAS </h2>
                </form>
                <!-- Registro-->
                <form action="php/registro_peliculas_be.php" method="POST" class="formulario__register">
                    <h2>Registra una película</h2>
                    <input type="text" placeholder="Nombre" name="nombre">
                    <input type="text" placeholder="Año" name="ano">
                    <input type="text" placeholder="Director" name="director">
                    <input type="text" placeholder="Género" name="genero">
                    <button>Registrar</button>
                </form>
            </div>
        </div>

    </main>
    <script src="assets/js/script.js"></script>
    <!--vinculamos al archivo java script-->
</body>

</html>