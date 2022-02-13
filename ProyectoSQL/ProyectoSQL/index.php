
<?php include('include/header.php') ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <!-- averiguar para que sirve esto  -->
    
            <div class="card card-body">
                <!-- para que sepa a donde va a enviar todos los datos del formulario -->
                <div >
                    <div class="form-group">
                        <input type="text" name="title" id="nombre" class="form-control" placeholder="Nombre" autofocus>
                    </div>
                    <br>
                    <div class="form-group">
                    <input type="text" name="title" id="edad" class="form-control" placeholder="Edad" autofocus>
                    <br>
                    <input type="text" name="title" id="pais" class="form-control" placeholder="Pais" autofocus>
                    <br>
                    <input type="email" name="title" id="correo" class="form-control" placeholder="Correo" autofocus>
                    </div>
                    <br>
                    <input type="submit" name="save_taks" id="btn" class="btn btn-success btn-block" onclick="funBoton();" value="Ingresar" style="width: 100%;">
                    <br>
                    <br>
                    <input type="submit" id="btn_cargar_usuarios" class="btn btn-success btn-block" id="btn_cargar_usuarios" value="Cargar Usuarios" style="width: 100%;">

                </div>
            </div>
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Pais</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <tbody id="muestra">

                </tbody>
            </table>
            <div class="loader" id="loader"></div>
        </div>
    </div>
</div>
<?php include('include/footer.php') ?>