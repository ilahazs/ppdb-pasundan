<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
    protected $with = ['tahunAjaran', 'kelas', 'religion', 'regmethod', 'role'];
    // protected $table = 'siswa';

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function tahunAjaran()
    {
        return $this->belongsTo(TahunAjaran::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }

    public function regmethod()
    {
        return $this->belongsTo(RegistrationMethod::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // public function transaction()
    // {
    // }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
