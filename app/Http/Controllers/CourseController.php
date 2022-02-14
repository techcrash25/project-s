<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::get()->all();

        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            'Nombre' => 'required|string|max:100',
            'Apellido' => 'required|string|max:100',
            'Correo' => 'required|email',
        ];

        $mensaje = [
            'required' => 'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosCourse = request()->except('_token');
        Course::insert($datosCourse);
        // return response()->json($datosCourse);
        return redirect('Course')->with('mensaje', 'Course creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $Course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $Course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $Course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Course = Course::findOrFail($id);

        return view('Course.edit', compact('Course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $Course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $datosCourse = request()->except(['_token', '_method']);
        Course::where('id', '=', $id)->update($datosCourse);

        $Course = Course::findOrFail($id);
        // return view('Course.edit', compact('Course'));
        return redirect('Course')->with('mensaje', 'Datos actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $Course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::destroy($id);
        return redirect('Course')->with('mensaje', 'Course eliminado');
    }
}
