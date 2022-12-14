<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $subject = Course::all(); 
       return view('courses.index', compact('subject')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $subject = Course::all(); 
        return view('courses.create', compact('subject')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = [
            'name' => 'required|string|max:45',
            'description' => 'required|string|max:191',
            'duration' => 'required|numeric| min:1|max:99',
            'image' => 'required|max:10000|mimes:jpg,png,jpeg'
        ];

        $message = [
            'required' => 'El :attrubute es requerido', 
            'description.required' => 'la descripción es requerida',
            'duration.required' => 'la duracion es requerida y solo se aceptan números',
            'image.required' => 'la imagen es requerida y el peso máximo es de 10Mb'

        ];
        $this->validate($request,$fields, $message); 
        $subject = request()->except('_token', 'image');
        if(request()->hasFile('image')){
            $subject['image'] = request('image')->store('courses', 'public'); 
        } 
        Course::insert($subject); 
        return redirect('course')->with('message', 'Se ha creado el curso existosamente');         

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Course::find($id); 
        return view('courses.show', compact('subject')); 
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $subject = Course::find($id); 
       
       return view('courses.index', compact('subject'))->with('message', 'El curso ha sido editado ');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subject = Course::find($id); 
        $subject->fill(request()->except(['image', '_token', '_method']));
        if($request->hasFile('image')){
            $subject->image =  request('image')->store('courses', 'public') ;
        } 
        $subject->save(); 
       return view('courses.edit', compact('subject') );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Course::find($id); 
        if(Storage::delete('public/'. $subject->image )){
            Course::destroy($id); 
        }
        return redirect('course')->with('message', 'El curso se ha borrado exitosamente'); 
    }
}
