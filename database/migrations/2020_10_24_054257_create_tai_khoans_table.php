<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaiKhoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_khoans', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('TenTaiKhoan');
            $table->string('MatKhau');
            $table->string('Email')->nullable();
            $table->string('SDT')->nullable();
            $table->string('DiaChi')->nullable();
            $table->string('HoTen')->nullable();
            $table->boolean('LaAdmin');
            $table->string('AnhDaiDien')->nullable();
            $table->boolean('TrangThai');


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
        Schema::dropIfExists('tai_khoans');
    }
}
