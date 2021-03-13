<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <title>Simulador de costos de financiamiento</title>
</head>

<body>
    <header>
        <h2 class="text-center">Simulador de costos de financiamiento</h2>
    </header>
    <form id="formProductos" enctype="multipart/form-data">
        <div id="marginCenter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Ingreso de datos -->
                        <div class="form-group">
                            <label for="nombreProducto">Nombre producto</label>
                            <input type="text" class="form-control" id="nombreProducto" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="tienda">Tienda</label>
                            <input type="text" class="form-control" id="tienda" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="valorCuotaMensual">Valor cuota mensual</label>
                            <input type="number" class="form-control" id="valorCuotaMensual" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="cuotas">N° de cuotas</label>
                            <input type="number" class="form-control" id="cuotas" placeholder="">
                        </div>
                        <center><button type="button" id="btnCalcular" class="btn btn-primary">Calcular</button></center>
                        <!-- Resutados -->
                        <h3 class="text-center">Resultados</h3>
                        <ul class="list-group" id="resultados">
                            <li class="list-group-item">Costo total del credito: </li>
                            <li class="list-group-item">CAE:</li>
                        </ul>
                        <div id="resultadosbtns">
                            <center><button type="submit" id="btnLimpiar" class="btn btn-danger">Limpiar</button>
                                <button type="submit" id="btnGuardar" class="btn btn-primary">Guardar</button>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Tabla -->
                    <div class="table-responsive">
                        <table id="tablaPersonas" class="table table-striped table-hover table-light">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#id</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Tienda</th>
                                    <th scope="col">VCM</th>
                                    <th scope="col">N° cuotas</th>
                                    <th scope="col">Costo total</th>
                                    <th scope="col">CAE %</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>