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

@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="text-primary">Editar Usuario</h4>
                </div>
            </div>
        </div>
        <hr>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="row">
            <div class="col-lg-12">
                <form class="p-2" method="POST" action="/usuarios/{{ $usuario->id }}">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <input type="text" name="name" class="form-control form-control-lg"
                                placeholder="Digite o nome" value="{{ $usuario->name }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="email" name="email" class="form-control form-control-lg"
                            placeholder="Digite o E-mail" value="{{ $usuario->email }}">
                    </div>

                    <div class="mb-3">
                        <select class="form-control form-control-lg" name="tipo_id">
                            @foreach ($tipos as $tipo)
                                <option {{ $usuario->tipo_id == $tipo->id ? 'selected' : '' }}
                                    value="{{ $tipo->id }}"> {{ $tipo->name }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
