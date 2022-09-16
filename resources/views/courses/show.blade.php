@extends('courses.form')
@extends('layouts.tech')
@section('head')
@section('title', 'Editar curso')
@endsection
@section('content')

    <div class="w-2/4 bg-white  rounded mx-auto py-3 px-3 text-fuchsia-400 text-lg">
        <h2 class="text-center mb-3"><b>Por favor ingrese los datos del curso</b></h2>
        <hr>
        <div class="px-3 py-3">
    
            <div class="grid grid-cols-4 gap-4 w-11/12 mx-auto ">
                <div class="py-1">
                    <label class="cols-span-2" for="name"><b>Nombre</b></label>
                </div>
                <div class=" col-span-3">
                    <span class="text-xlg">{{$subject->name}}</span>
                </div>
    
    
                <div class="py-1">
                    <label class="cols-span-2" for="duration"><b>Duracion</b></label>
                </div>
    
                <div class=" col-span-3">
                    <span class="text-xlg">{{$subject->duration}}</span>
                </div>
                <div class="py-1">
                    <label class="cols-span-2" for="description"><b>Descripción</b></label>
                </div>
                <div class=" col-span-3">
                    <span class="text-xlg">{{$subject->description}}</span>
                </div>
                <div class="py-1">
                    <label class="cols-span-2" for="description"><b>Imagen</b></label>
                </div>
                <div class=" col-span-3">
                    <span class="text-xlg"><img src="{{Storage::url( $subject->image)}}" width="100" alt=""></span>
                </div>
                <div class=" col-span-3  text-hidden">
                    <a href="{{url('/course')}}">
                        <button type="submit" 
                        class="rounded-full hover:bg-gray-500  bg-gray-800 py-1  w-1/4 text-center text-white ">Regresar
                    </button>                    
                </a> 
                </div>
                <div class="">
                    <button type="submit" 
                        class="rounded-full hover:bg-violet-100 bg-fuchsia-300 py-1  w-3/4 text-center text-violet-700 ">Enviar
                    </button>
                </div>
    
            </div>
        </div>  
    
    @endsection
    
</form>

</main>