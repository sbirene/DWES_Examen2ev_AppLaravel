<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumnos</title>
    @vite('resources/css/app.css')
</head>
<body>
<h1 class="text-center text-45px my-5 text-amber-500">ALUMNOS</h1>

<a href="{{route("alumnos.create")}}" class="w-fit my-5 mx-auto rounded-full bg-amber-500 px-3 py-2 px-5 block">Crear
    un nuevo alumno</a>

<div class="p-6 mx-auto border-2 rounded-md mb-6" style="width: fit-content">
    <table class="m-auto">
        <caption class="mb-8 underline">Listado de alumnos</caption>
        <tr>
            <th class="text-left">Nombre</th>
            <th class="text-left">Apellidos</th>
            <th class="text-left">Dirección</th>
            <th class="text-left">Teléfono</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($alumnos as $alumno)
            <tr>
                <td class="pr-8">{{$alumno->nombre}}</td>
                <td class="pr-8">{{$alumno->apellido}}</td>
                <td class="pr-8">{{$alumno->direccion}}</td>
                <td class="pr-8">{{$alumno->telefono}}</td>
                <td>
                    <a href="{{route("alumnos.edit", $alumno->id)}}"
                       class="mx-8 my-2 mx-auto px-3 py-1 block rounded-full bg-amber-500">Editar</a>
                </td>
                <td>
                    <form action="{{route("alumnos.destroy", $alumno->id)}}" method="post">
                        @csrf
                        @method("DELETE")
                        <input type="submit" value="Borrar"
                               class="my-2 mx-auto px-3 py-1 block rounded-full bg-amber-500 cursor-pointer">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
