<?php
$user = $_POST["txtUsuario"];
$clave = $_POST["txtClave"];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Aviones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
        }

        .decorative-buttons {
            display: flex;
            gap: 10px;
        }

        .decorative-buttons button {
            background-color: blueviolet;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="header">
            <h1>Lista de Aviones</h1>
        </div>

        <div class="decorative-buttons">
            <button>Nuevo Avion</button>
            <button>Extraer a PDF</button>
            <button>Extraer a Excel</button>
            <button>Cerrar Sesión</button>
        </div>

        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Aviones</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Airbus A320-Neo	</td>
                    <td>Chino</td>
                    <td>USD 42.000</td>
                    <td>
                        <button class="btn btn-primary" onclick="editaravion('Airbus A320-Neo', 'Chino', 'USD 42.000')">Modificar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Airbus A321-200	</td>
                    <td>Britanico</td>
                    <td>USD 32.000</td>
                    <td>
                        <button class="btn btn-primary" onclick="editaravion('Airbus A321-200	', 'Britanico', 'USD 32.000')">Modificar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="modal fade" id="editaravion" tabindex="-1" role="dialog" aria-labelledby="editaravionLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editaravion">Editar Avion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Origen">Edad:</label>
                            <input type="number" class="form-control" id="Origen" name="Origen" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Costo">Posición:</label>
                            <input type="text" class="form-control" id="Costo" name="Costo" readonly>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function editaravion(nombre, Origen, Costo) {
            document.getElementById('nombre').value = Avion;
            document.getElementById('Origen').value = Origen;
            document.getElementById('Costo').value = Costo;
            $('#editaravion').modal('show');
        }
    </script>
</body>

</html>