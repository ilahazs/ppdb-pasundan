<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            // $table->enum('status', ['accepted', 'pending'])->default('pending');
            $table->foreignId('class_id')->nullable();
            $table->foreignId('tahunAjaran_id')->nullable();
            $table->foreignId('religion_id');
            $table->foreignId('status_id')->default(1);
            $table->foreignId('role_id')->default(1);
            // $table->foreignId('user_id');
            $table->foreignId('regmethod_id');
            $table->string('nama');
            $table->string('telp', 30)->unique();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
