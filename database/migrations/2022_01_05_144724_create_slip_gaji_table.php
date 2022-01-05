<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlipGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slip_gaji', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->date('tanggal');
            $table->string('jenis_pekerjaan');
            $table->integer('durasi')->nullable();
            $table->bigInteger('pembayaran');
            $table->bigInteger('makan');
            $table->bigInteger('transport');
            $table->bigInteger('total');
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
        Schema::dropIfExists('slip_gaji');
    }
}
