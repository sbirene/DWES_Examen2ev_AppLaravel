<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Alumno</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="w-fit mx-auto mt-16">
    <fieldset class="w-fit">
        <legend class="mb-4 border-b-2 border-black">Datos del alumno</legend>
        <form action="{{route("alumnos.update", $alumno->id)}}" method="POST" class="w-fit">
            @csrf
            @method("PUT")
            <div class="mb-4">
                <label for="nombre" class="mr-4">Nombre</label><input type="text" name="nombre" id="nombre"
                                                                      value="{{$alumno->nombre}}">
            </div>

            <div class="mb-4">
                <label for="apellido" class="mr-4">Apellido</label><input type="text" name="apellido" id="apellido"
                                                                          value="{{$alumno->apellido}}">
            </div>

            <div class="mb-4">
                <label for="dir" class="mr-4">Dirección</label><input type="text" name="direccion" id="dir"
                                                                      value="{{$alumno->direccion}}">
            </div>

            <div class="mb-4">
                <label for="tel" class="mr-4">Teléfono</label><input type="text" name="telefono" id="tel"
                                                                value="{{$alumno->telefono}}">
            </div>

            <input type="submit" value="Editar alumno"
                   class="my-5 mx-auto px-3 py-1 block bg-amber-500 rounded-full cursor-pointer">
        </form>
    </fieldset>
</div>
<div>
    <a href="{{ url('/alumnos') }}" class="my-5 w-fit mx-auto px-3 py-1 block bg-amber-500 rounded-full cursor-pointer">Volver</a>
</div>
</body>
</html>
