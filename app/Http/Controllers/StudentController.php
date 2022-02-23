<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use function Symfony\Component\Finder\name;

class StudentController extends Controller
{
    protected $student;
    protected $city;

    public function index()
    {
        return view('add-student');
    }
    public function create(Request $request)
    {
        $this->student          = new Student();
        $this->student->name    = $request->name;
        $this->student->email   = $request->email;
        $this->student->mobile  = $request->mobile;
        $this->student->save();

        return redirect()->back()->with('message', 'Student info save successfully');
    }
}
