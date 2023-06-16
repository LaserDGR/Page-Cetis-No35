<?php /*include("../config/conection.php")*/?>
<?php include("../header/header.php")?>


<div class="container col-8 my-5 br-2 rounded">
        <div class="row g-3">
            <div class="col-4 order-md-last">
                <div class="card text-center bg-warning">
                    <h4>Cetis No 35</h4>
                </div>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between">
                        <div class="mx-auto d-block">
                            <lord-icon src="https://cdn.lordicon.com/pqxdilfs.json" trigger="hover"
                                colors="outline:#131432,primary:#606874,secondary:#c71f16,tertiary:#ebe6ef"
                                style="width:250px;height:250px">
                            </lord-icon>
                        </div>

                    </li>

                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h6>Carrera:</h6>
                        </div>
                        <span class="text-muted">Programación</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h6>Materia</h6>
                        </div>
                        <span class="text-muted">APLICACIONES WEB</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h6>Grupo:</h6>
                        </div>
                        <span class="text-muted">4AM</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h6>Semestre:</h6>
                        </div>
                        <span class="text-muted">4° Semestre</span>
                    </li>
                </ul>
            </div>
            <div class="col-8">
                <div class="card bg-info text-center">
                    <h3>Calificación De Parciales</h3>
                </div>
                <form action="post.php" method="POST"  class="row g-3 needs-validation" novalidate>
                    <div class="row">
                        <div class="col-6 mt-3">
                            <label class="form-label" for="firstname">Nombres</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" required>
                            <div class="invalid-feedback">
                                Ingrese nombre del alumno
                            </div>
                        </div>
                        <div class="col-6 mt-3">
                            <label class="form-label" for="firstname">Número Control</label>
                            <input type="text" id="nombre" name="n_control" class="form-control" required>
                            <div class="invalid-feedback">
                                Ingrese el número control
                            </div>
                        </div>

                        <div class="col-4 mt-3">
                            <label class="form-label" for="zip">Parcial 1 </label>
                            <input type="number" id="nota1" name="parcial1"  class="form-control" required>
                            <div class="invalid-feedback">
                                Ingrese la Calificación del parcial 1
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label" for="zip">Parcial 2 </label>
                            <input type="number" id="nota2" name="parcial2"  class="form-control" required>
                            <div class="invalid-feedback">
                                Ingrese la Calificación del parcial 2
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <label class="form-label" for="zip">Parcial 3 </label>
                            <input type="number" id="nota3" name="parcial3" class="form-control" required>
                            <div class="invalid-feedback">
                                Ingrese la Calificación del parcial 3
                            </div>
                        </div>
                

                    </div>
                    <hr class="mt-5">
                    <div class="form-check">
                        <!-- <input type="checkbox" class="form-check-input"> -->
                        <label class="form-check-label">Al hacer click en el botón se promediaran las calificaciones del
                            Alumno.</label>
                    </div>
                    <hr>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-primary btn-block mb-4" onclick="agregarNotas();">Promediar Calificación</button>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-primary btn-block mb-4" name="save_score" >Guardar</button>
                    </div>

                </form>
            </div>

        </div>
        <hr>
        <div class="card bg-info text-center">
            <h4>Resultados</h4>
        </div>
        <div class="car-footer p-2">
            <!-- <button class="btn-primary" id="grabar">Grabar</button> -->
            <table class="table table-striped table-bordered mt-3 ">
                <thead class="text-center font-weight-bold">
                    <tr class="bg-secondary text-white">
                        <td>Nombre</td>
                        <td>Parcial 1</td>
                        <td>Parcial 2</td>
                        <td>Parcial 3</td>
                        <td>Promedio</td>
                        <td>Observación</td>
                    </tr>
                </thead>
                <tbody id="addtabla">

                </tbody>
            </table>
        </div>
    </div>
    <!--Design butoon icon github-->
    <div class="github-icon-container">
        <a href="https://github.com/juscoder/appweb_calificacion_de_notas" target="_blank"><i
                class="fab fa-github github-icon"></i></a>
    </div>

    <script src="../promediar.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <!-- Script de bootsatrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
    <!-- Script de sweet alrt -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php include("../footer/footer.php")?>