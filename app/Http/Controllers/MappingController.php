<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;
use Yajra\DataTables\DataTables;

class MappingController extends Controller
{
    public function index(Request $request)
    {
        // $data = Student::all();
        // dd(Student::find(1)->nama);
        // if ($request->ajax()) {
        //     // $data = User::select('*');
        //     $data = Student::all();
        //     return DataTables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function ($row) {
        //             $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
        //             return $btn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
        // return view('dashboard.map.index');
        return view('dashboard.map.index', [
            'title' => 'Daftar Siswa Kelas',
            'classes' => Kelas::all(),
            'students' => Student::latest()->get(),
            'prevpage' => 'Students',
            'prevlink' => '/dashboard/students'
        ]);
    }

    public function ajaran()
    {
        return view('dashboard/map/ajaran', [
            'title' => 'Daftar Tahun Ajaran',
            // 'classes' => Kelas::all(),
            // 'students' => Student::latest()->get(),
            'prevpage' => 'Students',
            'prevlink' => '/dashboard/students'
        ]);
    }

    public function mapel()
    {
        return view('dashboard/map/mapel', [
            'title' => 'Daftar Mapel',
            // 'classes' => Kelas::all(),
            // 'students' => Student::latest()->get(),
            'prevpage' => 'Students',
            'prevlink' => '/dashboard/students'
        ]);
    }
}
