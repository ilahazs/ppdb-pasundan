<?php

namespace App\Http\Controllers;

use App\Models\PathRegistration;
use App\Models\Religion;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Student::all());
        return view('dashboard.students.index', [
            'title' => 'Students',
            'students' => Student::latest()->get(),
            'prevpage' => 'Home',
            'prevlink' => '/dashboard'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.students.create', [
            'title' => 'Add New Students',
            'religions' => Religion::all(),
            'paths' => PathRegistration::all(),
            'prevpage' => 'Students',
            'prevlink' => '/dashboard/students'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'telp' => ['required', 'max:30', 'unique:students'],
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required',
            'religion_id' => 'required',
            'path_id' => 'required',
            'role_id' => 'required',
        ]);

        Student::create($validatedData);
        return redirect('/dashboard/students')->with('status', 'New student has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('dashboard.students.show', [
            'title' => 'Detail Student',
            'student' => $student,
            'prevpage' => 'Student',
            'prevlink' => '/dashboard/students'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('dashboard.students.edit', [
            'title' => 'Edit Student',
            // 'detailtitle' => 'Edit Student: ' . $student->nama,
            'student' => $student,
            'religions' => Religion::all(),
            'paths' => PathRegistration::all(),
            'prevpage' => 'Students',
            'prevlink' => '/dashboard/students'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/dashboard/students')->with('status', 'Student <strong>' . $student->nama . '</strong> has been deleted!');
    }
}
