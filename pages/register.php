<?php include("../config/conection.php") ?>
<?php include("../header/header.php") ?>

<div class="container">
    <div class="card" style="width: 70rem;">
    <form action="post.php" method="POST">
        <div class="row">
        </div>
               
            <div class="col-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com" name='name'>

                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com" name='ci'>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com" name='user'>
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com" name='password'>
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com" name='email'>
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com" name='rol'>
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com" name='auth'>
                       
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com" name='id_cargo'>
                       
                </div>
            </div>
        </div>
    </div>
</div>
<button type="submit" class="submit" name="save_register">Registrar</button>
</form>
</script>
<!-- Script de bootsatrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
<!-- Script de sweet alrt -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>