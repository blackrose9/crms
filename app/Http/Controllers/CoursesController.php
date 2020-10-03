<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
//    makes sure the user is logged in before they can add a course
    public function __construct(){
        $this->middleware('auth');
    }

    public function create (Course $course) {
        $course = Course::all();
        return view('courses/create', [
            'course' => $course,
        ]);

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
