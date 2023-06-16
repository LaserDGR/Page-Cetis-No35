<?php include("../config/conection.php")?>
<?php include("../header/header.php")?>

<div class="contenedor">
        <form action="">
            <h1 class="title">Login</h1>
            <label for="">
                <i class="fa-solid fa-user"></i>
                <input placeholder="Ingresa Tu Nombre Completo" type="text" id="username" name='user'>
            </label>
    
            <label for="">
                <i class="fa-solid fa-lock"></i>
                <input placeholder="ingresa Tu Numero De Control" type="password" id="password" name='password'>
            </label>
            <a href="#" class="link">Olvidaste Tu Contraseña?</a>
    
            <button id="button">Login</button>
        </form>

    </div>
    <script src="/main.js"></script>

    </script>
    <!-- Script de bootsatrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
    <!-- Script de sweet alrt -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>

