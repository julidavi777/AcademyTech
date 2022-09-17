@extends('layouts.tech')
@section('head')
@section('title', 'Lista de cursos')
@endsection
@section('content')

<div class="w-2/3 rounded  mx-auto bg-white text-fuchsia-400 py-5 px-2">


    <table class="table-fixed mx-auto 4 text-gray-800 ">
        <div class="flex">
            <h1 class="flex-auto text-2xl text-center"><b>LISTA DE CURSOS</b></h1> 
            <a class=" rounded mr-4 text-white px-2 py-1 bg-indigo-600" href="{{url('course/create')}}">Crear Curso</a></div>
        <hr class="my-4">
        <thead class="text-xl text-left">
            <tr>
                <th class="">|Nombre</th>
                <th class="">|Descripción</th>
                <th class="">|Duracion</th>
                <th class="">|Imagen</th>
                <th colspan="3" class=""></th>
            </tr>
        </thead>
        <tbody class="text-lg">
            <tr>
                @foreach($subject as $course)
                 <td class="my-7">{{$course->name}}</td>
                 <td class="my-7">{{$course->description}}</td>
                 <td class="my-7">{{$course->duration}}</td>
                 <td class="my-7"><img src="{{Storage::url($course->image)}}" width="40" alt="{{$course->description}}"></td>
                <td colspan="3">
                     <td class="my-7"> 
                        <div class="grid grid-cols-3">
                      
                            <form action="{{url('/course/'.$course->id)}}" method="post">
                                @csrf
                                {{method_field('GET')}}
                                <button class="rounded-none px-2 py-2 text-white bg-gray-800">ver</button>
                            </form>
                            
                            <form action="{{url('/course/'.$course->id .'/edit')}}" method="post">
                                @csrf
                                {{method_field('GET')}}
                                <button class="rounded-none  px-2 py-2 text-white bg-blue-500">Editar</button>
                            </form>
                            <form action="{{url('/course/'.$course->id) }}" method="post">
                                @csrf
                                {{ method_field('DELETE')}}
                                <button class="rounded-none px-2 py-2 text-white bg-red-500" onclick="return confirm('Seguro que deseas eliminar?')">Eliminar</button> 
                            </form>
                        </div>

                </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    
    @endsection
    
    
    
</div>
</main>

