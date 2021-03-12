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
        <div class="col-md-4 mt-5">
            <form action="{{route('Localidad.store')}}" method="post">
                @csrf
                <div class=" form-goup">
                    <label for="localidad">NOMBRES</label>
                    <input type="text" name="localidad" id="localidad" class="form-control">
                </div>


                <hr>
                <button class="btn btn-primary" type="submit">GUARDAR USUARIO</button>
                <a href="{{ route('Localidad.index')}}" >CANCELAR</a>

            </form>
        </div>

    </div>
</div>
</body>
</html>


