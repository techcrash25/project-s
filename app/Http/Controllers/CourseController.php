<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
class CourseController extends Controller
{
    public function index()
    {
        
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        
    }

   
    public function show(Student $student)
    {
    }

    
    public function edit($id)
    {
         $course = Course::findOrFail($id);
        /*
        $datos['student'] = DB::table('students')
        ->leftJoin('course_student', 'student.id', '=', 'course_student.id')
            ->get(); */
            $datos['students'] = Student::all();
        return view('list',$datos);
    }

    
    public function update(Request $request)
    {
        
    }

    
    public function destroy(Student $student)
    {
        //
    }
}
