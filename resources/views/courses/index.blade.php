@extends('layouts.tech')
@section('head')
@section('title', 'Lista de cursos')
@endsection
@section('content')

<div class="w-1/2 rounded  mx-auto bg-white text-fuchsia-400 py-5 px-2">


    <table class="table-fixed mx-auto 4 text-gray-800 ">
        <h1 class="text-2xl text-center"><b>LISTA DE CURSOS</b></h1> 
        <hr class="my-4">
        <thead class="text-xl text-left">
            <tr>
                <th class="">|Nombre</th>
                <th class="">|Descripción</th>
                <th class="">|Duracion</th>
                <th class="">|Imagen</th>
                <th class="">|Acciones</th>
            </tr>
        </thead>
        <tbody class="text-lg">
            <tr>
                @foreach($subject as $course)
                <td>{{$course->name}}</td>
                <td>{{$course->description}}</td>
                <td>{{$course->duration}}</td>
                <td><img src="{{Storage::url($course->image)}}" width="40" alt="{{$course->description}}"></td>
                <td><form action="{{url('/course/'.$course->id .'/edit')}}" method="post">
                @csrf
                {{method_field('GET')}}
                <button class="rounded-none px-2 py-1 text-white bg-blue-500">Editar</button> 
                
                </form></td>
                <td><form action="{{url('/course/'.$course->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE')}}
                    <button class="rounded-none px-2 py-1 text-white bg-red-500" onclick="return confirm('Seguro que deseas eliminar?')">Eliminar</button> 
                </form>
            </button>
            
        </form></td>
    </tr>
    @endforeach
    </tbody>
    </table>
    
    @endsection
    
    
    
</div>
</main>
