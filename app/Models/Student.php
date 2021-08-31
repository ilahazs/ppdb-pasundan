<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['religion', 'path', 'role'];


    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }

    public function path()
    {
        return $this->belongsTo(PathRegistration::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
