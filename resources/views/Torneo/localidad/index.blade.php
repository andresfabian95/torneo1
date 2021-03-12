<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('Localidad.create')}}" class="btn btn-primary mt-5 mb-3">CREAR NUEVO USUARIO</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>LOCALIDAD</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($localidad as $local)
                        <tr>
                            <td>{{$local->localidad}}</td>

                            <td>
                                <form action="{{route('Localidad.destroy',$local->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('Localidad.show',$local->id)}}"class="btn btn-info">Detalles</a>
                                    <a href="{{route('Localidad.edit',$local->id)}}"class="btn btn-warning">Editar</a>
                                    <button type="submit"class="btn btn-danger">Eliminar</button>
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

