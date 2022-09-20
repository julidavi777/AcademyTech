@extends('courses.form')
@extends('layouts.tech')
@section('head')
@section('title', 'Crear un curso')
@endsection
@section('content')

@if (count($errors) > 0)
    <div class="container mx-auto bg-orange-100  border-yellow-500"role="alert">
        @foreach ($errors->all() as $error)
        <div class="container py-2 bg-yellow-100 border-l-4 mb-4 border-yellow-500  mx-auto text-yellow-700" role="alert">
            <ul>
                    <p class="font-bold">Alerta!</p>
                    <li><p>{{ $error }}</p></li>
                </ul>
        </div>

    </div>
@endforeach

@endif

<form action="/course" method="post" enctype="multipart/form-data">
    @csrf



    <div class="w-2/4 bg-white  rounded mx-auto py-3 px-3 text-fuchsia-400 text-lg">
        <h2 class="text-center mb-3"><b>Por favor ingrese los datos del curso</b></h2>
        <hr>
        <div class="px-3 py-3">

            <div class="grid grid-cols-4 gap-4 w-11/12 mx-auto ">
                <div class="py-1">
                    <label class="cols-span-2" for="name"><b>Nombre</b></label>
                </div>
                <div class=" col-span-3">
                    <input value="{{isset($subject->name)?$subject->name:old('name')}}" placeholder="Escriba el nombre del curso" name="name"
                        class="pl-2 py-1 bg-gray-200 rounded  w-11/12" type="text">
                </div>


                <div class="py-1">
                    <label class="cols-span-2" for="duration"><b>Duracion</b></label>
                </div>

                <div class=" col-span-3">
                    <input value="{{isset($subject->duration)?$subject->duration:old('duration')}}"  placeholder="Duración" name="duration"
                        class="pl-2 py-1 bg-gray-200 rounded  w-11/12" type="text">
                </div>
                <div class="py-1">
                    <label class="cols-span-2" for="description"><b>Descripción</b></label>
                </div>
                <div class=" col-span-3">
                    <textarea class="pl-2 py-1 bg-gray-200 rounded  w-11/12" name="description" id="" rows="5"></textarea>
                </div>
                <div class=" col-span-3  text-hidden">
                    <input value="{{isset($subject->description)?$subject->description:old('description')}}"
                        class="block w-full text-sm text-slate-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-fuchsia-300 file:text-violet-700
                hover:file:bg-violet-100"
                        type="file" name="image"  id="">
                </div>
                <div class="">
                    <button type="submit" onclick="location.href='/course'"
                        class="rounded-full hover:bg-violet-100 bg-fuchsia-300 py-1  w-3/4 text-center text-violet-700 ">Enviar
                    </button>
                </div>

            </div>
        </div>

    @endsection

</form>

</main>
