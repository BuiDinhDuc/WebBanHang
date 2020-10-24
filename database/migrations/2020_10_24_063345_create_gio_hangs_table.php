<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGioHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gio_hangs', function (Blueprint $table) {
            $table->bigIncrements('ID');

            $table->unsignedBigInteger('TaiKhoanID');
            $table->unsignedBigInteger('SanPhamID');

            $table->timestamps();

           $table->foreign('TaiKhoanID')->references('ID')->on('tai_khoans');
            $table->foreign('SanPhamID')->references('ID')->on('san_phams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gio_hangs');
    }
}
