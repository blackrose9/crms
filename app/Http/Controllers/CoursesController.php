<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
//    makes sure the user is logged in before they can add a course
    public function __construct(){
        $this->middleware('auth');
    }

    public function create () {
        return view('courses/create');
    }

    public function store () {
        $data = \request() -> validate([
           'coursename' => 'required',
           'teachername' => 'required',
           'hours' => 'required',
        ]);

        Course::create($data);
        return redirect('course/create');
    }

}
