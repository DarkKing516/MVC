<section>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <br><br>
            <h3>Actualizar Cliente</h3>

            <?php
            $docu = $_GET["docu"];
            require_once("./controller/clienteC.php");
            $client = new clienteC();
            $cliente = $client->actualizarcliente($docu);
            ?>

            <form action="./index.php" method="get">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Documento:</label>
                    <input type="tex" name="documento" value="<?php echo $cliente->documento ?>" class="form-control" aria-describedby="emailHelp" disabled>
                    
                    <input type="hidden" name="documento" value="<?php echo $cliente->documento ?>" class="form-control" aria-describedby="emailHelp">

                    <input type="hidden" name="documentoV" value="<?php echo $cliente->documento ?>" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre</label>
                    <input type="text" name="nombre" value="<?php echo $cliente->nombre ?>" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">telefono</label>
                    <input type="number" name="telefono" value="<?php echo $cliente->telefono ?>" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Correo</label>
                    <input type="email" name="correo" value="<?php echo $cliente->correo ?>" class="form-control" id="exampleInputPassword1">
                </div>

                <input type="hidden" name="m" value="actualizar">

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form><br><br>

        </div>
        <div class="col-3"></div>
    </div>
</section>