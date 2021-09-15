<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Carbon\Carbon;
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
        // $dob = Carbon::parse($request['tanggal_lahir']);
        // $age = $dob->age;
        return view('dashboard.map.index-md', [
            'title' => 'Daftar Siswa Kelas',
            'classes' => Kelas::all(),
            // 'students' => Student::orderBy('updated_at', 'desc')->where('class_id', true)->get(),
            'prevpage' => 'Students',
            'prevlink' => '/dashboard/students'
        ]);
    }

    public function getStudents(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('class_id', function ($row) {
                    if ($row->class_id == 1) {
                        $color = 'bg-primary';
                        // $className = Kelas::find($row->class_id)->name;
                        $className = '1A';
                    } elseif ($row->class_id == 2) {
                        $color = 'bg-success';
                        $className = '1B';
                    } else {
                        $color = 'bg-danger';
                        $className = '1C';
                    }

                    $classColumn = '<span class="badge ' . $color . '">' .  $className . '</span>';
                    return $classColumn;
                })
                ->filter(function ($instance) use ($request) {
                    if ($request->get('class_id') == '1' || $request->get('class_id') == '2' || $request->get('class_id') == '3') {
                        $instance->where('class_id', $request->get('class_id'));
                    }
                    if (!empty($request->get('search'))) {
                        $instance->where(function ($w) use ($request) {
                            $search = $request->get('search');
                            $w->orWhere('nama', 'LIKE', "%$search%");
                        });
                    }
                })
                ->rawColumns(['class_id'])
                ->make(true);
        }
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
            'prevpage' => 'Students',
            'prevlink' => '/dashboard/students'
        ]);
    }
}
