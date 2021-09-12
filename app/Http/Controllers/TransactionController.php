<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\RegistrationMethod;
use App\Models\Religion;
use App\Models\Student;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Student::latest()->where('status', 'accepted')->get());
        return view('dashboard/transaction/index', [
            'title' => 'Transaction Student',
            'students' => Student::latest()->get(),
            // 'religions' => Religion::all(),
            // 'regmethods' => RegistrationMethod::all(),
            'prevpage' => 'Students',
            'prevlink' => '/dashboard/students'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd(Student::find($id)->id);
        return view('dashboard.transaction.edit', [
            'title' => 'Edit Student',
            'student' => Student::find($id),
            'religions' => Religion::all(),
            'regmethods' => RegistrationMethod::all(),
            'classes' => Kelas::all(),
            'prevpage' => 'Transaction',
            'prevlink' => '/dashboard/transaction'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'telp' => ['required', 'max:30', 'min:10'],
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required',
            'religion_id' => 'required',
            'regmethod_id' => 'required',
            'role_id' => 'required',
            // 'class_id' => 'required',
            'status' => 'required',
        ]);

        Student::where('id', $id)->update([
            'nama' => $request->nama,
            'telp' => $request->telp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'religion_id' => $request->religion_id,
            'regmethod_id' => $request->regmethod_id,
            'role_id' => $request->role_id,
            'class_id' => $request->class_id,
            'status' => $request->status,
        ]);

        return redirect('/dashboard/transaction')->with('status', 'Data student <strong>' . Student::find($id)->nama . '</strong> has been changed!');
    }

    public function move(Request $request, $id)
    {
        Student::where('id', $id)->update([
            'status' => $request->status,
        ]);
        return redirect('/dashboard/transaction')->with('status', 'Data student <strong>' . Student::find($id)->nama . '</strong> has been moved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
