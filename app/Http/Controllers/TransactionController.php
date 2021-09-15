<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\RegistrationMethod;
use App\Models\Religion;
use App\Models\Status;
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
        return view('dashboard/transaction/index', [
            'title' => 'Transaction Student',
            'students' => Student::latest()->get(),
            'newStudents' => Student::orderBy('updated_at', 'desc')->where('status_id', 2)->get(),
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
            'statuses' => Status::all(),
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
            // 'role_id' => 'required',
            // 'class_id' => 'required',
            // 'status_id' => 'required',
        ]);

        Student::where('id', $id)->update([
            'nama' => $request->nama,
            'telp' => $request->telp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'religion_id' => $request->religion_id,
            'regmethod_id' => $request->regmethod_id,
            'class_id' => $request->class_id,
            'status_id' => $request->status_id,
        ]);
        $flashDetail = ($request->has('message') ? 'moved!' : 'changed!');
        return redirect('/dashboard/transaction')->with('status', 'Data student <strong>' . Student::find($id)->nama .
            '</strong> has been ' . $flashDetail);
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
