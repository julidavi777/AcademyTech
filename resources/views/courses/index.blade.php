@extends('layouts.tech')
@section('head')
@section('title', 'Lista de cursos')
@endsection
@section('content')

<form action="127.0.0.1/" method="post" enctype="multipart/form-data">
    <div class="w-2/4 bg-white  rounded mx-auto py-3 px-3 text-fuchsia-400 text-lg">
        <h2 class="text-center mb-3"><b>Por favor ingrese los datos del curso</b></h2>
        <hr>
        <div class="px-3 py-3">

            <div class="grid grid-cols-4 gap-4 w-11/12 mx-auto ">
                <div class="py-1">
                    <label class="cols-span-2" for="name"><b>Nombre</b></label>
                </div>
                <div class=" col-span-3">
                    <input placeholder="Escriba el nombre del curso" name="name"
                        class="pl-2 py-1 bg-gray-200 rounded  w-11/12" type="text">
                </div>


                <div class="py-1">
                    <label class="cols-span-2" for="name"><b>Duracion</b></label>
                </div>

                <div class=" col-span-3">
                    <input placeholder="Duración" name="name" class="pl-2 py-1 bg-gray-200 rounded  w-11/12"
                        type="text">
                </div>
                <div class="py-1">
                    <label class="cols-span-2" for="name"><b>Descripción</b></label>
                </div>
                <div class=" col-span-3">
                    <textarea class="pl-2 py-1 bg-gray-200 rounded  w-11/12" name="description" id="" rows="5"></textarea>
                </div>
                <div class=" col-span-3 bg-gray-200">
                   <input type="file" name="id" id="">
                </div>
                <div class="">
                    <button type="submi" class="rounded hover:rounded-lg bg-fuchsia-400 py-1  w-3/4 text-center text-white "><b>Enviar</b> </button>
                </div>

            </div>
        </div>

    @endsection

</form>

</main>
