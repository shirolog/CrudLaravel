<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::simplePaginate(5);

        return view('index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
        ]);

        $student = new Student;
        $student-> name = $request->input('name');
        $student-> email = $request->input('email');
        $student-> address = $request->input('address');
        $student->save();

        return redirect()->route('index', compact('student'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
        ]);

        $student -> name = $request->input('name');
        $student -> email = $request->input('email');
        $student -> address = $request->input('address');
        $student->save();

        $page = request()->input('page');
        return redirect()->route('index', compact('student', 'page'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        $page = request()->input('page');
        return redirect()->route('index', ['page' => $page]);
    }
}
