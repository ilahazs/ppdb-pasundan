<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTahunAjaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahunAjaran', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->string('nama', 30); // 2020/2021
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
        Schema::dropIfExists('tahunAjaran');
    }
}
