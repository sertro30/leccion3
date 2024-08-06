<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de Clientes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clientes.create') }}"> Crear Nuevo Cliente</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Fecha de Nacimiento</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->apellido }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td>{{ $cliente->fechaNac }}</td>
            <td>
                <form action="{{ route('clientes.destroy', $cliente->id_cliente) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('clientes.show', $cliente->id_cliente) }}">Mostrar</a>
                    <a class="btn btn-primary" href="{{ route('clientes.edit', $cliente->id_cliente) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>
