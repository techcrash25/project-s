<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function index()
    {
        return view('welcome');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $document = $request->document;
        $id = DB::table('students')
            ->select('id')
            ->where('document', '=', $document)
            ->value('id');

        $existencia = DB::table('students')
            ->select('document')
            ->where('document', '=', $document)
            ->value('document');

        if ($existencia == $document) {
            $studentData = request()->only(['document', 'state']);
            Student::where('id', '=', $id)->update($studentData);
            if ($request->state == 1) {
                Alert::success('Gracias por participar', 'Puedes asistir con regularidad');
            } else {
                Alert::warning('¡Atención!', 'Presentas posibles sintomas de COVID19, porfavor ve a clases virtuales y quedate en casa');
            }
            return view('welcome');
        } else {
            Alert::error('Error', 'El documento no se encuentra en el sistema, verifique los datos');
            return view('welcome');
        }
    }


    public function show(Student $student)
    {
    }


    public function edit(Request $request)
    {
    }


    public function update(Request $request)
    {
        $document = $request->document;
        $id = DB::table('students')
            ->select('id')
            ->where('document', '=', $document)
            ->value('id');

        $studentData = request()->except(['_token']);
        Student::where('id', '=', $id)->update($studentData);

        return response()->json(['testeandoooo']);
    }


    public function destroy(Student $student)
    {
        //
    }
}
