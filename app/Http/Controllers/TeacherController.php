<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('home');
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

    
    public function edit(Request $request)
    {
        
    }

    
    public function update(Request $request)
    {
        
    }

    
    public function destroy(Student $student)
    {
        //
    }
}
