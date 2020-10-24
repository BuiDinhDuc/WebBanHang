<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('TaiKhoanID');
            $table->date('NgayMua')->nullable();
            $table->string('DiaChiGiaoHang')->nullable();
            $table->string('SDTGiaoHang')->nullable();
            $table->integer('TongTien')->nullable();
            $table->boolean('TrangThai');
            $table->timestamps();

            $table->foreign('TaiKhoanID')->references('ID')->on('tai_khoans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoa_dons');
    }
}
