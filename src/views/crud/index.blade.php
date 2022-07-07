<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="text-primary">Lista de Usuarios</h4>
                </div>
                <div>
                    <a class="btn btn-primary" href="/usuarios/create">Novo Usuario</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div id="showAlert"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Primeiro Nome</th>
                                <th>Email</th>
                                <th>Ações</th>
                                {{-- <th> Telefone </th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $obj = new stdClass();
                                $obj->id = 1;
                                $obj->name = 'Exemplo 1';
                                $obj->email = 'email@a.com';
                                $usuarios[] = $obj;
                            @endphp

                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <td>
                                        {{ $usuario->id }}
                                    </td>
                                    <td>
                                        {{ $usuario->name }}
                                    </td>
                                    <td>
                                        {{ $usuario->email }}
                                    </td>
                                    {{-- <td>
                                        {{ $usuario->phone->numero }}
                                    </td> --}}
                                    <td>
                                        <a href="usuarios/{{ $usuario->id }}"
                                            class="btn btn-primary btn-sm rounded-pill py-0">Mostrar</a>
                                        <a href="usuarios/{{ $usuario->id }}/edit"
                                            class="btn btn-success btn-sm rounded-pill py-0">Editar</a>
                                        <form style="display:inline-block" action="usuarios/{{ $usuario->id }}"
                                            method="post">

                                            @csrf
                                            @method('delete')

                                            <button type="submit"
                                                class="btn btn-danger btn-sm rounded-pill py-0">Deletar</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
