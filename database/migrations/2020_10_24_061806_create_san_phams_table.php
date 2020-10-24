<?php

use Brick\Math\BigInteger;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('TenSP')->nullable();
            $table->string('ThongTin')->nullable();
            $table->integer('GiaTien')->nullable();
            $table->integer('SoLuongTonKho')->nullable();
            $table->unsignedBigInteger('LoaiSPID');
            $table->string('AnhMinhHoa')->nullable();
            $table->boolean('TrangThai');
            $table->timestamps();

            $table->foreign('LoaiSPID')->references('ID')->on('loai_san_phams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_phams');
    }
}
