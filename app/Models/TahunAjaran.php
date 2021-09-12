<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    use HasFactory;
    protected $table = 'tahunAjaran';
    protected $guarded = ['id'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
