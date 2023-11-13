<section>
    <article>
        <h1>Listar Cliente</h1>
        <form action="index.php" method="get">
            <input type="hidden" name="m" value="nuevo">
            <input type="submit" value="Registrar Cliente" class="btn btn-outline-secondary">
        </form>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th class="col">Documento</th>
                    <th class="col">Nombre</th>
                    <th class="col">Correo</th>
                    <th class="col">Telefono</th>
                    <th class="col">Ver</th>
                    <th class="col">Editar</th>
                    <th class="col">Eliminar</th>
                </tr>
            </thead>
            <?php
            require_once("./controller/clienteC.php");
            $clientes = new clienteC();
            $clientes = $clientes->listaclientes();
            foreach ($clientes as $cliente) {
            ?>
                <tbody>
                    <td><?php echo $cliente->documento ?></td>
                    <td><?php echo $cliente->nombre ?></td>
                    <td><?php echo $cliente->correo ?></td>
                    <td><?php echo $cliente->telefono ?></td>
                    <td>
                        <form action="index.php" method="get">
                            <input type="hidden" name="docu" value="<?= $cliente->documento ?>">
                            <input type="hidden" name="m" value="vistaver">
                            <input type="submit" class="btn btn-outline-secondary" value="ver">
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-outline-warning" href="index.php?m=actucliente&docu=<?php echo $cliente->documento ?>">Editar</a>
                    </td>
                    <td>
                        <a class="btn btn-outline-danger" href="index.php?m=eliminarcli&docu=<?php echo $cliente->documento ?>">Eliminar</a>
                    </td>
                </tbody>
            <?php
            }
            ?>
        </table>