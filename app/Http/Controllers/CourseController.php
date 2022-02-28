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
        /* $datos['students'] = DB::table('students')
        ->leftJoin('user_student', 'user_student.student_id', '=', 'students.id')
        ->where('user_student.user_id', '=', $id)
            ->get(); */
            /* $datos['students'] = Student::Where(); */
        /* SELECT students.* FROM students LEFT JOIN user_student ON user_student.student_id = students.id WHERE user_student.user_id = 2; */
        $course = Course::findOrFail($id);
        $userId = auth()->id();
        if ($userId == 1) {
            # code...
            $datos['students'] = Student::All();
            return view('list',$datos);
        }else{
            $datos['students'] = DB::table('students')
            ->select('students.*')
           ->join('user_student', function ($join) use ($userId) {
               $join->on('user_student.student_id','=','students.id' )
                    ->where('user_student.user_id', '=', $userId);
           })->get();
           return view('list',$datos);
        }
    }

    
    public function update(Request $request)
    {
        
    }

    
    public function destroy(Student $student)
    {
        //
    }
}
