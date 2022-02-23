<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = auth()->id();

        if ($userId == 1) {
            # code...
            $datos['courses'] = Course::paginate(10);
            return view('home', $datos);
        }else{
            $datos['courses'] = Course::where('user_id','=',$userId)->get();
            return view('home', $datos);
        }
    }


}
