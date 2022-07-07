@php
$tipo = new stdclass();

$tipo->id = 1;
$tipo->name = 'Administrador';

$tipos[] = $tipo;
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="text-primary">Cadastrar Usuario</h4>
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
                <form class="p-2" method="POST" action="/usuarios">
                    @csrf
                    <div class="row mb-3 gx-3">
                        <div class="col">
                            <input type="text" name="name" class="form-control form-control-lg"
                                placeholder="Digite o nome">
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="email" name="email" class="form-control form-control-lg"
                            placeholder="Digite o E-mail">
                    </div>

                    <div class="mb-3">
                        <input type="tel" name="phone" class="form-control form-control-lg"
                            placeholder="Digite o telefone">
                    </div>


                    <div class="mb-3">
                        <select class="form-control form-control-lg" name="tipo_id">
                            @foreach ($tipos as $tipo)
                                <option value="{{ $tipo->id }}"> {{ $tipo->name }} </option>
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
