<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index() {
        return view('courses.index');
    }
    public function create() {
        return view('courses.create');
    }
    public function show($course) {
        return view('courses.show');
    }
}