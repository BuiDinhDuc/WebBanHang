<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCTHoaDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_t_hoa_dons', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('HoaDonID');
            $table->unsignedBigInteger('SanPhamID');
            $table->integer('SoLuong')->nullable();
            $table->integer('DonGia')->nullable();

            $table->timestamps();

            $table->foreign('HoaDonID')->references('ID')->on('hoa_dons');
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
        Schema::dropIfExists('c_t_hoa_dons');
    }
}
