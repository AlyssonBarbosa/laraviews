@php
$tipo = new stdclass();
$tipo2 = new stdclass();

$tipo->id = 1;
$tipo->name = 'Administrador';

$tipo2->id = 2;
$tipo2->name = 'Normal';

$tipos[] = $tipo;
$tipos[] = $tipo2;

$usuario = new stdClass();
$usuario->id = 1;
$usuario->name = 'Exemplo 1';
$usuario->email = 'email@a.com';
$usuario->tipo_id = 1;
$usuario->tipo = $tipo;

@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="text-primary">Usuario</h4>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-12">

                <div class="row mb-3 gx-3">
                    <div class="col">
                        <div class="form-group">
                            <label class="mb-2" for=""> Nome </label>
                            <input disabled type="text" class="form-control form-control-lg"
                                value="{{ $usuario->name }}">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="mb-2" for=""> Email </label>
                    <input disabled type="text" class="form-control form-control-lg" value="{{ $usuario->email }}">
                </div>

                <div class="mb-3">
                    <label class="mb-2" for=""> Tipo de Usuario </label>
                    <input disabled type="text" class="form-control form-control-lg"
                        value="{{ $usuario->tipo->name }}">
                </div>

            </div>
        </div>
    </div>

</body>

</html>
