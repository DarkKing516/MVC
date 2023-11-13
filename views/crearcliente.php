<section>
    <article>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <br><br>
                <h3>Registrar Cliente</h3>

                <form action="./index.php" method="get">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Documento:</label>
                        <input type="tex" name="documento" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">telefono</label>
                        <input type="number" name="telefono" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Correo</label>
                        <input type="email" name="correo" class="form-control" id="exampleInputPassword1">
                    </div>

                    <input type="hidden" name="m" value="crear">

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form><br><br>
            </div>
            <div class="col-3"></div>
        </div>
    </article>
</section>