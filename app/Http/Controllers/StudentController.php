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
        // return view('slogin');
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
            $studentData = request()->except(['_token']);
            Student::where('id', '=', $id)->update($studentData);
            Alert::success('Congrats', 'You\'ve Successfully Registered');
            return view('welcome');
        } else {
            return redirect()->back()->with('alert', 'El documento no se encuentra registrado en el sistema');
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
